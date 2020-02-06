<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_appoitment extends CI_Model{

	public function load_appointment(){
		$sql = $this->db->query("SELECT * FROM appoitment WHERE flag = 1");
		return $sql->result_array();
	}
	
	public function load_ok($id_appoitment){
		$sql = $this->db->query("SELECT * FROM appoitment where id_appoitment = ".intval($id_appoitment));
		return $sql->result_array();
	}
	
	public function load_view($id_appoitment){
		$sql = $this->db->query("SELECT * FROM appoitment where id_appoitment = ".intval($id_appoitment));
		return $sql->result_array();
	}
	 
	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama_appoitment = $this->db->escape ($post['nama_appoitment']);
		$tanggal_appoitment = $this->db->escape ($post['tanggal_appoitment']);
		$tempat_lahir = $this->db->escape ($post['tempat_lahir']);
		$tanggal_lahir = $this->db->escape ($post['tanggal_lahir']);
		$email = $this->db->escape ($post['email']);
		$telepon = $this->db->escape ($post['telepon']);
		$alamat = $this->db->escape ($post['alamat']);
		$sql = $this->db->query("INSERT INTO appoitment VALUES (NULL, $nama_appoitment, $tanggal_appoitment, $tempat_lahir, $tanggal_lahir, $email, $telepon, $alamat, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id_appoitment){
		$sql = $this->db->query("SELECT * FROM appoitment WHERE id_appoitment = ".intval($id_appoitment));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id_appoitment){
		// update appointment
		$nama_appoitment = $this->db->escape($post['nama_appoitment']);
		$tanggal_appoitment = $this->db->escape($post['tanggal_appoitment']);
		$tempat_lahir = $this->db->escape($post['tempat_lahir']);
		$tanggal_lahir = $this->db->escape($post['tanggal_lahir']);
		$email = $this->db->escape($post['email']);
		$telepon = $this->db->escape($post['telepon']);
		$alamat = $this->db->escape ($post['alamat']);

		$sql = $this->db->query("UPDATE appoitment SET nama_appoitment = $nama_appoitment, tanggal_appoitment = $tanggal_appoitment, tempat_lahir = $tempat_lahir, tanggal_lahir = $tanggal_lahir , email = $email , telepon = $telepon , alamat = $alamat  WHERE id_appoitment = ".intval($id_appoitment));

		return true;
	}

	public function hapus($id_appoitment){
		$sql = $this->db->query("UPDATE appoitment SET flag = 0 WHERE id_appoitment = ".intval($id_appoitment));
	}	
	
}