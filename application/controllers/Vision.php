<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/VisionApi.php';

class Vision extends CI_Controller {

	public function index(){
        $this->load->view('common/header');      
		$this->load->view('common/navbar');
		$this->load->view('index_view');
		$this->load->view('common/footer');
	}

	public function cloud_vision(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->model('Vision_model','model');
		
		$this->load->view('vision_form');
		$this->model->salvar();
		$this->load->view('common/footer');
	}

	public function show_label($imagem){
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->model('Vision_model','vision');
		$data['imagem'] = $imagem;
		$data['dados'] = $this->vision->label_use($imagem);
		$this->load->view('result_view', $data);
		$conteudo = $this->vision->label_use($imagem);
		$this->vision->salvarBanco($imagem, $conteudo);
		$this->load->view('common/footer');
	}

	public function historico(){
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->model('Vision_model', 'vision');
        $v['resultado'] = $this->vision->Historico();
        $this->load->view('historico_view', $v); 
		$this->load->view('common/footer');
	}

	public function sobre(){
		$this->load->view('common/header');
		
		$this->load->view('common/navbar');
		$this->load->view('sobre_view');
		$this->load->view('common/footer');
	}
}