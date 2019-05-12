<?php 

include_once APPPATH.'libraries/VisionApi.php';

class Vision_Model extends CI_Model{

/*public function transcricao($audio, $lang){
    $api = new CloudSpeech_API();
    $transcript = $api->transcript($audio, $lang);
    return $transcript;
    }*/
    
public function salvar(){
    $nome   = $this->input->post('imagem');
    $img    = $_FILES['imagem'];
    $configuracao = array(
        'upload_path'   => './assets/images',
        'allowed_types' => 'gif|jpg|png|jpeg',
        'file_name'     => $nome,
    );      
    $this->load->library('upload');
    $this->upload->initialize($configuracao);
    if ($this->upload->do_upload('imagem'))
        echo 'Arquivo salvo com sucesso.';
    else
        echo $this->upload->display_errors();
   }
}

