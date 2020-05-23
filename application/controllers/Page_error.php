<?php


 /**
  * 
  */
 class Page_error extends CI_Controller
 {
 	public function index()
 	{
 		$data['url']	 = $this->uri->segment(1);
 		$this->template->load('template/template','Page_error',$data);
 	}
 }