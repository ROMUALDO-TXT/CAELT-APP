<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Database</title>
    <link rel="icon" type="image/png" sizes="32x32" href="http://caelt.unifei.edu.br/includes/img/icon-caelt.png">
    <link rel="stylesheet" type="text/css" href="http://caelt.unifei.edu.br/includes/bootstrap/vs3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://caelt.unifei.edu.br/includes/bootstrap/vs4/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="http://caelt.unifei.edu.br/includes/bootstrap/vs4/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="http://caelt.unifei.edu.br/includes/css/header.css">
    <link rel="stylesheet" type="text/css" href="http://caelt.unifei.edu.br/includes/css/footer.css">
    <link rel="stylesheet" type="text/css" href="http://caelt.unifei.edu.br/includes/css/database.css">
    <script type="text/javascript" src="http://caelt.unifei.edu.br/includes/js/jquery-3.2.1.min.js"></script>
</head>


<body>

    <?php
    include "Application/views/templates/header.php";
    ?>


    <div class="hero">
        <h1>Database</h1>
    </div>

    <div class="container">

        <!--Opções de pesquisa-->
        <div class="seletorPesquisa btn-group" data-toggle="buttons" style="margin-bottom: 15px;">
            <label class="btn btn-default">
                <input type="radio" checked="checked" name="options" autocomplete="off" id="rd_pesquisaPadrao"><span class="fa fa-search"></span> Padrão
            </label>
            <label class="btn btn-default">
                <input type="radio" name="options" autocomplete="off" id="rd_pesquisaAvancada"><span class="fa fa-search-plus"></span> Avançada
            </label>

            <a class='btn btn-primary btn-large plus' href='https://drive.google.com/drive/folders/1DoBr2LVlkjjOu3__tr8LtQwJdDnJY3e-?usp=sharing' target="_blank"><i class='fa fa-plus'></i> Adicionar Material</a>

        </div>

        <div class="panel panel-default" id="bl_pesquisaAvancada" style="display: none;">

            <div class="panel-heading"><span class="fa fa-search-plus"></span> Pesquisa Avançada</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3" style="margin-bottom: 5px;">
                        <label for="tipo"><span class="glyphicon glyphicon-filter"></span> Tipo:</label>
                        <select name="tipo" id="tipo_selecionado" class="form-control"></SELECT>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 5px;">
                        <label for="tema"><span class="glyphicon glyphicon-filter"></span> Tema:</label>
                        <SELECT name="tema" id="tema_selecionado" class="form-control"></SELECT>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 5px;">
                        <label for="titulo"><span class="glyphicon glyphicon-filter"></span> Título:</label>
                        <input type="text" name="titulo" id="titulo_selecionado" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="margin-bottom: 5px;">
                        <label for="autor"><span class="glyphicon glyphicon-filter"></span> Autor:</label>
                        <input type="text" name="autor" id="autor_selecionado" placeholder="Digite um nome..." class="form-control">
                    </div>
                    <div class="col-md-3" style="margin-bottom: 5px;">
                        <label for="materia"><span class="glyphicon glyphicon-filter"></span> Matéria:</label>
                        <SELECT name="materia" id="materia_selecionada" class="form-control"></SELECT>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 5px;">
                        <label for="professor"><span class="glyphicon glyphicon-filter"></span> Professor:</label>
                        <SELECT name="professor" id="professor_selecionado" class="form-control"></SELECT>
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-5">
                        <button id="btn_pesquisar" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off"><i class="icon-search icon-white"></i> Pesquisar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default" id="bl_pesquisaPadrao">
            <div class="panel-heading"><span class="fa fa-search"></span> Pesquisa Padrão</div>
            <div class="panel-body">
                <form action="../../CAELT-APP/database/index" method="GET">
                    <input type="text" name="search_method" value="normal" disabled hidden />
                    <input type="text" name="search_value" class="form-control input-lg" placeholder="Pesquise por disciplina, docente, título, autor..." id="input_pesquisaPadrao">
                    <input type="submit" name="search" id="btn_pesquisaPadrao" data-loading-text="Loading..." class="btn btn-primary" value="Pesquisar" />
                </form>
            </div>
        </div>
        <div class="alert alert-success" id="msg" style="display: none;"></div>

        <!--Opções de apresentação da pesquisa-->
        <?php
        if (isset($data)) {
            echo '<div class="btn-group" data-toggle="buttons" style="margin-bottom: 15px;">
            <label class="btn btn-default active">
                <input type="radio" name="options" id="rd_displayBloco" autocomplete="off"> Blocos
                <span class="fa fa-th-large"></span>
            </label>
            <label class="btn btn-default">
                <input type="radio" name="options" id="rd_displayTabela" autocomplete="off"> Tabela
                <span class="fa fa-table"></span>

            </label>
        </div>';
        }
        ?>

        <div class="panel-group" id="blocos" role="tablist" aria-multiselectable="true">
            <?php
            foreach ($data as $material) {
                echo '<div class="panel panel-default">';
                echo '<div class="panel-heading" role="tab" id="heading'.$material->id.'">';
                echo '<h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$material->id.'" aria-expanded="false" aria-controls="collapse'.$material->id.'">';
                echo $material->subject .' - '. $material->name;
                echo '</a></h4></div><div id="collapse'.$material->id.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$material->id.'">';
                echo '<div class="panel-body"><div class="row"><div class="col-md-3"><p><b>ID:</b> '.$material->id.'</p></div>';
                echo '<div class="col-md-3"><p><b>Tipo:</b> '.$material->type.'</p></div>';
                echo '<div class="col-md-3"><p><b>Tema:</b> '.$material->theme.'</p></div></div>';
                echo '<div class="row"><div class="col-md-3"><p><b>Disciplina:</b> '.$material->subject.'</p></div>';
                echo '<div class="col-md-3"><p><b>Professor:</b> '.$material->teacher.'</p></div>';
                echo '<div class="col-md-3"><p><b>Autor:</b> '.$material->author.'</p></div>';
                echo '</div><div class="row"><div class="col-md-3"><p><b>Postado por:</b></p></div>';
                echo '<div class="col-md-3"><p><a class="btn" href= "https://caelt.unifei.edu.br/uploads/'.$material->link.' " target = "blank">'; 
                echo '<span class="fa fa-arrow-down"></span></a></p></div></div>';
                echo '<div class="row"><div class="col-md-12"><p><b>Observações: </b></p></div></div></div>';
                echo '</div></div>';
            }
            ?>
        </div>
        <div id="tabela" style="display: none;">
            <table class="table" id="db_table">
                <thead>
                    <tr>
                        <th class="col-3">Disciplina</th>
                        <th class="col-2">Tema</th>
                        <th class="col-2">Título</th>
                        <th class="col-2">Docente</th>
                        <th class="col-2">Autor</th>
                        <th class="col-1"></th>
                    </tr>
                </thead>
                <tbody id="tbl_resultado">
                    <?php foreach($data as $material){?>
                        <tr data-id=<?php echo $material->id; ?>>
                            <td><?php echo $material->subject; ?></td>
                            <td><?php echo $material->theme; ?></td>
                            <td><?php echo $material->name; ?></td>
                            <td><?php echo $material->teacher; ?></td>
                            <td><?php echo $material->author; ?></td>
                            <td>
                                <a class="btn" href="http://https://caelt.unifei.edu.br/uploads/' <?php echo $material->link; ?>" target="blank">
                                    <span class="fa fa-arrow-down"></span>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    

    </div>
    <?php
    include "Application/views/templates/footer.php"
    ?>

    <script type="text/javascript" src="http://caelt.unifei.edu.br/includes/bootstrap/vs3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- <script type="text/javascript" src="http://caelt.unifei.edu.br/includes/database.js"></script> -->
    <script>
        $(document).ready(function() {

            $("#db_table").DataTable({
                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por pagina",
                    "search": "Pesquisar",
                    "processing": "Processando",
                    "zeroRecords": "Não foram encontrados registros",
                    "info": "Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "Sem registros disponíveis",
                    "infoFiltered": "(filtrado dos _MAX_ registros totais)",
                    "paginate": {
                        "first": "Primeira",
                        "previous": "Anterior",
                        "next": "Próxima",
                        "last": "Última"
                    },
                }
            });
            $("#blocos").hide();
            $("#tabela").hide();

            $("#rd_pesquisaAvancada").change(function() {
                if ($(this).is(':checked')) {
                    $("#bl_pesquisaPadrao").hide(500);
                    $("#bl_pesquisaAvancada").show(500);
                }
            });

            $("#rd_pesquisaPadrao").change(function() {
                if ($(this).is(':checked')) {
                    $("#bl_pesquisaAvancada").hide(500);
                    $("#bl_pesquisaPadrao").show(500);
                }
            });
            $("#rd_displayBloco").change(function() {
                if ($(this).is(':checked')) {
                    $("#tabela").hide(500);
                    $("#blocos").show(500);
                }
            });

            $("#rd_displayTabela").change(function() {
                if ($(this).is(':checked')) {
                    $("#blocos").hide(500);
                    $("#tabela").show(500);
                }
            });
        })
    </script>
</body>

</html>