<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{ 
		$this->load->view('template_admin');
	}
	public function simpan(){
		$this->db->from('user');
		$data = array (
			'username' 	=> $this->input->post('username'),
			'nama'		=> $this->input->post('nama'),
			'password'	=> md5($this->input->post('password')),
		);
		$this->db->insert('user',$data);
		redirect('home');
	}
}
