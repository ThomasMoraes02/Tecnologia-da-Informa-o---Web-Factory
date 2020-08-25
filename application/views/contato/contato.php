<section class="contato">
    <div class="container">
        <h1 class="titulo">Dúvidas, sugestões ou elogios?</h1>
    </div>
</section>

<section class="contato-formulario">
    <div class="container">

        <p class="mensagem-enviada"><?= $this->session->flashdata("enviada")?></p>
        
        <div class="grid-7 formulario">
        <?php
        
        echo form_open("contato/mensagem");

        echo form_label("Nome","nome");
        echo form_input(array(
            "name" => "nome",
            "id" => "nome",
            "type" => "text",
            "maxlenght" => "255",
            "placeholder" => "Digite seu nome..."
        ));

        echo form_label("E-mail","email");
        echo form_input(array(
            "name" => "email",
            "id" => "email",
            "type" => "email",
            "maxlenght" => "255",
            "placeholder" => "email@dominio"
        ));

        echo form_label("Telefone","telefone");
        echo form_input(array(
            "name" => "telefone",
            "id" => "telefone",
            "type" => "text",
            "maxlenght" => "255",
            "placeholder" => "(XX) XXXXX-XXXX"
        ));

        echo form_label("Mensagem","mensagem");
        echo form_textarea(array(
            "name" => "mensagem",
            "maxlenght" => "300",
            "id" => "mensagem"
        ));

        echo form_button(array(
            "content" => "Enviar",
            "class" => "botao",
            "type" => "submit"
        ));
        
        echo form_close();
        
        ?>
        </div>


        <div class="grid-8 dados">
            <h1 class="titulo">Dados</h1>
            <p><strong>Telefone: </strong>(11) 972173967</p>
            <p><strong>E-mail: </strong>contato@webfactory.com</p>
            <p><strong>Endereço: </strong> Avenida Paulista - SP - Brasil</p>
            <p><strong>Horários: </strong>Seg - Sex: 07:00 - 16:00</p>

            <div class="redes-contato">
                <h2>Nos acompanhe em nossas redes:</h2>
                <ul>
                    <li><a href="https://facebook.com" target="_blank"><img src="<?php echo base_url("/assets/img/redes-sociais/facebook.svg") ?>" alt="Facebook"></a></li>
                    <li><a href="https://instagram.com" target="_blank"><img src="<?php echo base_url("/assets/img/redes-sociais/instagram.svg") ?>" alt="Instagram"></a></li>
                    <li><a href="https://twitter.com" target="_blank" ><img src="<?php echo base_url("/assets/img/redes-sociais/twitter.svg") ?>" alt="Twitter"></a></li>
                </ul>
            </div>
        </div>
    </div>   
</section>


<section class="localizacao">
    <div class="container">
        <h2 class="titulo">Localização:</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.14878213509!2d-46.65657118497816!3d-23.563099367541614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1593972254527!5m2!1spt-BR!2sbr"
            width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
    