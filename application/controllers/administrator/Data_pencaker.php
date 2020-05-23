<?php


/**
 * 
 */
class Data_Pencaker extends CI_Controller
{
	
/*	function __construct(argument)
	{
		# code...
	}*/

	public function index()
	{
		$data['item'] = $this->m_admin->getData()->result() ;
		$this->template->load('template/admin','admin/Data_Pencaker',$data);
	}
}