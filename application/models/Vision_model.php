<?php 

include_once APPPATH.'libraries/VisionApi.php';

class Vision_Model extends CI_Model{

public function label_use($imagem){
    $vision = new Vision_Api();
    $read_image = $vision->label($imagem);
    return $read_image;
}
    
public function salvar(){
        $nome   = $this->input->post('imagem');
        $img    = $_FILES['imagem'];
        $configuracao = array(
            'upload_path'   => './assets/images',
            'allowed_types' => 'gif|jpg|png|jpeg',
            'file_name'     => $nome
        ); 

        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('imagem')){
            echo 'Arquivo salvo com sucesso.';
            $file_data = $this->upload->data();
            redirect('vision/show_label/'.$file_data['file_name']);
        }
        else
            echo $this->upload->display_errors();
    }  
}

