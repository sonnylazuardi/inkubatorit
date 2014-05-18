<?php 
	class Portfolio extends CI_Controller
	{
		function index()
		{
			$this->load->model('portofolio_model');
			$data['incl'] = 'portfolio';
			$data['port'] = $this->portofolio_model->get_port(2,0);
			$data['kategori'] = 'all';
			$data['tahun'] = 'any';
			$data['new_exist'] = false;
			$data['old_exist'] = ($this->portofolio_model->get_port(2,2)->num_rows() > 0);
			$data['page'] = 1;
			$this->load->view('page',$data);
		}

		function page($p)
		{
			$this->load->model('portofolio_model');
			$data['incl'] = 'portfolio';
			$data['kategori'] = 'all';
			$data['tahun'] = 'any';
			if ($p > 1){
				$data['port'] = $this->portofolio_model->get_port(2,($p-1)*2);
				$data['new_exist'] = ($this->portofolio_model->get_port(2,($p-2)*2)->num_rows() > 0);
				$data['old_exist'] = ($this->portofolio_model->get_port(2,$p*2)->num_rows() > 0);
				$data['page'] = $p;
				$this->load->view('page',$data);
			}else{
				redirect('portfolio');
			}
		}
		function category($kat,$tahun,$p=1)
		{
			$this->load->model('portofolio_model');
			$data['incl'] = 'portfolio';
			$data['kategori'] = $kat;
			$data['tahun'] = $tahun;
			if (($kat == 'all')&&($tahun == 'any')){
				redirect('portfolio');
			}else{
				if ($p > 1){
					$data['new_exist'] = ($this->portofolio_model->get_port_kat($kat,$tahun,2,($p-2)*2)->num_rows() > 0);
				}else{
					$data['new_exist'] = false;
				}
				$data['old_exist'] = ($this->portofolio_model->get_port_kat($kat,$tahun,2,$p*2)->num_rows() > 0);
				$data['port'] = $this->portofolio_model->get_port_kat($kat,$tahun,2,($p-1)*2);
				$data['page'] = $p;
				$this->load->view('page',$data);
			}
		}
	}
 ?>