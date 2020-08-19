<?php 

class Home extends CI_Controller
{
    public function index()
    {
        $data = array("titulo" => "Web Factory");

        $this->load->view("estrutura/header.php",$data);
        $this->load->view("home/index.php");
        $this->load->view("estrutura/footer.php");
    }
}

?>
