<?php
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/dataBase/config.php";
// include $_SERVER['DOCUMENT_ROOT']."/includes/php/sessoes/verifica_sessao.php";
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Tesouraria</title>
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
        <h1>Tesouraria</h1>
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
                            <img class="membroGestao" src="../public/assets/img/diretoria/2022-2023/diretoria-financeiro.jpg" alt="Diretor do financeiro">
                            <h3>Diretor financeiro</h3>
                            <h4>Felipe Lapena Barreto</h4>
                            <h5>Ingressante de 2020</h5>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <img class="membroGestao" src="../public/assets/img/diretoria/2022-2023/adjunto-financeiro.jpg" alt="Diretor adjunto do financeiro">
                            <h3>Diretor adjunto do financeiro</h3>
                            <h4>Álvaro Alvarenga Louro</h4>
                            <h5>Ingressante de 2021</h5>
                        </div>
                    </div>

                </div>
                <hr>
                <p>Cabe ao Tesoureiro controlar toda a movimentação financeira do Centro
                    Acadêmico, efetuando pagamentos e realizando recebimento de verbas, sejam
                    estas: doações, contribuições, vendas e tudo mais que envolva fluxo de caixa.
                    Além disso a diretoria financeira também é responsável pela cotação de
                    produtos e busca de parcerias.
                    O Tesoureiro também deve planejar novas políticas de gestão financeira do
                    CAELT, buscando formas alternativas e eficientes de captação de recursos para
                    independência e autonomia do Centro Acadêmico.</p>
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