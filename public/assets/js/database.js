
const btn_pesquisaPadrao = document.getElementById("btn_pesquisaPadrao");
const btn_pesquisaAvancada = document.getElementById("btn_pesquisaPadrao")
const rd_pesquisaPadrao = document.getElementById("rd_pesquisaPadrao");
const rd_pesquisaAvancada = document.getElementById("rd_pesquisaAvancada");
const sa_pesquisaPadrao = document.getElementById("sa_pesquisaPadrao");
const sa_pesquisaAvancada= document.getElementById("sa_pesquisaAvancada");

function test(){
    alert("AAAAAAAAAAAAAAAAAAAAAAAAAABA")
}

document.getElementById("rd_pesquisaAvancada").addEventListener('change', (event) => {
    console.log('aaaaa')

    if (rd_pesquisaAvancada.checked == 'checked'){
        sa_pesquisaPadrao.style.visibility = "hidden";
        sa_pesquisaAvancada.style.visibility = "visible";
    }
});

rd_pesquisaPadrao.addEventListener('change', (event) => {
    if (rd_pesquisaPadrao.checked == 'checked'){
        sa_pesquisaAvancada.style.visibility = "hidden";
        sa_pesquisaPadrao.style.visibility = "visible";
    }
});


function pesquisaAvancada_blocos(tipo, tema, titulo, autor, materia, professor, blc) {
    //alert("tipo = "+tipo+"/ tema = "+tema+"/ titulo = "+titulo+"/ autor = "+autor+"/ materia = "+materia+"/ professor = "+professor);
    var dados;
    var codigo = '002';
    // var msg = <? php echo $msg; ?>;
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/includes/js/ajax/api_Database2.php',
        data: {
            'tipo': tipo,
            'tema': tema,
            'titulo': titulo,
            'autor': autor,
            'materia': materia,
            'professor': professor,
            'codigo': codigo,
            'msg': msg
        },
        beforeSend: function () {

        },
        success: function (data) {

            dados = data;

        },
        complete: function () {

            //Limpa a tabela
            $('#' + blc).empty();

            $("#msg").empty();
            $("#msg").show(500);
            //Resultado da busca
            $("#msg").append('<p>Itens encontrados: <b>' + dados.length + '</b></p>');

            //Carrega blocos
            for (var i = 0; dados.length > i; i++) {
                $('#' + blc).append('<div class="panel panel-default"><div class="panel-heading" role="tab" id="heading' + dados[i].id + '"><h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + dados[i].id + '" aria-expanded="false" aria-controls="collapse' + dados[i].id + '">' + dados[i].disciplina + ': ' + dados[i].titulo + '</a></h4></div><div id="collapse' + dados[i].id + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' + dados[i].id + '"><div class="panel-body"><div class="row"><div class="col-md-3"><p><b>ID:</b> ' + dados[i].id + '</p></div><div class="col-md-3"><p><b>Tipo:</b> ' + dados[i].tipo + '</p></div><div class="col-md-3"><p><b>Tema:</b> ' + dados[i].tema + '</p></div></div><div class="row"><div class="col-md-3"><p><b>Disciplina:</b> ' + dados[i].disciplina + '</p></div><div class="col-md-3"><p><b>Professor:</b> ' + dados[i].apelidoProfessor + '</p></div><div class="col-md-3"><p><b>Autor:</b> ' + dados[i].autor + '</p></div></div><div class="row"><div class="col-md-3"><p><b>Postado por:</b> ' + dados[i].postadoPor + '</p></div><div class="col-md-3"><p><a class="btn" href= "https://caelt.unifei.edu.br/uploads/' + dados[i].endereco + ' " target = \"_blank\" id = \"btn_ver\"><span class=\"glyphicon glyphicon-arrow-down\"></span></a></p></div></div><div class="row"><div class="col-md-12"><p><b>Observações: </b>' + dados[i].obs + '</p></div></div></div></div></div>');
            }

        }
    });
}

