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
		$this->title = "Sinergi Sintra Giat";

	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['main_content'] = 'frontend/home/index';
		$data['pages'] = $this->pages_model->pages(6);
		$data['nama'] = $this->nama_member["nama"];
		$this->load->view('template/frontend/view', $data);
	}


	public function detail_page()
	{
		$slug = $this->uri->segment(1);
		//Query
		$result = $this->pages_model->pages_get($slug);
		//
		$data['title'] = $result['title'];
		$data['pages_detail'] = $result['rows'];
		//
		$data['main_content'] = 'frontend/home/page';
		$data['nama'] = $this->nama_member["nama"];
		$data['pages'] = $this->pages_model->pages(6);
		$this->load->view('template/frontend/view', $data);
	}

}
