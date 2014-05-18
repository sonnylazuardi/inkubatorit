<?php
	class Ajax extends CI_COntroller
	{
		function index()
		{
			redirect('');
		}

		function login()
		{
			$this->load->model('admin_models');
			$query = $this->admin_models->validate();
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}

		function new_post()
		{
			$this->load->model('article_model');
			$query = $this->article_model->new_post();
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}

		function del_post($id)
		{
			$this->load->model('article_model');
			$query = $this->article_model->del_post($id);
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}

		function edit_post($id)
		{
			$this->load->model('article_model');
			$query = $this->article_model->edit_post($id);
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}

		function new_portofolio()
		{
			$this->load->model('portofolio_model');
			$query = $this->portofolio_model->new_portofolio();
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}
		function get_port($id)
		{
			$this->load->model('portofolio_model');
			$data['port'] = $query = $this->portofolio_model->get_port_id($id);
			$this->load->view('port_single',$data);	
		}

		function del_port($id)
		{
			$this->load->model('portofolio_model');
			$query = $this->portofolio_model->del_port($id);
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}

		function edit_port($id)
		{
			$this->load->model('portofolio_model');
			$query = $this->portofolio_model->edit_port($id);
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}

		function change_pass()
		{
			$this->load->model('admin_models');
			$query = $this->admin_models->change_pass();
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}

		function cek_pass()
		{
			$this->load->model('admin_models');
			$query = $this->admin_models->validate();
			if ($query){
				echo "true";
			}else{
				echo "false";
			}
		}
	}
?>