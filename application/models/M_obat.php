<?php
class M_Obat extends CI_Model {
	// METHOD untuk menampilkan semua data di tabel obat
	function getObat($nama_obat)
	{
		$query1 = 'SELECT * FROM obat';
		if ($nama_obat!=null)
			$query2 = ' WHERE nama_obat LIKE "%'.$nama_obat.'%"';
		else
			$query2 = '';

		$query = $query1 . $query2;
        $data = $this->db->query($query);
		return $data;
	}

	// METHOD untuk insert data ke database
	function insertObat()
	{
		$nama_obat = $this->input->post('nama_obat');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');
		$expire = $this->input->post('expire');
		$penyajian = $this->input->post('penyajian');
		$deskripsi = $this->input->post('deskripsi');
		$pabrik = $this->input->post('pabrik');

		$query = 'INSERT INTO obat SET nama_obat="'.$nama_obat.'", harga="'.$harga.'", stok="'.$stok.'", kategori="'.$kategori.'", expire="'.$expire.'", penyajian="'.$penyajian.'", deskripsi="'.$deskripsi.'", pabrik="'.$pabrik.'"';
        $this->db->query($query);
	}
	
	// METHOD untuk menampilkan satu obat dari database berdasarkan id_obat
	function tampilSatuObat($id_obat)
	{
        $query = "SELECT * FROM obat WHERE id_obat='$id_obat'";
        $data = $this->db->query($query);
		return $data;
	}
	// METHOD untuk update satu obat di database berdasarkan id_obat
	function updateObat($id_obat)
	{
		$nama_obat = $this->input->post('nama_obat');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');
		$expire = $this->input->post('expire');
		$penyajian = $this->input->post('penyajian');
		$deskripsi = $this->input->post('deskripsi');
		$pabrik = $this->input->post('pabrik');

		$query = 'UPDATE obat SET nama_obat="'.$nama_obat.'", harga="'.$harga.'", stok="'.$stok.'", kategori="'.$kategori.'", expire="'.$expire.'", penyajian="'.$penyajian.'", deskripsi="'.$deskripsi.'", pabrik="'.$pabrik.'" WHERE id_obat="'.$id_obat.'"';
        $this->db->query($query);
	}

	// METHOD untuk delete satu obat di database berdasarkan id_obat
	function deleteObat($id_obat)
	{
		$query = "DELETE FROM obat WHERE id_obat='$id_obat'";
		$this->db->query($query);
	}
}
