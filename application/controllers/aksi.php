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

	public function elektronik()
	{
		$data['ktg'] = $this->mdl_aksi->kate();
		$this->load->view('kategori/header');
		$this->load->view('kategori/sidebar');
		$this->load->view('kategori/elektronik',$data);
		$this->load->view('kategori/footer');
	}
	public function wanita()
	{
		$data['ktg'] = $this->mdl_aksi->wnt();
		$this->load->view('kategori/header');
		$this->load->view('kategori/sidebar');
		$this->load->view('kategori/pakaian_wanita',$data);
		$this->load->view('kategori/footer');
	}
	public function pria()
	{
		$data['ktg'] = $this->mdl_aksi->lk();
		$this->load->view('kategori/header');
		$this->load->view('kategori/sidebar');
		$this->load->view('kategori/pakaian_laki',$data);
		$this->load->view('kategori/footer');
	}
	public function anak()
	{
		$data['ktg'] = $this->mdl_aksi->ank();
		$this->load->view('kategori/header');
		$this->load->view('kategori/sidebar');
		$this->load->view('kategori/pakaian_anak',$data);
		$this->load->view('kategori/footer');
	}
	public function olga()
	{
		$data['ktg'] = $this->mdl_aksi->penjas();
		$this->load->view('kategori/header');
		$this->load->view('kategori/sidebar');
		$this->load->view('kategori/olahraga',$data);
		$this->load->view('kategori/footer');
	}
	
}
?>