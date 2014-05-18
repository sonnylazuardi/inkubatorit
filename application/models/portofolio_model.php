<?php 
	class Portofolio_model extends CI_Model
	{
		function new_portofolio()
		{
			$image = $this->input->post('image');
			if ($image == ""){
				$html = $this->input->post('deskripsi');
				$doc = new DOMDocument();
				libxml_use_internal_errors(true);
				$doc->loadHTML($html); // loads your html
				$xpath = new DOMXPath($doc);
				$nodelist = $xpath->query("//img"); // find your image
				$node = $nodelist->item(0); // gets the 1st image
				if ($node != ""){
					$image = $node->attributes->getNamedItem('src')->nodeValue;
				}
			}
			$data = array(
				'title' => $this->input->post('title'),
				'image' => $image,
				'developer' => $this->input->post('developer'),
				'tahun' => $this->input->post('tahun'),
				'kategori' => $this->input->post('kategori'),
				'deskripsi' => $this->input->post('deskripsi')
			);
			$query = $this->db->insert('portofolio',$data);
			return $query;
		}

		function edit_port($id)
		{
			$image = $this->input->post('image');
			if ($image == ""){
				$html = $this->input->post('deskripsi');
				$doc = new DOMDocument();
				libxml_use_internal_errors(true);
				$doc->loadHTML($html); // loads your html
				$xpath = new DOMXPath($doc);
				$nodelist = $xpath->query("//img"); // find your image
				$node = $nodelist->item(0); // gets the 1st image
				if ($node != ""){
					$image = $node->attributes->getNamedItem('src')->nodeValue;
				}
			}
			$data = array(
				'title' => $this->input->post('title'),
				'image' => $image,
				'developer' => $this->input->post('developer'),
				'tahun' => $this->input->post('tahun'),
				'kategori' => $this->input->post('kategori'),
				'deskripsi' => $this->input->post('deskripsi')
			);
			$this->db->where('id', $id);
			$query = $this->db->update('portofolio', $data); 
			return $query;
		}

		function del_port($id)
		{
			$query = $this->db->delete('portofolio', array('id' => $id)); 
			return $query;
		}

		function get_port_id($id)
		{
			$this->db->where("id",$id);
			$query = $this->db->get('portofolio');
			return $query;
		}

		function get_port($lim,$offset)
		{
			$this->db->limit($lim,$offset);
			$this->db->order_by("tahun","desc");
			$this->db->order_by("id","desc");
			$query = $this->db->get('portofolio');
			return $query;
		}

		function get_port_kat($kat,$tahun,$lim,$offset)
		{
			if ($kat!='all'){
				$this->db->where("kategori",$kat);
			}
			if ($tahun!='any'){
				$this->db->where("tahun",$tahun);
			}
			$this->db->limit($lim,$offset);
			$this->db->order_by("tahun","desc");
			$this->db->order_by("id","desc");
			$query = $this->db->get('portofolio');
			return $query;
		}

		function year_exist($tahun)
		{
			$this->db->where("tahun",$tahun);
			$query = $this->db->get('portofolio');
			return ($query->num_rows() > 0);
		}
	}
 ?>