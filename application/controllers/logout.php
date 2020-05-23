<?php

 /**
  * 
  */
 class Logout extends CI_Controller
 {
 	
/* 	function __construct(argument)
 	{
 		# code...
 	}*/

 	public function index()
 	{
 		$this->session->sess_destroy();
 		redirect('Login');
 	}
 }