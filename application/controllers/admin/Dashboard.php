<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	} 
	public function index()
	{
        $data = array(
            'judul_halaman' => "Dashboard | Selamat Datang di Halaman Dashboard",

        );
		$this->template->load('template_admin','admin/dashboard',array_merge($data));

	}
	
}
