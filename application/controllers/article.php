<?php 
	class Article extends CI_Controller
	{
		function index ()
		{
			$this->load->model('article_model');
			$data['incl'] = 'article';
			$data['artikel'] = $this->article_model->get_post(2,0);
			$data['kategori'] = 'all';
			$data['new_exist'] = false;
			$data['old_exist'] = ($this->article_model->get_post(2,2)->num_rows() > 0);
			$data['page'] = 1;
			$this->load->view('page',$data);
		}

		function page($p)
		{
			$this->load->model('article_model');
			$data['incl'] = 'article';
			$data['kategori'] = 'all';
			if ($p > 1){
				$data['artikel'] = $this->article_model->get_post(2,($p-1)*2);
				$data['new_exist'] = ($this->article_model->get_post(2,($p-2)*2)->num_rows() > 0);
				$data['old_exist'] = ($this->article_model->get_post(2,$p*2)->num_rows() > 0);
				$data['page'] = $p;
			}else{
				redirect('article');
			}
			$this->load->view('page',$data);
		}

		function category($kat,$p = 1)
		{
			$this->load->model('article_model');
			$data['incl'] = 'article';
			$data['kategori'] = $kat;
			if ($p > 1){
				$data['new_exist'] = ($this->article_model->get_post_kat($kat,2,($p-2)*2)->num_rows() > 0);
			}else{
				$data['new_exist'] = false;
			}
			$data['old_exist'] = ($this->article_model->get_post_kat($kat,2,$p*2)->num_rows() > 0);
			$data['artikel'] = $this->article_model->get_post_kat($kat,2,($p-1)*2);
			$data['page'] = $p;
			$this->load->view('page',$data);
		}

		function post($id)
		{
			$this->load->model('article_model');
			$data['incl'] = 'post';
			$data['artikel'] = $this->article_model->get_post_id($id);
			$this->load->view('page',$data);
		}
	}
 ?>