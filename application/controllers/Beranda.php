<?php

 /**
  * 
  */
 class Beranda extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 			if(empty($this->session->userdata('nama'))){
 				$this->session->set_flashdata('pesan5','Gagal');
 				redirect('login');
 			}/*elseif(empty($this->session->userdata('tgl_lahir'))){
 				
 			}*/
 	}

 	public function index()
 	{
 		$data['url']	 = $this->uri->segment(1);
 		$id = $this->session->userdata('id');
 		$data['item']	 = $this->m_pencaker->getData($id,'data_pencaker');
 		$this->template->load('template/template','beranda',$data);
 	}
 }