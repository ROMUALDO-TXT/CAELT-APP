<?php
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/dataBase/config.php";
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/sessoes/verifica_sessao.php";
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Eventos</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../public/assets/img/icon-caelt.png">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/bootstrap/vs3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/bootstrap/vs4/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/bootstrap/vs4/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/area.css">
    <script type="text/javascript" src="../public/assets/js/jquery-3.2.1.min.js"></script>
</head>

<body>

    <?php
    include "Application/views/templates/header.php";
    ?>

    <div class="hero-g">
        <h1>Diretoria de eventos</h1>
    </div>

    <div class="container">
        <div class="container painelbase">
            <div class="jumbotron">
                <div class="gestao">
                    <h3>Gestão 2022/2023
                        <hr>
                    </h3>
                    <div class="row">
                        <div class="col-12">
                            <img class="membroGestao" src="../public/assets/img/diretoria/2022-2023/diretoria-eventos.jpg" alt="Diretor de eventos">
                            <h3>Diretor de eventos</h3>
                            <h4>Matheus de Souza Aguiar Diniz Paiva</h4>
                            <h5>Ingressante de 2021</h5>
                        </div>
                    </div>

                </div>
                <hr>
                <p>A Diretoria tem como função organizar eventos de cunho festivo e acadêmico,
tais como: churrasco de integração, festas no geral, campeonatos de jogos
eletrônicos, campeonatos esportivos, palestras, visitas técnicas, Integra UNIFEI,
dentre outros.
É dever do diretor de eventos coordenar todos os envolvidos na realização de
tais eventos e prestar contas referente aos seus gastos junto ao tesoureiro.</p>
            </div>
        </div>

    </div>
    <?php
      include "application/views/templates/footer.php";

    ?>


    <script type="text/javascript" src="../public/assets/js/bootstrap/vs3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/includes/js/teste.js"></script>
</body>

</html>


