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
}
?>