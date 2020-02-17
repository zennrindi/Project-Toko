<?php 
/**
 * 
 */
class admin_mdl extends CI_Model
{
	public function tampil()
	{
		return $this->db->get('admin');
	}
	function c_login($data)
 	{
 		$this->db->where($data);
 		return $this->db->get('admin');
 	}
 	function ck()
 	{
 		return $this->db->get('seller');
 	}
 	function oyi()
 	{
 		return $this->db->get('cust');
 	}
 	public function cek_username($username)
 	{
 		return $this->db->get_where('admin',$username);
 	}
 	function get_sql_details()
 	{
 		return array(
 			'user' => 'root',
 			'pass' => '',
 			'db' => 'toko_online',
 			'host' => 'localhost'
 		);
 	}

}
?>
