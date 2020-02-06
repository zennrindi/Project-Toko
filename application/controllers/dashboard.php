<?php 
/**
 * 
 */
class dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('barang');
	}
	public function index()
	{
		$data['produk'] = $this->barang->tampil()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}
}
 ?>