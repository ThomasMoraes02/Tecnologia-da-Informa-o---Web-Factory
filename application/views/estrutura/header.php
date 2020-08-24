<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/reset.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/grid.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css")?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("assets/img/favicon/favicon3.ico") ?>">
    <title><?php echo $titulo; ?></title>
</head>
<header class=" header ">
        <div class="container ">
            <a href="<?php echo site_url("home/index/index.php") ?>" class="grid-4 ">
                <img src="<?php echo base_url("assets/img/favicon/logo.png") ?>" alt="logo da web factory">
            </a>
            <nav class="header_menu grid-12 ">
                <ul>
                    <li><a href="<?php echo site_url("contato/index/contato.php")?>">Contato</a></li>
                    <li><a href="<?php echo site_url("sobre/index/sobre.php")?>">Sobre Nós</a></li>
                    <li><a href="<?php echo site_url("trabalhe/index/trabalhe.php")?>">Trabalhe Conosco</a></li>
                </ul>
            </nav>
        </div>
    </header>
<body>
