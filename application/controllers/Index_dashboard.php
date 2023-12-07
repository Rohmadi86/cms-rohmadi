<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index_dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$data = array(
			'judul' => "Beranda | Rahmadi",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'carousel' => $this->db->get('caraousel')->result_array(),
			'contens' => $this->db->get('konten')->result_array(),
		);
		$this->load->view('beranda', $data);
	}
	public function artikel($id_konten)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->where('id_konten', $id_konten);
		$data = $this->db->get('konten')->row();
		$data_konten = array(
			'artikel' => $data,
			'konfig' => $konfig,
			'kategori' => $kategori,
		);
		$this->load->view('artikel', $data_konten);
	}
}
