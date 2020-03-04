<?php  
/**
 * 
 */
class Aksi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_aksi');
	}

	public function index()
	{
		// $ktg = $this->db->get('ktg');
		// $this->load->view('');
	}

	public function katagori()
	{
		$kode_ktg = $this->uri->segment(3);
		$data['produk'] = $this->db->get_where('produk',array('ktg' => $kode_ktg))->result();
		$data['ktg'] = $this->db->get('ktg')->result();
		$this->load->view('home',$data);
	}
	public function profile()
	{
		$cst = $this->uri->segment(3);
		$data['cust'] = $this->mdl_aksi->propil()->result();
		//$this->load->view('templates/header');
		//$this->load->view('templates/sidebar');
		$data['ktg'] = $this->db->get('ktg')->result();
		$this->load->view('profil', $data);
		//$this->load->view('templates/footer');
	}
	public function det()
	{
		$id_prd = $this->uri->segment(3);
		$prod = $this->db->get_where('produk',array('id_prd' => $id_prd))->row();
		$data['foto'] = $prod->foto;
		$data['nm_prd'] = $prod->nm_prd;
		$data['keterangan'] = $prod->keterangan;
		$data['harga'] = $prod->harga;
		$data['ktg'] = $this->db->get('ktg')->result();
		$this->load->view('detail',$data);
	}
	public function order()
	{
		$data['trx_dtl'] = $this->mdl_aksi->trx()->result();
		$data['ktg'] = $this->db->get('ktg')->result();
		$this->load->view('transaksi',$data);
	}

}
?>