<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_register extends CI_Model{

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$email = $this->db->escape($post['email']);
		$status_pekerjaan = $this->db->escape($post['status_pekerjaan']);
		$tgl_registrasi = $this->db->escape($post['tgl_registrasi']);
		$nama = $this->db->escape($post['nama']);
		$password = $this->db->escape($post['password']);
		$level = $this->db->escape($post['level']);
		

		$sql = $this->db->query("INSERT INTO user VALUES (NULL, $nama, $email, $status_pekerjaan, $tgl_registrasi,  $password, $level, 1)");
		if($sql)
			return true;
		return false;
	}

}