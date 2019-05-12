<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/VisionApi.php';

class Vision extends CI_Controller {

	public function index(){
        $this->load->view('common/header');
  $api = new VisionApi();
  $data = $api->label();

		$this->load->view('common/navbar');
		$this->load->view('common/footer');
	}

	public function cloud_vision(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->model('Vision_model','model');
		$this->model->salvar();
		$this->load->view('vision_form');
		var_dump($_POST);
		$this->load->view('common/footer');
	}

	public function show_label($imagem){
		a;
	}
}