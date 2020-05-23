<?php

 /**
  * 
  */
 class Cari extends CI_Controller
 {
 	
/* 	function __construct(argument)
 	{
 		# code...
 	}*/

 	public function index()
 	{
 		$this->template->load('template/admin','admin/Cari');
 	}


 	public function search()
 	{
 		$this->form_validation->set_rules('nik','nik','required',[
 			'required'		=> 'data tidak lengkap'
 		]);	

 			if ($this->form_validation->run() == FALSE) {
 				$data['hitung'] = NULL;
 				$this->template->load('template/admin','admin/Cari',$data);
 			}else{
 				$where = $this->input->post('nik');
 				 $data['hitung'] = $this->m_admin->hitungNik($where,'data_pencaker'); 				
 				if ($data['hitung'] == 0) {
 					$this->session->set_flashdata('alert','Gagal');
 					redirect('administrator/Cari');
 				}else{
 					$data['nik'] = $this->m_admin->ambilNik($where,'data_pencaker');
 					$data['skill'] = $this->m_admin->ambilSkill($where,'skill')->result();
			 		$this->template->load('template/admin','admin/Cari',$data);
 				}
 					
 			}
 	}
 }