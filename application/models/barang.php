<?php 
/**
 * 
 */
class Barang extends CI_Model
{
	public function tampil()
	{
		return $this->db->get('produk');
	}
	function reg()
 	{
 		return $this->db->get('user');
 	}
 	function register($data)
 	{
 		$this->db->insert('user',$data);
 	}
  	function c_login($data)
 	{
 		$this->db->where($data);
 		return $this->db->get('user');
 	}
 	function ck($data_login)
 	{
 		$this->db->where($data_login);
 		return $this->db->get('user');
 	}

}
?>