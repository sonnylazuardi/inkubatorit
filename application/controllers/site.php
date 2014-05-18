<?php 
	class Site extends CI_Controller
	{
		function index ()
		{
			$this->load->model('portofolio_model');
			$this->load->model('article_model');
			$data['port'] = $this->portofolio_model->get_port(3,0);
			$data['artikel'] = $this->article_model->get_post(1,0);
			$data['incl'] = 'home';
			$this->load->view('page',$data);
		}
	}
 ?>