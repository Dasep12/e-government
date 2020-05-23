<?php


 /**
  * 
  */
 class M_admin extends CI_Model
 {
 
 	//menampilkan data pembuat kartu kuning atau para pencari kerja
 	public function getData()
 	{
 		return $this->db->get('data_pencaker');
 	}

 	//fungsi untuk menyimpan data

 	public function insertRow($data,$table)
 	{
 		return $this->db->insert($table,$data);
 	}


 	//tampilkan data berdasarkan nik 
 	public function ambilNik($where,$table)
 	{
 		return $this->db->get_where($table,array('nik'	=> $where))->row();
 	}

 	//hitung jumlah nik yang di input
 	public function hitungNik($where,$table)
 	{
 		$query = $this->db->get_where($table,array('nik'	=> $where));
 		return $query->num_rows();

 	}


 	//ambil skill data pencaker untuk ditampilkan
 	public function ambilSkill($where,$table)
 	{
 		return $this->db->get_where($table, array('nik'	=> $where));
 	}
 }