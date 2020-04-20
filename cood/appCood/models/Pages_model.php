<?php
class Pages_model extends CI_Model {

//Pages
function pages($limit = '')
	{		

		$q = $this->db->select('

			a.pages_id 		as pages_id,
			a.pages_slug 	as pages_slug,
			a.pages_judul 	as pages_judul,		
			a.pages_date 	as pages_date

		')
			
		->from('pages a')
		->order_by('a.pages_judul DESC');	

		if($limit != ''){
			$q->limit($limit);
		}
				
		$result = $q->get()->result();
		return $result;
				
	}

function pages_add_post($data)
	{					
		$insert = $this->db->insert('pages', $data);
		return $insert;					
	}

function pages_edit($pages_id)
	{
		$q = $this->db->select('

			a.pages_id 		as pages_id,
			a.pages_slug 	as pages_slug,
			a.pages_judul 	as pages_judul,
			a.pages_isi		as pages_isi,
			a.pages_date 	as pages_date,

		')
			
		->from('pages a')
		->where('a.pages_id', $pages_id);
			
			
		$result = $q->get()->result();
		return $result;

	}

function pages_edit_post($pages_id, $data)
	{					
		$this->db->where('pages_id', $pages_id);
		$this->db->update('pages', $data);				
	}

function pages_delete($pages_id)
	{
		$this->db->delete('pages', array('pages_id' => $pages_id));
		return true;								
	}

function pages_get($slug)
	{		

		$q = $this->db->query('
			
			SELECT
			a.pages_id 		as pages_id,
			a.pages_slug 	as pages_slug,
			a.pages_judul 	as pages_judul,	
			a.pages_isi		as pages_isi,	
			a.pages_date 	as pages_date
			FROM pages a
			WHERE a.pages_slug = "'.$slug.'"
			
		');

		$tmp = $q->row();
	
		$ret['title'] = $tmp->pages_judul;

		$q2 = $this->db->select('

			a.pages_id 		as pages_id,
			a.pages_slug 	as pages_slug,
			a.pages_judul 	as pages_judul,	
			a.pages_isi		as pages_isi,	
			a.pages_date 	as pages_date

		')
			
		->from('pages a')
		->where('a.pages_slug', $slug);
				
		$ret['rows'] = $q2->get()->result();

		return $ret;
	}

}