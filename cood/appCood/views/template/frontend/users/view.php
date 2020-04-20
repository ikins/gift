<?php 
	$this->load->view('template/frontend/users/header');
	$this->load->view('template/frontend/users/topmenu');
?>
<?php $this->load->view($main_content);?>
<?php $this->load->view('template/frontend/users/footer');?>