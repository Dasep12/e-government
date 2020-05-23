<?php


 /**
  * 
  */
 class Tambah_jurusan extends CI_Controller
 {
 	
/* 	function __construct(argument)
 	{
 		# code...
 	}*/

 	public function index()
 	{
 		$this->template->load('template/admin','admin/Tambah_jurusan');
 	}

 	public function addJurusan()
 	{
 		$this->form_validation->set_rules('jurusan','jurusan','required',[
 			'required'		=> 'jurusan harus di isi'
 		]);

 			if($this->form_validation->run() == FALSE){
 				$this->index();
 			}else{
 				$data = array(
 					'nama_jurusan' => $this->input->post('jurusan')
 				);
 				$this->m_admin->insertRow($data,'jurusan');
 				redirect('administrator/Tambah_jurusan');
 			}
 	}
 }