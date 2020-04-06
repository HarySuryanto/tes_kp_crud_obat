<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent:: __construct();

		// Load model m_obat
		$this->load->model("m_obat");
	}

	// Main method
	function index()
	{
		if (isset($_GET['nama_obat']))
			$nama_obat = $_GET['nama_obat'];
		else
			$nama_obat = null;
		
		$data = array(
			'tampil_obat' => $this->m_obat->getObat($nama_obat)
		);
		$this->load->view('v_home', $data);
	}

	// METHOD untuk menampilkan halaman tambah obat
	function tambahObat() 
	{
		$this->load->view('v_tambah_obat');
	}
	// METHOD untuk insert data
	function insertObat()
	{
		$this->m_obat->insertObat();
		redirect(site_url('home'));
	}

	// METHOD untuk menampilkan satu data di halaman edit obat
	function editObat($id_obat)
	{
		$data = array(
			'tampil_satu_obat' => $this->m_obat->tampilSatuObat($id_obat)
		);
		$this->load->view('v_edit_obat', $data);
	}
	// METHOD untuk update data
	function updateObat($id_obat)
	{
		$this->m_obat->updateObat($id_obat);
		redirect(site_url('home'));
	}

	// METHOD untuk hapus data
	function deleteObat($id_obat)
	{
		$this->m_obat->deleteObat($id_obat);
		redirect(site_url('home'));
	}
}
