<?php 
/**
 * 
 */
class dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['produk'] = $this->barang->tampil()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
	}
	public function register()
	{
		$data['user'] = $this->barang->reg()->result();
		$this->load->view('register', $data);
	}
	function login()
	{
		$this->load->view('login');
	}
	public function regis()
	{
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$pwd = md5($this->input->post('pass'));
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$level = $this->input->post('level');

		$data = array(
			'id' 		=> $id_user,
			'nama' 		=> $nama,
			'pass' 		=> $pwd,
			'username' 	=> $username,
			'email' 	=> $email,
			'level'		=> $level
		);

		$this->barang->register($data);
		redirect('dashboard/login');
	}
}
 ?>