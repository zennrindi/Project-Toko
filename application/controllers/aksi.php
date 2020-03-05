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
		// id_prd, id_seller, session customer
		// simpan ke tabel order
		// simpan ke tabel order_dtl

		$id_prd2 = $this->uri->segment(3);
		$prod2 = $this->db->get_where('produk',array('id_prd' => $id_prd2))->row();
		$data['foto'] = $prod2->foto;
		$data['nm_prd'] = $prod2->nm_prd;
		$data['keterangan'] = $prod2->keterangan;
		$data['harga'] = $prod2->harga;

		// ambil dari trx_dtl where id_prd = $id_prd2
		// $data['jumlah'] = $prod2->jumlah;

		$data['ktg'] = $this->db->get('ktg')->result();
		$this->load->view('transaksi',$data);
	}
	

}
?>