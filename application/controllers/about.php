<?php 
	class About extends CI_Controller
	{
		function index ()
		{
			$data['incl'] = 'about';
			$this->load->view('page',$data);
		}
	}
 ?>