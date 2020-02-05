<?php 
/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	public function index()
	{
		$data['dt_produk'] = $this->barang->tampil()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
		$this->load->view('dashboard',$data);
	}
}
?>