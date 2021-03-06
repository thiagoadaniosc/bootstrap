<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<base href="<?= DOCUMENT_URL ?>" />
	<meta name="viewport" content="width=device-width">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!--<script src="https://use.fontawesome.com/3875140896.js"></script>-->
	<script type="text/javascript" src="<?= DOCUMENT_URL ?>assets/js/uikit.js"></script>
	<script type="text/javascript" src="<?= DOCUMENT_URL ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= DOCUMENT_URL ?>assets/js/default.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= DOCUMENT_URL ?>assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?= DOCUMENT_URL ?>assets/css/uikit.css">
	<link rel="stylesheet" type="text/css" href="<?= DOCUMENT_URL ?>assets/css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="<?= DOCUMENT_URL ?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= DOCUMENT_URL ?>assets/css/default.css">
	
	<title>Página Inicial</title>
</head>
<body>

	<!-- header Init -->
	<div id="wrapper" class="container">
		<div id="button-scroll-top"  class="animated hidden" onclick="goToTop()">
			<a>
				<i class="fa fa-arrow-up" aria-hidden="true"></i>
			</a>
		</div>
		<header id="header" class="jumbotron" style="">
			<div class="container">
				<a href=" "><img id="img-logo-primary" src="assets/images/sao-jose-logo.png" class="img-responsive col-xs-7 col-xl-7"></a>
				<button id="menu-button" class="visible-xs btn btn-primary navbar-toggle col-sm-5 col-xs-5 col-xl-5" data-toggle="collapse" data-target="#nav-menu-default">
					<span class="fa fa-bars"></span>
				</button>
				<form class="navbar-form navbar-right col-xs-12" action="pesquisar">
					<input type="text" name="busca" class="form-control form-group col-xs-8" placeholder="Pesquisar..."  >

					<button type="submit" value="Buscar" class="btn btn-primary form-group form-control"><span class="fa fa-search"></span></button>

				</form>
			</div>
		</header>
		<!-- Menu Default -->
		<div id="nav-bar">
			<nav id="nav-menu-default" class="navbar navbar-inverse collapse navbar-collapse col-lg-12 col-md-12 col-sm-12 col-xl-12 col-xs-12">
				<div class="container">
					<ul id="navbar-nav-default" class="navbar-nav nav col-lg-12">

						<li><a class="dropdown-toggle nav-item" data-toggle="collapse" data-target="#sub-menu">Institucional 
							<i class="fa fa-caret-down fa-fw" aria-hidden="true"></i></a>
							<ul id="sub-menu" class="collapse">
								<li><a href="">Histórias</a></li>
								<li><a href="">Históriasdsadasasdads</a></li>
								<li><a href="">Histórias deassadsadasd</a></li>
								<li><a href="">Históriasasdsadsaddasdsasadsads</a></li>
							</ul>
						</li>
						<li><a href="" class="nav-item">Vereadores</a></li>
						<li><a href="" class="nav-item">Atividade legislativa</a></li>
						<li><a href="" class="nav-item">Legislação</a></li>
						<li><a href="" class="nav-item">Serviços</a></li>
						<li><a href="" class="nav-item">Transparencia</a></li>
						<li><a href="contato" class="nav-item">Contato</a></li>

					</ul>	
				</div>

			</nav>

			<!-- End Menu Deafult -->
			<!-- Menu Fixed -->
			<nav id="nav-menu-fixed" class="navbar navbar-inverse col-xs-12 nav-fixed-hide">
				<div class="container">
					<a href="#"><img id="nav-img" src="assets/images/sao-jose-logo-md.png" class="col-lg-2 col-md-2 col-sm-1 visible-lg visible-md" alt="Logo"  ></a>
					<ul id="navbar-nav-fixed" class="navbar-nav nav navbar-right col-lg-10 col-md-10"">
						
						<li><a class="dropdown-toggle nav-item" data-toggle="collapse" data-target="#sub-menu-fixed">Institucional 
							<i class="fa fa-caret-down fa-fw" aria-hidden="true"></i></a>
							<ul id="sub-menu-fixed" class="collapse">
								<li><a href="">Histórias</a></li>
								<li><a href="">Históriasdsadasasdads</a></li>
								<li><a href="">Histórias deassadsadasd</a></li>
								<li><a href="">Históriasasdsadsaddasdsasadsads</a></li>
							</ul>
						</li>
						<li><a href="" class="nav-item nav-item-fixed">Vereadores</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Atividade legislativa</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Legislação</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Serviços</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Transparencia</a></li>
						<li><a href="contato" class="nav-item nav-item-fixed">Contato</a></li>
					</ul>	
				</div>

			</nav>
		</div>
		<!-- End Menu Fixed -->

		<!-- Header End -->

		<div id="body-wrapper" class="container">