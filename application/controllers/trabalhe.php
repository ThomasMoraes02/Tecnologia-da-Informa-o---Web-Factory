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

    public function emprego()
    {
        $curriculo = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "telefone" => $this->input->post("telefone"),
            "experiencia" => $this->input->post("experiencia"),
            "curriculo" => $this->input->post("curriculo")
        );

        $this->load->database();
        $this->load->model("usuarios_model");

        $this->usuarios_model->salvarCurriculo($curriculo);

        redirect("/");
    }
}

?>