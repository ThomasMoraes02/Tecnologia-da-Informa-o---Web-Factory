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

    public function mensagem()
    {
        $mensagem = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "telefone" => $this->input->post("telefone"),
            "mensagem" => $this->input->post("mensagem"),
        );

        $this->load->database();
        $this->load->model("usuarios_model");
        $this->usuarios_model->salvar($mensagem);

        //Sessão de usuário
        $this->session->set_flashdata("enviada", "Mensagem enviada com sucesso");

        $this->load->view("contato/contato.php");
    }
}

?>