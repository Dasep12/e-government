<?php
 
 /**
  * 
  */
 class M_pencaker extends CI_Model
 {
 	//modal untuk registari akun 
 	public function InsertRegis($data,$table)
 	{
 		return $this->db->insert($table,$data);
 	}

 	//menampilkan data yang tersedia dari database
 	public function GetInfo($table)
 	{
 		return $this->db->get($table);
 	}

 	//menampilkan data berdasarkan id di form 
 	public function getData($id,$table)
 	{
 		return $this->db->get_where($table , array('id'	=> $id ))->row();
 	}

 	//modal untuk login 
 	public function ModalLogin($email,$pass)
 	{
 		return $this->db->where('email' , $email)->where('pass', $pass)->get('data_pencaker')->row();
 	}


 	//update data pencaker ketika isi form 
 	public function updatePencaker($data,$table,$where)
 	{
 		$this->db->where($where);
 		return $this->db->update($table,$data);
 	}

 	//mengecek data email terdaftar apa belum 
 	public function cekNIK($where,$colom,$table)
 	{
 		return $this->db->get_where($table, array($colom => $where))->num_rows();
 	}

 	//input keahlian data pencaker
 	public function modalSkill($result)
 	{
 		return $this->db->insert_batch($result , 'skill');
 	}

 	//hapus data keahlian pencari kerja
 	public function hapusSkill($table,$where)
 	{
 		$this->db->where($where);
 		return $this->db->delete($table);
 	}

 	//cek data token dan email untuk aktivasi akun
 	public function cekEmailToken($url,$colom)
 	{
 		return $this->db->where($colom, $url)->get('token')->num_rows();
 	}

 	//cari data akun yang lupa password
 	public function cariAkun($where)
 	{
 		return $this->db->get_where('data_pencaker' , array('email' => $where))->row();
 	}
 }