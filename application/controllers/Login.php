<?php

 /**
  * 
  */
 class Login extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 			if(!empty($this->session->userdata('nik'))){
 				$this->session->set_flashdata('pesan5','Gagal');
 				redirect('beranda');
 			}
 	}

 	public function index()
 	{
 		$data['url'] = $this->uri->segment(1);
 		$data['item'] = '';
 		$this->template->load('template/template','login',$data);
 	}

 	public function notice()
 	{
 		$data['url']	 = $this->uri->segment(1);
 		$id = $this->session->userdata('id');
 		$data['item']	 = $this->m_pencaker->getData($id,'data_pencaker');
 		$this->template->load('template/template','notice',$data);
 	}

 	public function ceklogin()
 	{
 		$this->form_validation->set_rules('email','email','required',[
 			'required'	=> 'Email Harus di isi '
 		]);
 		$this->form_validation->set_rules('pass','pass','required',[
 			'required'	=> 'Password Harus di isi '
 		]);
 			if($this->form_validation->run() == FALSE){
 				$this->index();
 			}else{
 				$email = $this->input->post('email');
 				$pass  = md5($this->input->post('pass'));
 				$auth = $this->m_pencaker->ModalLogin($email,$pass);
 					

					if($auth == FALSE){
 						$this->session->set_flashdata('pesan','Gagal');
 						redirect('login');
 					}elseif($auth->id_active == 0){
						$this->session->set_flashdata('pesan4','Gagal');
						redirect('Login/index');
 					}elseif($auth->nik == ''){
		 				$this->session->set_userdata('id' ,$auth->id) ;
 						$this->session->set_userdata('nama' ,$auth->nama) ;
 						$this->session->set_userdata('nik' ,$auth->nik) ;
 						redirect('login/notice');
					}elseif($auth->nik == $auth->nik){
		 				$this->session->set_userdata('id' ,$auth->id) ;
		 				$this->session->set_userdata('tgl_lahir' ,$auth->tgl_lahir) ;
 						$this->session->set_userdata('nama' ,$auth->nama) ;
 						$this->session->set_userdata('nik' ,$auth->nik) ;
						redirect('beranda');

					}	


 			}

 	}
 }