<?php 

class Contato extends CI_Controller
{
    public function index()
    {
        $data = array("titulo" => "Web Factory - Contato");
        $this->load->view("estrutura/header.php",$data);
        $this->load->view("contato/contato.php");
        $this->load->view("estrutura/footer.php");
    }
}

?>