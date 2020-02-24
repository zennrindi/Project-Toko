<?php 
/**
 * 
 */
class Mdl_aksi extends CI_Model
{
	function tampil()
	{
		$this->db->get('ktg');
	}
	public function kate()
	{
		//$this->db->where($ktg);
 		return $this->db->get('ktg');
	}
	public function wnt()
	{
		//$this->db->where($ktg);
 		return $this->db->get('ktg');
	}
	public function lk()
	{
		//$this->db->where($ktg);
 		return $this->db->get('ktg');
	}
	public function ank()
	{
		//$this->db->where($ktg);
 		return $this->db->get('ktg');
	}
	public function penjas()
	{
		//$this->db->where($ktg);
 		return $this->db->get('ktg');
	}
}
?>