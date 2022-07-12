<?php
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/dataBase/config.php";
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/sessoes/verifica_sessao.php";
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>TI</title>
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

    <div class="hero">
        <h1>Diretoria de TI</h1>
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
                            <img class="membroGestao" src="../public/assets/img/diretoria/2022-2023/diretoria-ti.jpg" alt="diretor de TI">
                            <h3>Diretor de TI</h3>
                            <h4>Lucas Romualdo Lemos</h4>
                            <h5>Ingressante de 2021</h5>
                        </div>
                    </div>

                </div>
                <hr>
                <p>Cabe à diretoria de TI trabalhar na implantação e melhoria do website do
                    CAELT, permitindo que os alunos tenham acesso a um ambiente unificado de
                    compartilhamento de arquivos e informações sobre o curso, além de realizar a
                    manutenção do servidor, banco de dados e arquivos necessários para o seu funcionamento.</p>
            </div>
        </div>

    </div>
    <?php
    include "Application/views/templates/footer.php"
    ?>



    <script type="text/javascript" src="../public/assets/js/bootstrap/vs3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/includes/js/teste.js"></script>
</body>

</html>