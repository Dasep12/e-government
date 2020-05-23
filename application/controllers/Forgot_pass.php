<?php

 /**
  * 
  */
 class Forgot_pass extends CI_Controller
 {
 	
 /*	function __construct(argument)
 	{
 		# code...
 	}*/

 	public function index()
 	{
	 		$data['url'] = $this->uri->segment(1);
	 		$data['item'] = '';
	 		$this->template->load('template/template','LupaPassword',$data);


 	}

 	//jika akun ada maka akan memunculkan fungsi ini
 	public function akun()
 	{

 			$where = $this->input->post('email');
 			$data['url'] = $this->uri->segment(1);
	 		$data['item'] = '';
 			$data['akun'] = $this->m_pencaker->cariAkun($where);

 			//cari apakah email terdaftar atau tidak
 			$data['countdata'] = $this->m_pencaker->cekNIK($where,'email','data_pencaker');
			$this->template->load('template/template','LupaPassword',$data);
 				
 	}

 	public function kirimKode()
 	{
 		$nama   = substr($this->input->post('nama'), 2,2);
 		$email  = substr($this->input->post('email'), 1,2);
 		$nik    = substr($this->input->post('nik'), 4,2);
 		$token  = $nama  . $nik . $email ;
 		
 		$data = array('email' => $this->input->post('email') , 'token' => $token);
 		$simpan = $this->db->insert('token',$data );
 			if ($simpan) {
 				$simpan ;
		 		$this->emailKode($token);
 			}
 			redirect('Forgot_pass/inputKode');
 	}

 	public function inputKode()
 	{
 		$data['url'] = $this->uri->segment(1);
 		$data['item'] = '';
 		$this->template->load('template/template','inputKode',$data);
 	}

 	private function emailKode($token)
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
 		$isi = 'Berikut kode ganti password akun anda, kode tersebut hanya bisa digunakan satu kali<br><center><h3>'. $token .'</h3></center>' ;
           $this->load->library('email', $config);  
           $this->email->set_newline("\r\n");  

           $this->email->from('dasepdepiyawan19101051@gmail.com', 'Admin Note Code');   
           $this->email->to('depiyawandasep13@gmail.com');   
           $this->email->subject('Token Ganti Password');   
           $this->email->message($isi);  
           
           $kirim =  $this->email->send() ;
           if($kirim){
				return $kirim ;
           }else{
				echo "Gagal Koneksi";
           }
 	}

 	public function cekKode()
 	{
 			$kode = $this->input->post('kode');
 			$where = array('token' => $kode);
 			$cekkode = $this->m_pencaker->cekEmailToken($kode,'token');
 				if($cekkode > 0){
 						$this->m_pencaker->hapusSkill('token',$where);
 						redirect('Forgot_pass/gantiPass');
 				}else{
 					$this->session->set_flashdata('pesan6','<div class="text-danger small">kode salah</div>');
 					redirect('Forgot_pass/inputKode');
 				}

 	}

 	public function gantiPass()
 	{
 		$data['url'] = $this->uri->segment(1);
 		$data['item'] = '';

 		$this->form_validation->set_rules('email','email','required',[
 			'required'	=> 'data harus di isi'
 		]);
 		$this->form_validation->set_rules('pass','pass','required|matches[pass2]|min_length[6]',[
 			'required'		=> 'data harus di isi',
 			'matches'		=> 'password tidak sama',
 			'min_length'	=> 'password harus 6 digit atau lebih'
 		]);
 		$this->form_validation->set_rules('pass2','pass2','required|min_length[6]',[
 			'required'	=> 'data harus di isi',
 			'min_length'	=> 'password harus 6 digit atau lebih'
 		]);
 			if($this->form_validation->run() == FALSE){
		 		$this->template->load('template/template','gantiPass',$data);
 			}else{
 				$where1 = $this->input->post('email');
 				$akun = $this->m_pencaker->cariAkun($where1);

 				if($akun->email == $where1){
 					$data  = array(
 						'pass' => md5($this->input->post('pass'))
 					);
	 				$where = array('email' => $this->input->post('email') );
	 				$this->m_pencaker->updatePencaker($data,'data_pencaker',$where);
	 				$this->session->set_flashdata('pesan8','Ok');
	 				redirect('login');
 				}else{
 					$this->session->set_flashdata('alert3','<div class="text-danger small">Email Tidak ada</div>');
 					redirect('Forgot_pass/gantiPass');
 				}
 			}
 	}


 }
