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
	public function tampil_jual()
	{
		return $this->db->get('order');
	}
	function reg()
 	{
 		return $this->db->get('user');
 	}
 	function register($data)
 	{
 		$this->db->insert('user',$data);
 	}
 	function ck($data_login)
 	{
 		$this->db->where($data_login);
 		return $this->db->get('user');
 	}
 	function detail($id_prd)
 	{
 		return $this->db->get('produk');
 	}
 	function detaill($kd_trx)
 	{
 		return $this->db->get('order');
 	}
 	function ubahh($kd_trx)
	{
		$this->db->where('kd_trx', $kd_trx);
		return $this->db->get('order');
	}
	function edit($data, $where)
	{
		$this->db->update('order', $data, $where);
	}
 	function hapus($tabel,$where)
	{
		$this->db->delete($tabel,$where);
	}
	function batal($tabel,$where)
	{
		$this->db->delete($tabel,$where);
	}
 	function ubah($id_prd)
	{
		$this->db->where('id_prd', $id_prd);
		return $this->db->get('produk');
	}
	function update($data, $where)
	{
		$this->db->update('produk', $data, $where);
	}
 		function simpan_tambah($data, $tabel)
	{
		$this->db->insert($tabel, $data);
 	}
 	public function cek_username($username)
 	{
 		return $this->db->get_where('user',$username);
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