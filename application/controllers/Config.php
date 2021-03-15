<?php
class Config extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Admin_model');
		$this->load->model('esg_model');
		$this->load->library('Esg');
		$this->load->library('ZEA/Zea');
	}
	public function fedep()
	{
		$this->load->view('index');
	}
}