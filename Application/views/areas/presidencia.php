<?php
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/dataBase/config.php";
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/sessoes/verifica_sessao.php";
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Presidência</title>
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
        <h1>Presidência</h1>
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
                            <img class="membroGestao" src="../public/assets/img/diretoria/2022-2023/presidente.jpg" alt="Presidente">
                            <h3>Presidente</h3>
                            <h4>Valter Nilo Alcantara de Oliveira Junior</h4>
                            <h5>Ingressante de 2018</h5>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <img class="membroGestao" src="../public/assets/img/diretoria/2022-2023/vice-presidente.jpg" alt="Vice-presidente">
                            <h3>Vice-presidente</h3>
                            <h4>Byanca da Silva Guedes</h4>
                            <h5>Ingressante de 2021</h5>
                        </div>
                    </div>

                </div>
                <hr>
                <p>Cabe ao presidente e ao vice-presidente do CAELT a supervisão dos membros
                    das outras diretorias a fim de fazer se cumprir os prazos estabelecidos além de
                    manter e fomentar cada vez mais a busca pela eficiência e qualidade das tarefas
                    e eventos desenvolvidos pelo CAELT. A presidência também assume o papel de
                    ser a face do centro acadêmico, representando o CAELT em eventos que este se
                    fizer presente e manter contato com outros grupos estudantis e entidades de
                    base dentro e fora da UNIFEI.</p>
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