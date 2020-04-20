<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//model
		$this->load->model('auth_model');	

		//variable session
		$this->nama_member = $this->session->userdata('is_user_logged_in');	
		$this->title = "Portal Login";

	}

	public function cood_admin()
	{
		$is_admin_logged_in = $this->session->userdata('is_admin_logged_in'); //variable id login
		if(!isset($is_admin_logged_in) || $is_admin_logged_in != true) //cek sedang sudah login apa belum
		{
			$data['title'] = $this->title;						
			$data['main_content'] = 'frontend/auth/cood-admin';
			$this->load->view('template/frontend/aloneview', $data);
		}
		else
		{
			redirect('cood-admin/dashboard');
		}
	}

	//admin valid
	function valid_login_admin()
	{		
	
		
		$this->form_validation->set_message('required', '<i class="fa fa-times-circle-o"></i> Anda belum memberikan %s '); 
		//------------------Valid
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');	


		
		if($this->form_validation->run() == false)
		{	
			$data['title'] = $this->title;						
			$data['main_content'] = 'frontend/auth/cood-admin';
			$this->load->view('template/frontend/aloneview', $data);
		}
		else
		{
			
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$date = date('Y-m-d');

						
			$result = $this->auth_model->valid_login_admin($email, $password);			
			//
			if ($result) 
			{
				
				foreach ($result as $rows):
				
					$admin_id = $rows->admin_id;
					$email_user = $rows->email;
					$password_user = $rows->password;
					$status = $rows->status;
					$admin_nama = $rows->admin_nama;
				
				
				
				if($email_user != $email)
				{
			
					$data['title'] = $this->title;						
					$data['error'] = 'email "'.$email.'" Belum Terdaftar atau Belum Terverifikasi';
					$data['main_content'] = 'frontend/auth/cood-admin';
					$this->load->view('template/frontend/aloneview', $data);
				}		
				elseif ($password_user != $password) 						
				{

					$data['title'] = $this->title;						
					$data['error'] = 'Password Salah';
					$data['main_content'] = 'frontend/auth/cood-admin';
					$this->load->view('template/frontend/aloneview', $data);
				}
				elseif ($status != 'Y') 						
				{

					$data['title'] = $this->title;						
					$data['error'] = 'email Anda Tidak Terdaftar';
					$data['main_content'] = 'frontend/auth/cood-admin';
					$this->load->view('template/frontend/aloneview', $data);

				}						
				elseif ( ($email_user == $email) and ($password_user == $password) and ($status == 'Y') )
				{
					
					$data = array(
						'email_login' => $email_user,
						'nama' => $admin_nama,	
						'date' => $date,
						'admin_id' => $admin_id,		
						'is_admin_logged_in' => true
					);
					
					$this->session->set_userdata('is_admin_logged_in', $data);			
					redirect('cood-admin/dashboard');
				}

				endforeach;
				
			}else {

					$data['title'] = $this->title;						
					$data['error'] = 'email "'.$email.'"  Belum Terdaftar atau Belum Terverifikasi';
					$data['main_content'] = 'frontend/auth/cood-admin';
					$this->load->view('template/frontend/aloneview', $data);
			}
		}
	}

}