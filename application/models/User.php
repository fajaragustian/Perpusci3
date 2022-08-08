<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Model
{
	// membuat function untuk simpan data 
	public function simpanData($data = null)
	{
	$this->db->insert('user', $data);
	}
	// membuat function untuk cek data  
	public function cekData($where = null)
	{
	return $this->db->get_where('user', $where);
	}
	// mengambil function untuk  ambil data  
	public function getUserWhere($where = null)
	{
	return $this->db->get_where('user', $where);
	}
	// membuat function untuk  cek user data berdasarkan aaccess menu  
	// public function cekUserAccess($where = null)
	// {
	// $this->db->select('*');
	// $this->db->from('access_menu');
	// $this->db->where($where);
	// return $this->db->get();
	// }
	// membuat function untuk membatasi user data berdasarkan tampilan dengan limit 10
	// public function getUserLimit()
	// {
	// $this->db->select('*');
	// $this->db->from('user');
	// $this->db->limit(10, 0);
	// return $this->db->get();
	// }

}
