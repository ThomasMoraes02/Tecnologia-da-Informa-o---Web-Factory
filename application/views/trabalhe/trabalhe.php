<section class="trabalhe-conosco">
    <div class="container">
        <h2 class="titulo">Trabalhe Conosco</h2>

        <h4>Nossos desafios</h4>
        <p>Buscamos entregar valor em todos os projeto nos tenha sido solicitado. Para isso necessitamos de uma equipe ágil e de grande intelecto para encarar as demandas do mercado. Estar em constante atenção as novas tecnologias e softwares nos mantém sempre um passo a frente para alcançar nossos objetivos.</p>

        <hr/>

        <h4>Requisitos</h4>
        <p>Na Web Factory você terá a oportunidade de trabalhar e se atualizar pois disponibilizamos materiais, cursos e apostilas para que você se sinta confortável e agregue conhecimento enquanto desenvolve seus projetos.</p>

        <hr/>

        <div class="grid-8">
        <h4>Front-end</h4>
        <ul>
            <li>Conhecimentos em HTML/CSS e Javascript</li>
            <li>Noções de UI e UX design</li>
            <li>React</li>
            <li>Bootstrap 4</li>
            <li>Angular</li>
        </ul>
        </div>

        <div class="grid-8">
        <h4>Back-end</h4>
        <ul>
            <li>Conhecimentos em PHP utilizando CodeIgniter</li>
            <li>Conhecimentos de Banco de Dados Relacionais</li>
            <li>Frameworks MVC</li>
            <li>Java</li>
            <li>C#</li>
        </ul>
        </div>
    </div>
</section>

<section class="diferenciais">
    <div class="container">
        <div class="grid-8">
            <h4>Diferenciais</h4>
            <ul>
                <li>Inglês Fluente ou Avançado</li>
                <li>Organização</li>
                <li>Trabalho em equipe</li>
                <li>Conhecimentos em Metodologia Ágil</li>
                <li>Git e GitHub</li>
            </ul>
        </div>

        <div class="grid-8">
        <h4>Benefícios</h4>
            <ul>
                <li>Vale-refeição</li>
                <li>Vale-Transporte</li>
                <li>Acesso a cursos de tecnologia</li>
                <li>Plano de saúde</li>
                <li>Acesso a palestras de tecnologia</li>
            </ul>
        </div>

    </div>
</section>

<section class="sustentabilidade">
    <div class="container">
        <h1 class="titulo">Sustentabilidade</h1>
        <p>Em nossa politica de sustentabilidade, utilizamos o conceito do trabalho-ambiente em que só é possível produzir se o seu ambiente não sofrer consequências. Portanto utilizamos boas práticas para que fiquemos em constante harmonia com a natureza e gerando assim uma grande preservação ambiental.</p>
        <p>O conceito de sustentabilidade é bastante amplo e envolve diversos fatores. Na Web Factory nos concentramos em desempenhar projetos em preservação de recursos naturais. Portanto, conciliar atividades como produzir sem degradar.</p>

        <h2>Sustentabilidade da empresa:</h2>
        <ul>
            <li>Uso consciente da água e energia elétrica</li>
            <li>Respeito ao gênero, opção sexual e religião do colaborador</li>
            <li>Uso consciente de recursos naturais</li>
            <li>Descarte de lixo em locais apropriados</li>
            <li>Reutilização de materiais</li>
            <li>Projetos Educacionais referentes a preservação do meio-ambiente</li>
        </ul>
    </div>
</section>

<section class="curriculo">
    <div class="container">
        <h1 class="titulo">Faça parte da nossa equipe !</h1>

        <p class="curriculo-enviado"><?= $this->session->flashdata("curriculo_enviado")?></p>

        <div class="form-curriculo">
            <?php echo form_open("trabalhe/emprego"); ?>

            <div class="grid-8">
            <?php 
            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "placeholder" => "Digite seu nome completo...",
            ));

            echo form_label("E-mail", "email");
            echo form_input(array(
                "name" => "email",
                "id" => "email",
                "type" => "email",
                "placeholder" => "(XX) XXXXX-XXXX",
            ));
            ?>
            </div>

            <div class="grid-8">
                <?php
                echo form_label("Telefone","telefone");
                echo form_input(array(
                    "name" => "telefone",
                    "id" => "telefone",
                    "placeholder" => "(XX) XXXXX-XXXX",
                ));
                
                echo form_label("Possui experiência?", "experiencia");
                echo form_input(array(
                    "name" => "experiencia",
                    "id" => "experiencia",
                    "placeholder" => "Possui experiência em alguma área de desenvolvimento?",
                )); 

                ?>
            </div>

            <div class="grid-16">
            <?php 
            echo form_label("Curriculo","curriculo"); 
            echo form_textarea(array(
                "name" => "curriculo",
                "id" => "curriculo",
                "maxlenght" => "500"
            ));

            echo form_button(array(
                "content" => "Enviar Curriculo",
                "type" => "submit",
            ));
            ?>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>