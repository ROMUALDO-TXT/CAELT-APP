<?php
error_reporting(0);
?>
<?php
//include "../includes/php/dataBase/config.php";
//include "../includes/php/sessoes/verifica_sessao.php";
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>CAELT</title>
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap/vs3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap/vs4/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap/vs4/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/footer.css">
    <script type="text/javascript" src="public/assets/js/jquery-3.2.1.min.js"></script>
</head>


<body>
    <?php
    include "Application/views/templates/header.php";
    //include "../includes/php/sessoes/carrega_painel.php";
    ?>

    <div class="hero">
        <div class="container">

            <img src="public/assets/img/logo_caelt3.png" class="img-responsive home-logo" alt="Logo CAELT">
            <div class="social-hero">
                <a class="social-hero-icon" href="https://www.instagram.com/caelt_unifei/">
                    <i class="fa fa-instagram instagram"></i>
                </a>
                <a class="social-hero-icon" href="facebook.com/caelt.unifei">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="social-hero-icon" href="https://www.linkedin.com/company/caelt-unifei/">
                    <i class="fa fa-linkedin-square"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container painelbase">
        <div class="jumbotron painelEletronica">
            <img src="public/assets/img/iesti.jpg" alt="laboratorio eletronica">
            <div class="eletronica">
                <h3> Universidade Federal de Itajub??
                    <hr>
                </h3>
                <h1>Engenharia eletr??nica</h1>
                <p>O Engenheiro eletr??nico ?? o profissional capacitado a atuar nas diversas ??reas que comp??em o campo da Engenharia Eletr??nica: sistemas eletroeletr??nicos, equipamentos de prote????o e seguran??a, eletr??nica (circuitos integrados, processamento de voz, imagem e som), eletr??nica industrial, engenharia biom??dica, rob??tica, inform??tica, telecomunica????es e sistemas embarcados.</p>
                <a class="btn btn-primary btn-lg" href="https://sigaa.unifei.edu.br/sigaa/public/curso/portal.jsf?id=43969923&lc=pt_BR" role="button">Mais Informa????es</a>
            </div>
        </div>
    </div>

    <div class="container painelbase">
        <div class="jumbotron database">
            <h1>Database CAELT</h1>
            <p>Acesse nosso <b>ambiente unificado de compartilhamento de arquivos</b> e encontre centenas de materiais referente as mat??rias da Grade de Eletr??nica, como notas de aula, resumos, exerc??cios e provas resolvidos e muito mais!</p>
            <p><a class="btn btn-primary btn-lg" href="https://caelt.unifei.edu.br/database" role="button">Acesse</a></p>
        </div>
    </div>

    <!--
    <div class="container painelFAQ">

        <div class="row">
            <div class="col-md-3 faqLogo">
                <i class="fa fa-question-circle-o" style="font-size:60px;"></i>
                <h2>FAQ</h2>
            </div>
            <div class="col-md-9 faqForm">
                <form>
                    <legend style="font-size:large; padding-bottom:10px; font-weight:500;">Tem alguma d??vida? pergunte ao CAELT!</legend>
                    <div class="row form-row">
                        <div class="form-group col-6">
                            <label>Nome</label>
                            <input class="form-control" type="text" id="cp_nome">
                        </div>
                        <div class="form-group col-6">
                            <label>E-mail</label>
                            <input class="form-control" type="email" id="cp_email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Pergunta*</label>
                            <textarea class="form-control" rows="3" id="cp_pergunta"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <button class="btn btn-primary" id="btn_enviarPergunta">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
-->
    <!--
        <div class="jumbotron">
            <h1>FAQ</h1>
            <p>Est?? com alguma d??vida sobre o curso? ent??o acesse a p&aacute;gina de <b>perguntas frequentes do CAELT</b> (FAQ) e encontre resposta para as perguntas que os alunos mais tem d??vidas. Al??m disso, voc?? pode deixar sua pergunta para respondermos!</p>
            <p><a class="btn btn-primary btn-lg" href="https://caelt.unifei.edu.br/faq" role="button">Acesse</a></p>
        </div>
-->



    <?php
    include "Application/views/templates/footer.php"
    ?>
    <script type="text/javascript" src="public/assets/css/bootstrap/vs3/js/bootstrap.min.js"></script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>