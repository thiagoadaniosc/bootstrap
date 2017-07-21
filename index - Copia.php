<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/3875140896.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	
	<title>Página Inicial</title>
	<style type="text/css">
		nav {
			border-radius: 0;
		}



		.jumbotron {
			background-color: #4785e8;
			margin: 0;
			border-radius: 0;

		}
		.navbar {
			border-radius: 0;
			background-color: #1e53a8;
			border: 0px;
			margin: 0;


		}

		.navbar-form {
			margin-right: 10px;
		}

		.form-control[name="busca"] {
			transition: 0.4s;
			width: 120px;
			border-radius: 0;
			color: #1755d1;
			font-size: 16px;
			font-style: italic;
			box-shadow: 0 0 0 0;
			border: 0 none;
			outline: 0;
			border-bottom: 2px solid white;
			background-color: #1e53a8;
			color: white;
			opacity: 0.6;
			
		}





		.form-control[name="busca"]:hover, .form-control[name="busca"]:focus {
			transition: 0.4s;
			width: 200px;
			opacity: 0.8;

			
		}

		.form-control[name="busca"]::-webkit-input-placeholder {
			color: white;
			opacity: 0.5;
		}

		button {
			border-radius: 0px !important;
			border: 0 !important;
			background-color: #1e53a8 !important;
			box-shadow: 0 0 0 0 !important;
			width: 50px !important;
		}


		
		.logo {
			
			background-color: #1e53a8;
			color: white;
			text-align: center;



		}

		.logo-brand:hover {
			transition: 0.4s;
			background-color:#05338e;
			color: white;

		}

		.logo-brand {
			color: white;
			position: relative;
			text-align: center;
			transition: 0.4s;
			background-color: #1e53a8;
			color: white;
			

		}



		.navbar-inverse .navbar-nav > li > a  {
			transition: 0.6s;
			color: white;
			padding-left: 50px;
			padding-right: 50px;
			font-size: 16px;
			text-align: center;
			height:50px;
			border-top: 3px solid #1e53a8;

		}

		.navbar-inverse .navbar-nav > li > a:hover {
			background-color: #154694;
			border-top: 3px solid black;
			height:50px;



		}


		@media (max-width: 940px) {
			.navbar-form {
				display: none;
			}
		}


		

	</style>
</head>
<body>
	
	<header class="jumbotron">
		<img src="assets/images/sao-jose-logo.png" class="img-responsive" width="300px" style="margin-left:30px ">
	</header>
	<nav class="navbar navbar-inverse col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
		<ul class="navbar-nav nav align-middle text-center justify-content-center" style="position: relative;">
			<li><a href="" class="nav-item">Home</a></li>
			<li><a href="" class="nav-item">Home</a></li>
			<li><a href="" class="nav-item">Home</a></li>
			<li><a href="" class="nav-item">Home</a></li>
		</ul>	

		<form class="navbar-form navbar-right col-lg-4 col-md-12 col-sm-12 col-xs-12">
			<input type="text" name="busca" class="form-control col-xs-12" placeholder="Pesquisar..." >

			<button type="submit" value="Buscar" class="btn btn-primary form-control"><span class="fa fa-search"></span></button>

		</form>
	</nav>
	<div class="container col-lg-2 col-md-4 col-sm-12 col-xs-12" style="background-color: black; padding: 0; margin: 0; height:100vh;">
		<nav class="nav nav-pills nav-stacked col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" padding: 0; margin: 0";>
			<li class=""><a href="">Home</a></li>
			<li class=""><a href="">Home</a></li>
			<li class="active"><a href="">Home</a></li>
		</nav>
	</div>

	<main style="background-color: white" class="container align-content-center col-lg-10 col-md-8 col-sm-12 col-xs-12">	
		<ol class="breadcrumb" style="background-color: transparent;">
			<li><a href="#">Início</a></li>
			<li><a href="#">Biblioteca</a></li>
			<li class="active">Dados</li>
		</ol>
		<div class="container align-content-center" style="width: 80px; height: 80px; background-color: black;"></div>
	</main>

</body>
</html>