<?php 

class Usuarios_model extends CI_Model
{
    public function salvar($mensagem)
    {
        $this->db->insert("tb_contato", $mensagem);
    }

    public function salvarCurriculo($curriculo)
    {
        $this->db->insert("tb_curriculo", $curriculo);
    }
}

?>