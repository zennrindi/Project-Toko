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
	public function cek()
	{
		$username = $this->input->post('username');
		$pass = $this->input->Post('pass');

		$where = array('username' => $username);
		$cek_user = $this->barang->cek_username($where);
		if ($cek_user->num_rows() > 0) {
			echo "salah";
			foreach ($cek_user->result_array() as $key) {
				if (md5($pass) == $key['pass']) {
					$this->session->set_userdata($key);
					if ($key['level']=='1') {
						redirect(base_url('dashboard/seller'));
					} else {
						redirect(base_url('dashboard/'));
				} 
			}else {
				echo "salah";
					redirect(base_url('dashboard/login'));
				}
			}
		} else {
			echo "salah";
			redirect('dashboard/login');
		}
	}
	public function oyi()
	{	
		$data['seller'] = $this->admin_mdl->ck()->result();

		$this->load->view('templates/header');
		$this->load->view('dt_seller', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
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

	function seller()
	{
		
		$this->load->view('seller/reseller');
	}
	public function simpan_tambah()
	{
		$id = $this->input->post('id-prd');
		$nama = $this->input->post('nm_prd');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('ktg');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$foto = $this->input->post('foto');

		$data = array
		(
			'id_prd' => $id, 
			'nm_prd' => $nama,
			'keterangan' => $keterangan,
			'ktg' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'foto' => $foto
		);

		$this->barang->simpan_tambah($data, 'produk');
		redirect(base_url('dashboard/data'));
	}
	public function data()
	{
		$data['produk'] = $this->barang->tampil()->result();
		/*$this->load->view('seller/header');
		$this->load->view('seller/sidebar');*/
		$this->load->view('seller/dt_brg',$data);
		//$this->load->view('seller/footer');
	}
	public function data_jual()
	{
		$data['order'] = $this->barang->tampil_jual()->result();
		$this->load->view('seller/header');
		$this->load->view('seller/sidebar');
		$this->load->view('seller/dt_jual',$data);
		$this->load->view('seller/footer');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login/');
	}
	public function ssp_seller()
	{
		$sql_details = $this->Themodel->get_sql_detail();

		$table = 'produk';
		$primaryKey = 'id_prd';
		$colums = array(
		array( 'db' => 'id_prd', 'dt' => 0 ),
		array( 'db' => 'nama_prd', 'dt' =>1, 'formatter' => function($d,$row){
			if ($d == "1") {
				return "<small class='label bg-green'>AVAIBLE</small>";
			} elseif ($d == "0") {
				return "<small class='label bg-red'>NONAVAIBLE</small>";
			}else{
				return "<small class='label'>LAIN-LAIN</small>";
			}
		}	
		),
		array('db' => 'keterangan', 'dt' => 2),
		array('db' => 'ktg', 'dt' => 3),
		array('db' => 'harga', 'dt' => 4),
		array('db' => 'stok', 'dt' => 5),
		array('db' => 'foto', 'dt' => 6),
		array('db' => 'id_prd', 'dt' => 7,
			'formatter' => function($d,$row){
				return '<a href="javascript:void(0);" class="detail_record btn btn-succes btn-xs btn-flat" title="DETAIL" data-id_prd="'.$d.'"><i class="fa fa-search"></i></a>
						<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs btn-flat"
					title="EDIT" data-id_prd="'.$d.'"><i class="fa fa-edit"></i></a>
						<a href="javascript:void(0);" class="delete_record btn btn-danger btn-xs btn-flat" title="HAPUS" data-id_prd="'.$d.'"><i class="fa fa-trash"></i></a>';
			}
		
	)
	);

		require 'assets/vendor/datables/ssp.class.php';
		echo json_encode(
			SSP::simple( $_GET, $sql_details,$table, $primaryKey, $colums)
		);
	}
}
	

 ?>