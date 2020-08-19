<?php 

class Trabalhe extends CI_Controller
{
    public function index()
    {
        $data = array("titulo" => "Web Factory - Trabalhe Conosco");
        $this->load->view("estrutura/header.php" ,$data);
        $this->load->view("trabalhe/trabalhe.php");
        $this->load->view("estrutura/footer.php");
    }
}

?>