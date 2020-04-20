<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//model
		$this->load->model('pages_model');

		//variable session
		$this->nama_member = $this->session->userdata('is_user_logged_in');	
		$this->title = "Gift App";

	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['main_content'] = 'frontend/home/index';
		$data['pages'] = $this->pages_model->pages(6);
		$data['nama'] = $this->nama_member["nama"];
		$this->load->view('template/frontend/view', $data);
	}

}
