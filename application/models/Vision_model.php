<?php 

include_once APPPATH.'libraries/VisionApi.php';

class Vision_Model extends CI_Model{

    public function label_use($imagem){
        $vision = new VisionApi();
        $read_image = $vision->label($imagem);
        return $read_image;
    }
        
    public function salvar(){
            $nome   = $this->input->post('imagem');
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
        
        }

    public function salvarBanco($imagem, $conteudo){
        $data = array("img" => $imagem, "resultado" => $conteudo);
        $this->db->insert('imagem',$data);
    }

    /*public function lista(){
        $html = '';
        $Vision = new VisionApi();
        // organiza a lista e depois retorna o resultado
        $data = $Vision->getAll();
        $html .= '<table class="table mx-auto justify-content-center" >';
        $html .= '<tr><th scope="col" class="justify-content-center" >Imagem</th><th scope="col" >Resultado</th><th scope="col" >ID</th></tr>';
        foreach($data as $row){
            $html .= '<tr>';
            $html .= '<th scope="col"><img src="'.base_url('assets/image/'.$row['img']).'" width="120px"></th>';
            $html .= '<th scope="col">'.$row['resultado'].'</th>';
            $html .= '<th scope="col">'.$row['id'].'</th></tr>';
            }
            $html .= '</table>';
            return $html;
        }*/
    
    public function Historico(){
        $sql = "SELECT * FROM imagem";
        $res = $this->db->query($sql);
        $data = $res->result();
        return $data;
    }


}

