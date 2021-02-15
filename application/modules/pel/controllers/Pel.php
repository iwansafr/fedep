<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Admin_model');
		$this->load->model('esg_model');
		$this->load->library('Esg');
		$this->load->library('ZEA/Zea');
	}
	public function index()
	{
		// $this->load->view('index');
	}
	public function kelembagaan()
	{
		$this->load->view('index');
	}
	public function kondisi()
	{
		$this->load->view('index');
	}
}