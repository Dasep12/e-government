<?php

 /**
  * 
  */
 class Isi_form extends CI_Controller
 {
 	
/* 	function __construct()
 	{
 		# code...
 	}*/

 	public function index()
 	{
 		$id = $this->session->userdata('id');
 		$table = 'data_pencaker';
 		$data['item']  = $this->m_pencaker->getData($id,$table);
 		$data['url']  = $this->uri->segment(1);
 		$this->template->load('template/template','isi_form',$data);
 	}

 	//fungsi menambah data diri pembuat kartu kuning

 	public function tambah()
 	{
 	
 		$this->form_validation->set_rules('nama','nama','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('nik','nik','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('no_telpon','no_telpon','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('tgl_lahir','tgl_lahir','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('email','email','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('alamat','alamat','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('kota','kota','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('kecamatan','kecamatan','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('desa','desa','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('kode_pos','kode_pos','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('pendidikan','pendidikan','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);
 		$this->form_validation->set_rules('jurusan','jurusan','required',[
 			'required'	=> 'Data Ngga Boleh Kosong !'
 		]);



 			if($this->form_validation->run () == FALSE){
 				$this->index();
 			}else{

 				$where = $this->input->post('nik');
 				$cek = $this->m_pencaker->cekNIK($where,'nik','data_pencaker');

 					if($cek > 0){
 						$this->session->set_flashdata('info',"Gagal");
 						redirect('isi_form');
 					}else{
 						$config['allowed_types']	= 'jpg|png|jpeg|pdf';
		 				$config['upload_path'] 		= './assets/lampiran/';
		 				$config['max-size']			= 2048 ;
		 				$this->load->library('upload',$config);
		 					$this->upload->do_upload('photo');
		 					$this->upload->do_upload('sertifikat');
		 					$this->upload->do_upload('ijazah');

		 					$photo  	 = $_FILES['photo']['name'];
		 					$ijazah  	 = $_FILES['ijazah']['name'];
		 					$sertifikat  = $_FILES['sertifikat']['name'];

				 		$data = array(
				 			'nama'			=> $this->input->post('nama'),
				 			'nik'			=> $this->input->post('nik'),
				 			'tempat_lahir'	=> $this->input->post('tempat_lahir'),
				 			'tgl_lahir'		=> $this->input->post('tgl_lahir'),
				 			'no_telpon'		=> $this->input->post('no_telpon'),
				 			'email'			=> $this->input->post('email'),
				 			'alamat'		=> $this->input->post('alamat'),
				 			'kota'			=> $this->input->post('kota'),
				 			'kecamatan'		=> $this->input->post('kecamatan'),
				 			'desa'			=> $this->input->post('desa'),
				 			'kode_pos'		=> $this->input->post('kode_pos'),
				 			'pendidikan'	=> $this->input->post('pendidikan'),
				 			'jurusan'		=> $this->input->post('jurusan'),
				 			'photo'			=> $photo,
				 			'ijazah'		=> $ijazah,
				 			'sertifikat'	=> $sertifikat,
				 			'join'			=> date('Y-m-d')
				 		);


				 		$keahlian = $this->input->post('keahlian');
				 		$result = array();
				 		foreach ($keahlian as $key => $val) {
				 			$result[] = array(
				 				"skill"	=> $_POST['keahlian'][$key],
				 				'nik'	=> $this->input->post('nik')
				 			);
				 		}

				 		$where = array('id'	=> $this->input->post('id'));
				 		$this->m_pencaker->updatePencaker($data,'data_pencaker',$where);
				 		$this->db->insert_batch('skill', $result);
				 		$this->session->set_flashdata('pesan',"Ok");
				 		redirect('isi_form');
 					}
 				
 			}
 	}


	

 }