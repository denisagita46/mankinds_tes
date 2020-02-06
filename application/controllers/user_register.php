<?php
Class user_register extends CI_Controller{
	public function index(){
		$this->load->model("Model_register");
		
	}
	
	public function add(){
		$this->load->model("Model_register");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
		    
			$this->Model_register->simpan($_POST);
		
			$data=base_url();
							echo $this->session->set_flashdata('msg','<script>alert("berhasil")</script>');
			redirect("login");
		}
		$this->load->view("form_register",$data);
	}
}