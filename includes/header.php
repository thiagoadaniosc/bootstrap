<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/3875140896.js"></script>
	<script type="text/javascript" src="<?php DOCUMENT_URL ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php DOCUMENT_URL ?>assets/js/default.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php DOCUMENT_URL ?>assets/css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="<?php DOCUMENT_URL ?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php DOCUMENT_URL ?>assets/css/default.css">

	<script>
	</script>
	<style>

	</style>
	
	<title>Página Inicial</title>
</head>
<body>

	<!-- header Init -->
	<div id="wrapper" class="container">
		<div id="button-scroll-top"  class="animated hidden">
			<a href="#">
				<i class="fa fa-arrow-up" aria-hidden="true"></i>
			</a>
		</div>
		<header id="header" class="jumbotron" style="">
			<div class="container">
				<img id="img-logo-primary" src="assets/images/sao-jose-logo.png" class="img-responsive hidden-xs" width="300px">
				<img id="img-logo-secundary" src="assets/images/sao-jose-footer.png" class="img-responsive visible-xs">
				<button id="menu-button" class="visible-xs col-xs-2 btn btn-primary navbar-toggle" data-toggle="collapse" data-target="#nav-menu-default">
					<span class="fa fa-bars"></span>
				</button>
				<form class="navbar-form navbar-right col-xs-12">
					<input type="text" name="busca" class="form-control form-group col-xs-8" placeholder="Pesquisar..."  >

					<button type="submit" value="Buscar" class="btn btn-primary form-group form-control"><span class="fa fa-search"></span></button>

				</form>
			</div>
		</header>
		<!-- Menu Default -->
		<div id="nav-bar">
			<nav id="nav-menu-default" class="navbar navbar-inverse collapse navbar-collapse col-lg-12 col-md-12 col-sm-12 col-xl-12 col-xs-12">
				<div class="container">
					<ul id="navbar-nav-default" class="navbar-nav nav">

						<li><a href="" class="nav-item">Institucional</a></li>
						<li><a href="" class="nav-item">Vereadores</a></li>
						<li><a href="" class="nav-item">Atividade legislativa</a></li>
						<li><a href="" class="nav-item">Legislação</a></li>
						<li><a href="" class="nav-item">Serviçoes</a></li>
						<li><a href="" class="nav-item">Transparencia</a></li>
						<li><a href="" class="nav-item">Contato</a></li>

					</ul>	
				</div>

			</nav>
			<!-- End Menu Deafult -->
			<!-- Menu Fixed -->
			<nav id="nav-menu-fixed" class="navbar navbar-inverse col-xs-12 nav-fixed-hide">
				<div class="container">
					<a href="#"><img id="nav-img" src="assets/images/sao-jose-logo.png" class="col-lg-2 col-md-2 col-sm-1 visible-lg visible-md" alt="Logo"  ></a>
					<ul id="navbar-nav-fixed" class="navbar-nav nav navbar-right col-lg-10 col-md-10"">

						<li><a href="" class="nav-item nav-item-fixed">Institucional</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Vereadores</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Atividade legislativa</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Legislação</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Serviçoes</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Transparencia</a></li>
						<li><a href="" class="nav-item nav-item-fixed">Contato</a></li>

					</ul>	
				</div>

			</nav>
		</div>
		<!-- End Menu Fixed -->

		<!-- Header End -->

<div id="body-wrapper" class="container">