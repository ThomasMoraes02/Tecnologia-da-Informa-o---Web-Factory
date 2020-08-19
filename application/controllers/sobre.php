<?php 

class Sobre extends CI_Controller
{
    public function index()
    {
        $data = array("titulo" => "Web Factory - Sobre Nós");
        $this->load->view("estrutura/header.php", $data);
        $this->load->view("sobre/sobre.php");
        $this->load->view("estrutura/footer.php");
    }
}

?>