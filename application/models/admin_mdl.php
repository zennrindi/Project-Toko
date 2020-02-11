<?php 
/**
 * 
 */
class Barang extends CI_Model
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
 	function ck($data_login)
 	{
 		$this->db->where($data_login);
 		return $this->db->get('admin');
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
