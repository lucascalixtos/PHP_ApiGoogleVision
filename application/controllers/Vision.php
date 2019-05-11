<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/VisionApi.php';

class Vision extends CI_Controller {

	public function index()
	{
        $this->load->view('common/header');
        $api = new VisionApi();
        $api->read_file();

		$this->load->view('common/navbar');
		$this->load->view('common/footer');
	}
}