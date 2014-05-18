<?php
	class Admin extends CI_COntroller
	{
		function index()
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				redirect('admin/main');
			}
			else
			{
				$this->load->view('login_form');
			}
		}

		function main()
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$data['content'] = 'admin_main';
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}
		}

		function article($p=1)
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$this->load->model('article_model');
				$data['content'] = 'article_list';
				if ($p > 1){
					$data['new_exist'] = ($this->article_model->get_post(10,($p-2)*10)->num_rows() > 0);
				}else{
					$data['new_exist'] = false;
				}
				$data['old_exist'] = ($this->article_model->get_post(10,$p*10)->num_rows() > 0);
				$data['page'] = $p;
				$data['artikel'] = $this->article_model->get_post(10,($p-1)*10);
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}
		}

		function new_post()
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$data['content'] = 'new_post';
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}
		}

		function edit_article($id)
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$this->load->model('article_model');
				$data['artikel'] = $this->article_model->get_post_id($id);
				$data['content'] = 'edit_post';
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}	
		}

		function portfolio($p = 1)
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$this->load->model('portofolio_model');
				$data['content'] = 'portfolio_list';
				if ($p > 1){
					$data['new_exist'] = ($this->portofolio_model->get_port(10,($p-2)*10)->num_rows() > 0);
				}else{
					$data['new_exist'] = false;
				}
				$data['old_exist'] = ($this->portofolio_model->get_port(10,$p*10)->num_rows() > 0);
				$data['page'] = $p;
				$data['port'] = $this->portofolio_model->get_port(10,($p-1)*10);
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}
		}

		function new_portfolio()
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$data['content'] = 'new_portofolio';
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}
		}
		function edit_portfolio($id)
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$this->load->model('portofolio_model');
				$data['port'] = $this->portofolio_model->get_port_id($id);
				$data['content'] = 'edit_port';
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}	
		}

		function change()
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$data['content'] = 'change_pass';
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}
		}

		function file()
		{
			$this->load->model('admin_models');
			if ($this->admin_models->is_logged_in())
			{
				$data['content'] = 'file_manager';
				$this->load->view('admin_page',$data);
			}
			else
			{
				$this->load->view('login_form');
			}
		}

		function logout()
		{
			session_start();
			unset($_SESSION[md5('filemanager')]);
			$this->session->sess_destroy();
			session_destroy();
			redirect('admin');
		}
	}
?>