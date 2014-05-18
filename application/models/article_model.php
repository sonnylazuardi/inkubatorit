<?php 
	class Article_model extends CI_Model
	{
		function new_post()
		{
			$image = $this->input->post('image');
			if ($image == ""){
				$html = $this->input->post('content');
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
			date_default_timezone_set('Asia/Jakarta');
			$data = array(
				'title' => $this->input->post('title'),
				'image' => $image,
				'author' => $this->input->post('author'),
				'kategori' => $this->input->post('kategori'),
				'content' => $this->input->post('content'),
				'time' => date("Y-m-d H:i:s")
			);
			$query = $this->db->insert('artikel',$data);
			return $query;
		}

		function edit_post($id)
		{
			$image = $this->input->post('image');
			if ($image == ""){
				$html = $this->input->post('content');
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
				'author' => $this->input->post('author'),
				'kategori' => $this->input->post('kategori'),
				'content' => $this->input->post('content')
			);
			$this->db->where('id', $id);
			$query = $this->db->update('artikel', $data); 
			return $query;
		}

		function del_post($id)
		{
			$query = $this->db->delete('artikel', array('id' => $id)); 
			return $query;
		}

		function get_post($lim,$offset)
		{
			$this->db->limit($lim,$offset);
			$this->db->order_by("time","desc");
			$query = $this->db->get('artikel');
			return $query;
		}

		function get_post_kat($kat,$lim,$offset)
		{
			$this->db->where("kategori",$kat);
			$this->db->limit($lim,$offset);
			$this->db->order_by("time","desc");
			$query = $this->db->get('artikel');
			return $query;
		}

		function get_post_id($id)
		{
			$this->db->where("id",$id);
			$query = $this->db->get('artikel');
			return $query;
		}	
	}
?>