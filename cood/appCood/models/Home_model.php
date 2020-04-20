<?php
class Home_model extends CI_Model {

//user login valid
function valid_login($email, $password)
	{		

		$q = $this->db->select('
				a.user_id as user_id,			
				a.email as email,
				a.password as password,
				a.status as status,
				b.member_nama as member_nama 
			')
			
			->from('users a')
			->join('profils b','b.member_id = a.member_id')
			->where('a.email', $email)
			->where('a.password', $password)
			;			
				
			$result = $q->get()->result();
			return $result;
				
	}

//admin login valid
function valid_login_admin($email, $password)
	{		

		$q = $this->db->select('
				a.admin_id as admin_id,			
				a.email as email,
				a.password as password,
				a.admin_nama as admin_nama,
				a.status as status,
		')
			
		->from('webadmin a')
		->where('a.email', $email)
		->where('a.password', $password);			
				
		$result = $q->get()->result();
		return $result;
				
	}

//tambah member
function add_member($data_member)
	{					
		$insert = $this->db->insert('profils', $data_member);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;					
	}

function add_login($data)
	{					
		$insert = $this->db->insert('users', $data);
		return $insert;					
	}

//check email
function checkemail($email)
	 {
	   $this->db->select('email');
	   $this->db->from('users');
	   $this->db->where('email', $email);
	   $this->db->limit(1);
	 
	   $query = $this->db->get();
	 
	   if($query -> num_rows() == 1)
	   {
		 return $query->result();
	   }
	   else
	   {
		 return false;
	   }
	}

//Product
function product_order($product_id)
	{
		$results = $this->db->get_where('product',array('product_id' => $product_id))->result();
		$result = $results[0];											
		return $result;

	}

//contact-us
function contact_us_post($data)
	{					
		$insert = $this->db->insert('contact', $data);
		return $insert;					
	}

//subscribe-email
function subscribe_post($data)
	{					
		$insert = $this->db->insert('subscribe', $data);
		return $insert;					
	}

}