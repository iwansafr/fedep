<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pel extends CI_Controller
{
	var $session_data;
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Admin_model');
		$this->load->model('esg_model');
		$this->load->library('Esg');
		$this->load->library('ZEA/Zea');
		$this->session_data = $this->session->userdata(str_replace('/','_',base_url('_logged_in')));
	}
	public function index()
	{
		// $this->load->view('index');
	}
	public function kelembagaan()
	{
		$data = $this->db->get_where('pel_kelembagaan',['user_id'=>$this->session_data['id']])->row_array();
		$this->load->view('index',['session'=>$this->session_data,'data'=>$data]);
	}
	public function kelembagaan_verifikasi($id = 0)
	{
		$this->load->view('index',['id'=>$id]);
	}
	public function kelembagaan_list()
	{
		$this->load->view('index');
	}
	public function kondisi()
	{
		$data = $this->db->get_where('pel_kondisi',['user_id'=>$this->session_data['id']])->row_array();
		$this->load->view('index',['session'=>$this->session_data,'data'=>$data]);
	}
	public function kondisi_verifikasi($id = 0)
	{
		$this->load->view('index',['id'=>$id]);
	}
	public function kondisi_list()
	{
		$this->load->view('index');
	}
	
	public function rencana()
	{
		$data = $this->db->get_where('pel_rencana',['user_id'=>$this->session_data['id']])->row_array();
		$this->load->view('index',['session'=>$this->session_data,'data'=>$data]);
	}
	public function rencana_verifikasi($id = 0)
	{
		$this->load->view('index',['id'=>$id]);
	}
	public function rencana_list()
	{
		$this->load->view('index');
	}

	public function pelaksanaan()
	{
		$data = $this->db->get_where('pel_pelaksanaan',['user_id'=>$this->session_data['id']])->row_array();
		$this->load->view('index',['session'=>$this->session_data,'data'=>$data]);
	}
	public function pelaksanaan_verifikasi($id = 0)
	{
		$this->load->view('index',['id'=>$id]);
	}
	public function pelaksanaan_list()
	{
		$this->load->view('index');
	}

	public function evaluasi()
	{
		$data = $this->db->get_where('pel_evaluasi',['user_id'=>$this->session_data['id']])->row_array();
		$this->load->view('index',['session'=>$this->session_data,'data'=>$data]);
	}
	public function evaluasi_verifikasi($id = 0)
	{
		$this->load->view('index',['id'=>$id]);
	}
	public function evaluasi_list()
	{
		$this->load->view('index');
	}

	public function grafik()
	{
		$this->load->view('index');
	}
	
}