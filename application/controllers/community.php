<?php 
	class Community extends CI_Controller
	{
		function index ()
		{
			redirect('');
		}

		function web()
		{
			$data['incl'] = 'web';
			$this->load->view('page',$data);
		}

		function mobile()
		{
			$data['incl'] = 'mobile';
			$this->load->view('page',$data);
		}

		function game()
		{
			$data['incl'] = 'game';
			$this->load->view('page',$data);
		}

		function cyber()
		{
			$data['incl'] = 'cyber';
			$this->load->view('page',$data);
		}
	}
 ?>