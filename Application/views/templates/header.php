<?php
//include $_SERVER['DOCUMENT_ROOT']."./includes/php/dataBase/config.php";
//include $_SERVER['DOCUMENT_ROOT']."/includes/php/sessoes/verifica_sessao.php";
if(isset($_SESSION['cpf'])){
  $username = $_SESSION['username'];
  $drop = '
  <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$nome.'<span class="caret"></span></a>
  <ul class="dropdown-menu">
  <li><a href="https://caelt.unifei.edu.br/painelcontrole/dados.php">
  Meus Dados
  <i class="fa fa-user-circle-o" style="margin-left:3px;"></i>

  </a></li>
  <li><a href="#">Meus Posts</a></li>
  <li><a href="#">Opções</a></li>
  <li role="separator" class="divider"></li>
  <li><a href="?go=sair">Sair</a></li>
  </ul>
  </li>';
	$texto = "Painel";
	$cad = false;
}else{
  $drop = null;
	$texto = "Login";
	$cad = true;
}
?>

<header>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top header">
    
      <div class="navbar-header">
        <button class="navbar-toggle collapsed menu" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars	" style="font-size:24px; color:#4d4949;"></i>
        </button>
        <div class="navbar-brand">
          <a class="logo" href="https://caelt.unifei.edu.br">
            <img src="https://caelt.unifei.edu.br/includes/img/logo_titulo.png" width="45" height="45" alt="caelt">  
            CAELT
          </a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav ml-auto" >
          <li class="nav-item">
            <a href="https://caelt.unifei.edu.br/database">Database</a>
          </li>
          <li class="nav-item"><a href="https://caelt.unifei.edu.br/sobre.php">Sobre</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="https://caelt.unifei.edu.br/areas/presidencia.php">Presidência</a></li>
              <li><a href="https://caelt.unifei.edu.br/areas/tesouraria.php">Tesouraria</a></li>
              <li><a href="https://caelt.unifei.edu.br/areas/graduacao.php">Graduação</a></li>
              <li><a href="https://caelt.unifei.edu.br/areas/extensao.php">Extensão</a></li>
              <li><a href="https://caelt.unifei.edu.br/areas/eventos.php">Eventos</a></li>
              <li><a href="https://caelt.unifei.edu.br/areas/ti.php">TI</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
		      <? if($cad) { ?> 
            <li class="nav-item">
              <a href="https://caelt.unifei.edu.br/cadastro/">
                <?php echo "Cadastrar"; ?>
              </a>
            </li> 
          <? } ?>
          <li class="nav-item">
            <a href="https://caelt.unifei.edu.br/painelcontrole/">
              <?php echo $texto; ?>
              <i class="fa fa-user-circle-o" style="margin-left:3px;"></i>
            </a>
          </li>
          <?php
          echo $drop;
          ?>
        </ul>
      </div>
  </nav>

</header>

