<?php

 /**
  * 
  */
 class Form_regis extends CI_Controller
 {
 	
/* 	function __construct(argument)
 	{
 		# code...
 	}*/

 	public function index()
 	{
 		$data['url']	 = $this->uri->segment(1);
 		$id = $this->session->userdata('id');
 		$data['item']	 = $this->m_pencaker->getData($id,'data_pencaker');
 		$this->template->load('template/template','form_regis',$data);
 		
 	}

 	public function regis()
 	{
 		$this->form_validation->set_rules('nama' ,'nama', 'required',[
 			'required'	=> 'data harus di isi '
 		]);
 		$this->form_validation->set_rules('email' ,'email', 'required',[
 			'required'	=> 'data email harus di isi '
 		]);
 		$this->form_validation->set_rules('pass' ,'pass', 'required|matches[pass1]|min_length[6]',[
 			'required'	=> 'password harus di isi ',
 			'matches'	=> 'password tidak sama ',
 			'min_length'=> 'password harus 6 digit'
 		]);
 		$this->form_validation->set_rules('pass1','pass1','required|min_length[6]',[
 			'required'	=> 're-password harus di isi',
 			'min_length'=> 'password harus 6 digit'
 		]);

 			if($this->form_validation->run() == FALSE){
 				$this->index();
 			}else{

 				$where  = $this->input->post('email');
				$cekemail = $this->m_pencaker->cekNIK($where,'email','data_pencaker') ;
 				echo $cekemail;
 				if($cekemail > 0){
 					$this->session->set_flashdata('Pesan5','Gagal');
 					redirect('Form_regis');
 				}else{

 					$email = $this->input->post('email');
 					$token = md5($this->input->post('email'));
 					$data = array(
 						'nama'		=> $this->input->post('nama'),
 						'email'		=> $this->input->post('email'),
 						'pass'		=> md5($this->input->post('pass')),
 						'id_active' => 0
 					);

 					$data1 = array(
 						'email' => $email,
 						'token'	=> $token
 					);
 					$this->sendEmail($email,$token);
 					$this->m_pencaker->InsertRegis($data,'data_pencaker');
 					$this->m_pencaker->InsertRegis($data1,'token');
 					$this->session->set_flashdata('pesan2','Ok'); 					
 					redirect('login');
 				}

 			} 
 	}


 	//fungsi kirim link untuk aktivasi email
 	private function sendEmail($email,$token)
 	{

 		$config = Array(  
            'protocol'   => 'smtp',  
            'smtp_host'  => 'ssl://smtp.googlemail.com',  
            'smtp_port'  => 465,  
            'smtp_user'  => 'dasepdepiyawan19101051@gmail.com',   
            'smtp_pass'  => 'swadharma',   
            'mailtype'   => 'html',   
            'charset'    => 'iso-8859-1'  
           );  
           $this->load->library('email', $config);  
           $this->email->set_newline("\r\n");  

           $this->email->from('dasepdepiyawan19101051@gmail.com', 'Admin Note Code');   
           $this->email->to('depiyawandasep13@gmail.com');   
           $this->email->subject('Token aktivasi akun');   
           $this->email->message('Klik Link Berikut Untuk Aktivasi Akun Anda <br> <a href="'.base_url().'Form_regis/parseUrl?email='. $email .'&token='.$token.'"><button style="background-color:blue;color:#fff">Klik Here</button></a>');  
           
           return $this->email->send() ;
 	}

 	public function parseUrl()
 	{

	 	 $email = $_GET['email'];
	 	 $token = $_GET['token'];

	 	 	$cekemail = $this->m_pencaker->cekEmailToken($email,'email');
	 	 	$ceketoken = $this->m_pencaker->cekEmailToken($token,'token');
	 	 		if($cekemail > 0){
	 	 			if ($ceketoken > 0) {
	 	 				$where = array('email' => $email);
	 	 				$data = array('id_active' => 1 );
	 	 				$this->m_pencaker->updatePencaker($data,'data_pencaker',$where);
	 	 				$this->m_pencaker->hapusSkill('token',$where);
	 	 				$this->session->set_flashdata('pesan3','OK');
	 	 				redirect('login');
	 	 			}else{
	 	 				echo 'Token salah';
	 	 			}
	 	 		}else{
	 	 			echo "email tidak sesuai ";
	 	 		}

 	
 	}
 }