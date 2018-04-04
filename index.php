<?php
  $login_cookie = $_COOKIE['email'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      //echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.php'>Faça Login</a> Para ler o conteúdo";
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Metadados -->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA</title>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheets/main.css" type="text/css"/>
	</head>
	<body>
		<div class="nav-menu">
				<ul class="">
					<li><a href="consultaAluno.php">Cadastro de Alunos</a></li>
					<li><a href="#">Cadastro de Trabalhos Acadêmicos</a></li>
					<li><a href="login.php"></a></li>
				</ul>
		</div>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button class="menu-anchor">
							 <span></span>
							 <span></span>
							 <span></span>
					  </button>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="consultaAluno.php">Cadastro de Alunos</a></li>
							<li><a href="#">Cadastro de Trabalhos Acadêmicos</a></li>
							<li><a href="login.php"></a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<div class="clearfix"></div>
		</header>
		<main>
			<section class="part destaque">
				<div class="overlay">
				</div>
				<div class="container">
					<h1>SISGBA</h1>
					<h3>Sistema Gerenciador de Bancas Acadêmicas Web</h3>
				</div>
			</section>
			<section class="part sobre">
				<div class="container">
					<div class="col-sm-8">
						<h2>GERENCIANDO SEUS TRABALHOS ACADÊMICOS</h2>
						<p>  </p>
					</div>
					<div class="col-sm-4">
						<img src="img/chapeuFormatura.png" alt="" class="img-responsive"/>
					</div>
				</div>
			</section>
			<section class="part cadastro">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 text-right feirante">
							<div class="box">
								<h3>Aluno</h3>
								<p>
                                </p>
									<a href="consultaAluno.php" target="_blank" class="btn btn-primary">Cadastro de Alunos</a>
							</div>
						</div>
						<div class="col-sm-6 interessado">
							<div class="box">
								<h3>Trabalhos</h3>
								<p>
                                </p>
									<a href="#" target="_blank" class="btn btn-primary">Cadastro de Trabalhos Acadêmicos</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer>
				<div class="container text-center">
					<hr>
					<b>SISGBA</b> | &copy Todos os direitos reservados
				</div>
			</footer>
		</main>
	<!--SCRIPTS-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
