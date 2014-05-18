<?php
	class Admin_models extends CI_Model
	{
		function validate()
		{
			$this->db->where('username',$this->input->post('username'));
			$this->db->where('password',md5($this->input->post('password')));
			$query = $this->db->get('admin');
			if ($query->num_rows == 1)
			{
				$data = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
				);
				$this->session->set_userdata($data);
				session_start();
				$_SESSION[md5('filemanager')] = true; 
				return true;
			}
		}

		function change_pass()
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			$this->db->where('username',$this->session->userdata('username'));
			$query = $this->db->update('admin', $data); 
			return $query;
		}

		function is_logged_in()
		{
			$this->db->where('username',$this->session->userdata('username'));
			$this->db->where('password',$this->session->userdata('password'));
			$query = $this->db->get('admin');
			if ($query->num_rows == 1){
				return true;
			}
		}
	}
?>