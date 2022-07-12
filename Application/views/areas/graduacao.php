<?php
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/dataBase/config.php";
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/sessoes/verifica_sessao.php";
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Graduação</title>
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
        <h1>Diretoria de graduação</h1>
    </div>

    <div class="container">
        <div class="container painelbase">
            <div class="jumbotron">
                <div class="gestao">
                    <h3>Gestão 2022/2023
                        <hr>
                    </h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img class="membroGestao" src="../public/assets/img/diretoria/2022-2023/diretoria-graduacao.jpg" alt="Diretora de graduação">
                            <h3>Diretora de graduação</h3>
                            <h4>Isabelle Francine Guedes Romão</h4>
                            <h5>Ingressante de 2021</h5>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <img class="membroGestao" src="../public/assets/img/diretoria/2022-2023/adjunto-graduacao.jpg" alt="Diretor adjunto de Graduação">
                            <h3>Diretor adjunto de graduação</h3>
                            <h4>Pedro Andrade Gomes</h4>
                            <h5>Ingressante de 2022</h5>
                        </div>
                    </div>

                </div>
                <hr>
                <p>A Diretoria de Graduação trabalha pela qualidade e melhoria do curso,
                    elaborando propostas referentes ao ensino e revisando o Plano Pedagógico do
                    Curso e grade curricular. Além disso, tem como dever supervisionar o
                    cumprimento da Norma de Graduação por alunos e professores, auxiliar os
                    alunos com problemas e dificuldades relacionados ao curso, trabalhar junto aos
                    representantes de turma para melhor atender os alunos e garantir a assiduidade
                    e repasse de informações dos representantes discentes no Colegiado,
                    Assembleia do IESTI (Instituto de Engenharia de Sistemas e Tecnologia de
                    Informação) e Conselho Central do DCE UNIFEI.</p>
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