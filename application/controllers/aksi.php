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

}
?>