function pesquisaAvancada_tabela(tipo, tema, titulo, autor, materia, professor, tbl) {
    var dados;
    var codigo = '002';
    // var msg = <? php echo $msg; ?>;
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/includes/js/ajax/api_Database2.php',
        data: {
            'tipo': tipo,
            'tema': tema,
            'titulo': titulo,
            'autor': autor,
            'materia': materia,
            'professor': professor,
            'codigo': codigo,
            'msg': msg
        },
        beforeSend: function () {

        },
        success: function (data) {

            dados = data;

        },
        complete: function () {

            //Limpa a tabela
            $('#' + tbl).empty();

            $("#msg").empty();
            $("#msg").show(500);
            //Resultado da busca
            $("#msg").append('<p>Itens encontrados: <b>' + dados.length + '</b></p>');

            //Carrega a tabela
            for (var i = 0; dados.length > i; i++) {
                console.log(dados[i]);
                $('#' + tbl).append(
                    '<tr id = \"tbl_pesquisa_linha\"><td data-id= "' + dados[i].id + '">' +
                    dados[i].disciplina + '</td><td>' +
                    dados[i].tema + '</td><td>' +
                    dados[i].titulo + '</td><td>' +
                    dados[i].nomeProfessor + '</td><td>' +
                    dados[i].autor + '</td><td>' +
                    '<a class="btn" href= "https://caelt.unifei.edu.br/uploads/' + dados[i].endereco +
                    ' " target = \"_blank\" id = \"btn_ver\"><span class=\"glyphicon glyphicon-arrow-down\"></span></a>' +
                    '</td></tr>');
            }

        }
    });
}

function select(campo, codigo) {
    // var msg = <? php echo $msg; ?>;
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/includes/js/ajax/api_Database2.php',
        data: {
            'codigo': codigo,
            'msg': msg
        },
        success: function (dados) {

            if (dados.length > 0) {
                var option = '<option value="">Selecione uma opção</option>';
                $.each(dados, function (i, obj) {
                    option += '<option value="' + obj.id + '">' + obj.value + '</option>'
                })
            }
            $("#" + campo).html(option).show();
        }
    });
}


//Carrega os tipos de materiais
select("tipo_selecionado", "004");
//Carrega os temas de materiais
select("tema_selecionado", "005");
//Carrega as matérias cadastradas
select("materia_selecionada", "003");
//Carrega os nomes (apelidos) dos professores cadastrados
select("professor_selecionado", "006");



function pesquisaAvancada(e) {
    e.preventDefault();

    //Pega o valor dos filtros
    var tipo = $("#tipo_selecionado").val();
    var tema = $("#tema_selecionado").val();
    var titulo = $("#titulo_selecionado").val();
    var autor = $("#autor_selecionado").val();
    var materia = $("#materia_selecionada").val();
    var professor = $("#professor_selecionado").val();

    if ($("#rd_pesquisaTabela").is(':checked')) {

        //Limpa os blocos
        $("#accordion").empty();

        //Limpa a tabela e a torna visível
        $("#tbl_resultado").empty();
        $("#bl_tabela").show(500);

        //Invoca função que realiza a pesquisa
        pesquisaAvancada_tabela(tipo, tema, titulo, autor, materia, professor, "tbl_resultado");

    } else {

        //Limpa a tabela e a torna invisível caso visível
        $("#tbl_resultado").empty();
        $("#bl_tabela").hide(500);

        //Limpa os blocos
        $("#accordion").empty();

        //Pega o valor dos filtros
        var tipo = $("#tipo_selecionado").val();
        var tema = $("#tema_selecionado").val();
        var titulo = $("#titulo_selecionado").val();
        var autor = $("#autor_selecionado").val();
        var materia = $("#materia_selecionada").val();
        var professor = $("#professor_selecionado").val();

        //Invoca função que realiza a pesquisa
        pesquisaAvancada_blocos(tipo, tema, titulo, autor, materia, professor, "accordion");
    }

};


