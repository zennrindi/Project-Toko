<?php 
/**
 * 
 */
class admin extends CI_Controller
{
	
	function index()
	{
		$this->load->view('admin_templates/login_admin');
	}
	public function ssp_admin()
	{
		$sql_details = $this->Themodel->get_sql_detail();

		$table = 'admin';
		$primaryKey = 'id_admin';
		$colums = array(
		array( 'db' => 'id_admin', 'dt' => 0 ),
		array( 'db' => 'username', 'dt' =>1, 'formatter' => function($d,$row){
			if ($d == "1") {
				return "<small class='label bg-green'>AVAIBLE</small>";
			} elseif ($d == "0") {
				return "<small class='label bg-red'>NONAVAIBLE</small>";
			}else{
				return "<small class='label'>LAIN-LAIN</small>";
			}
		}	
		),
		array('db' => 'pass', 'dt' => 2),
		array('db' => 'nama', 'dt' => 3),
		array('db' => 'alamat', 'dt' => 4),
		array('db' => 'email', 'dt' => 5),
		array('db' => 'no_hp', 'dt' => 6),
		array('db' => 'kelamin', 'dt' => 7),
		array('db' => 'foto', 'dt' => 8),
		array('db' => 'id_admin', 'dt' => 10,
			'formatter' => function($d,$row){
				return '<a href="javascript:void(0);" class="detail_record btn btn-succes btn-xs btn-flat" title="DETAIL" data-id_admin="'.$d.'"><i class="fa fa-search"></i></a>'
						'<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs btn-flat"
					title="EDIT" data-id_admin="'.$d.'"><i class="fa fa-edit"></i></a>'
						'<a href="javascript:void(0);" class="delete_record btn btn-danger btn-xs btn-flat" title="HAPUS" data-id_admin="'.$d.'"><i class="fa fa-trash"></i></a>';
			}
		}
	)
	);

		require 'assets/vendor/datables/ssp.class.php';
		echo json_encode(
			SSP::simple( $_GET, $sql_details,$table, $primaryKey, $colums)
		);

?>