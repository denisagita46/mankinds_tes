<?php
Class Appoitment extends CI_Controller{
function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }
	public function index()
	{
		$this->load->model("Model_appoitment");
	    $data['appoitment'] = $this->Model_appoitment->load_appointment();
		$this->load->view("data_appoitment", $data);
	}

	public function add(){
		$this->load->model("Model_appoitment");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->Model_appoitment->simpan($_POST);
			redirect("appoitment");
		}
		
		$this->load->view("form_appoitment",$data);
	}
	
	public function delete($id_appoitment){
		$this->load->model("Model_appoitment");
		$this->Model_appoitment->hapus($id_appoitment);
		redirect("appoitment");
	}

	public function edit($id_appoitment){
		$this->load->model("Model_appoitment");
		$data['tipe'] = "Edit";
		$data['default'] = $this->Model_appoitment->load_ok($id_appoitment);

		if(isset($_POST['tombol_submit'])){
			$this->Model_appoitment->update($_POST, $id_appoitment);
			redirect("appoitment");
		}

		$this->load->view("form_update_appoitment",$data);
	}
	
	
}