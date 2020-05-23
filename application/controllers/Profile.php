<?php


 /**
  * 
  */
 class Profile extends CI_Controller
 {
 	
	public function __construct()
 	{
 		parent::__construct();
 			if(empty($this->session->userdata('nama'))){
 				$this->session->set_flashdata('pesan5','Gagal');
 				redirect('login');
 			}
 	}

 	public function index()
 	{
 		$data['url']	 = $this->uri->segment(1);
 		$id = $this->session->userdata('id');
 		$data['item']	 = $this->m_pencaker->getData($id,'data_pencaker');
 		$data['jurusan'] = $this->m_pencaker->getInfo('jurusan')->result();
 		$data['data'] = $this->db->get_where('skill', array('nik' => $this->session->userdata('nik')))->result();
 		$this->template->load('template/template','profile',$data);
 	}


//update data diri pencari kerja
 	public function update()
 	{

		$this->form_validation->set_rules('nama','nama','required',[
			'required'	=> 'data tidak boleh kosong'
		]);
		$this->form_validation->set_rules('email','email','required',[
			'required'	=> 'data tidak boleh kosong'
		]);
		$this->form_validation->set_rules('no_telpon','no_telpon','required',[
			'required'	=> 'data tidak boleh kosong'
		]); 		

			if($this->form_validation->run() == FALSE){
				$this->index();
			}else{
			 		$nik = $this->input->post('nik');
			 		$data = array(
			 			'pendidikan'	=> $this->input->post('pendidikan'),
			 			'pengalaman'	=> $this->input->post('pengalaman'),
			 			'email'			=> $this->input->post('email'),
			 			'no_telpon'		=> $this->input->post('no_telpon'),
			 			'nik'			=> $this->input->post('nik'),
			 			'nama'			=> $this->input->post('nama'),
			 		);
			 	
			 		$result = array();
			 		$keahlian = $this->input->post('keahlian');
			 		foreach($keahlian as $key => $val){
			 			$result[] = array(
			 				'skill'	=> $_POST['keahlian'][$key],
			 				'nik'	=> $nik
			 			);
			 		}

//var_dump($data);

			 	$where = array('nik' => $nik )  ;
			 	//hapus dan update keahlian 
			 	$this->m_pencaker->hapusSkill('skill',$where);
			 	$this->db->insert_batch('skill',$result);
			 	//update data pencaker
			 	$this->m_pencaker->updatePencaker($data,'data_pencaker',$where);
			 	$this->session->set_flashdata('alert','Ok');
			 	redirect('profile');
			}
	}

//ganti poto profile
	public function editpp()
	{
			$config['allowed_types']  = 'jpg|png|jpeg';
			$config['upload_path']	  = './assets/lampiran/';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('photo')){
					$this->index();
				}else{
					$photo = $this->upload->data('file_name');
					$data = array('photo' => $photo);
					$where = array('nik'	=> $this->input->post('nik'));
						$this->m_pencaker->updatePencaker($data,'data_pencaker',$where);
						$this->session->set_flashdata('alert','Ok');
						redirect('profile');
//			var_dump($data);
				}
	}

 }