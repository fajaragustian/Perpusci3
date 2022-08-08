<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Buku extends CI_Model
{
//  Membuat function untuk mengambil data buku
 public function getBuku()
 {
 return $this->db->get('buku');
 }
 //  Membuat function untuk mengambil data buku berdasarkan kreteria
 public function bukuWhere($where)
 {
 return $this->db->get_where('buku', $where);
 }
  //  Membuat function untuk insert data buku 
 public function simpanBuku($data = null)
 {
 $this->db->insert('buku',$data);
 }
//  Membuat function untuk update data buku 
 public function updateBuku($data = null, $where = null)
 {
 $this->db->update('buku', $data, $where);
 }
//  Membuat function untuk delete data buku 
 public function hapusBuku($where = null)
 {
 $this->db->delete('buku', $where);
 }
//  Membuat function untuk menghitung total data buku 
//  public function total($field, $where)
//  {
//  $this->db->select_sum($field);
//  if(!empty($where) && count($where) > 0){
//  $this->db->where($where);
//  }
//  $this->db->from('buku');
//  return $this->db->get()->row($field);
//  }
}
