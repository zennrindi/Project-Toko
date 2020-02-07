<?php 
/**
 * 
 */
class Data_barang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
	}
	
	public function index()
	{
		$data['produk'] = $this->model_barang->tampil()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('templates_admin/footer');
	}
}