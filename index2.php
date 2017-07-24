<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/3875140896.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/default.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/default.css">

	<script>
	</script>
	<style>

	</style>
	
	<title>Página Inicial</title>
</head>
<body>

	<!-- header Init -->
	<div id="wrapper" class="container">
	<div id="button-scroll-top"  class="animated hidden"  style="position: fixed; bottom: 0; right: 0; z-index: 99; text-align: center; margin-right: 20px; margin-bottom: 3vh; height: auto"><a href="#" style="padding: 3vh; background-color: rgba(0,0,0,0.5);">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
	</a></div>
		<header class="jumbotron" style="">
			<div class="container" style="padding: 0;">
				<img src="assets/images/sao-jose-logo.png" class="img-responsive hidden-xs" width="300px" style="margin-left:30px; margin-right: 0; display: inline;">
				<img src="assets/images/sao-jose-footer.png" class="img-responsive visible-xs" style="float: left;">
				<button id="menu-button" style="margin-top: 30px; float: right; height: 50px; width: 60px; outline: none;background-color: transparent; border: 2px solid white" class="visible-xs col-xs-2 btn btn-primary navbar-toggle" data-toggle="collapse" data-target="#nav-menu-default">
					<span class="fa fa-bars"></span>
				</button>
				<form class="navbar-form navbar-right col-xs-12" style="margin-right: 10px; margin-top: 30px;">
					<input type="text" name="busca" class="form-control form-group col-xs-8" placeholder="Pesquisar..."  >

					<button type="submit" value="Buscar" class="btn btn-primary form-group form-control"><span class="fa fa-search"></span></button>

				</form>
			</div>
		</header>
		<!-- Menu Default -->
		<nav id="nav-menu-default" class="navbar navbar-inverse collapse navbar-collapse col-lg-12 col-md-12 col-sm-12 col-xl-12 col-xs-12" style="margin:0; padding: 0; width: 100%;">
			<div class="container" style=" padding: 0;">
				<ul id="navbar-nav-default" class="navbar-nav nav" style=" padding: 0; margin-left: auto; margin-right: auto;">

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
		<nav id="nav-menu-fixed" class="navbar navbar-inverse col-xs-12 nav-fixed-hide" style="margin:0; padding: 0;">
			<div class="container">
				<a href="#"><img id="nav-img" src="assets/images/sao-jose-logo.png" class="col-lg-2 col-md-2 col-sm-1 visible-lg visible-md" alt="Logo"  ></a>
				<ul id="navbar-nav-fixed" class="navbar-nav nav navbar-right col-lg-10 col-md-10" style=" padding: 0; width: auto;">

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
		<!-- End Menu Fixed -->

		<!-- Header End -->

		<!-- Body Init -->
		<main style=" clear: both; padding: 0" class="container align-content-center">	
	<!-- <ol class="breadcrumb" style="background-color: transparent; padding-top: 50px;">
		Pagina: <li class="active">Inicial</li>
	</ol>
-->

<section id="noticias" class="container col-lg-9 col-sm-12 col-xs-12 col-md-12 col-xl-12" style="border: 2px solid #CCC">
	<h3> > Principais Noticias</h3>		



	<div id="carousel
" class="carousel slide" data-ride="carousel" style="padding: 0; margin: 0">

		<ol class="carousel-indicators">
			<li data-target="#carousel
" data-slide-to="0" class="active" 
			style="width: 20px; height: 3px; border-radius: 0; margin: 0; padding: 0;"></li>
			<li data-target="#carousel
" data-slide-to="1" 
			style="width: 20px; height: 3px; border-radius: 0;  margin: 0; padding: 0""></li>
			<li data-target="#carousel
" data-slide-to="2" 
			style="width: 20px; height: 3px; border-radius: 0;  margin: 0; padding: 0"></li>
		</ol>

		<div class="carousel-inner" role="listbox" >
			<div class="item active" style="max-height: 400px; padding: 0; margin: 0">
				<img class="d-block img-fluid" src="assets/images/ny-cr-1.jpg" alt="First slide">
				<div class="carousel-caption" style="width: 100%; position: absolute; left: 0; background-color:rgba(0, 0, 0, 0.8); margin: 0;">
					<h1>Hello</h1>
					<p>Ola Mundo</p>

				</div>

			</div>

			<div class="item" style="max-height: 400px; padding: 0; margin: 0">
				<img class="img-responsive" src="assets/images/ny-cr-1.jpg"  alt="First slide">
				<div class="carousel-caption" style="width: 100%; position: absolute; left: 0; background-color:rgba(0, 0, 0, 0.8); margin: 0;">
					<h1>Hello</h1>
					<p>Ola Mundo</p>

				</div>
			</div>

			<div class="item" style="max-height: 400px; padding: 0; margin: 0">
				<img class="d-block img-fluid" src="assets/images/ny-cr-1.jpg" alt="First slide">
				<div class="carousel-caption" style="width: 100%; position: absolute; left: 0; background-color:rgba(0, 0, 0, 0.8); margin: 0;">
					<h1>Hello</h1>
					<p>Ola Mundo</p>

				</div>
			</div>




		</div> 
		<a class="left carousel-control" href="#carousel
" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel
" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>





</section>

<nav class="navbar-nav nav col-lg-3 col-sm-12 col-xs-12"" style="border: 2px solid red; margin: 0">
	<img src="assets/images/camara-transparente.png" class="img-responsive">
</nav>

</main>


<!-- Body End -->
<!-- Footer Init -->
</div>
<footer class="footer">
	<section class="container" style="padding: 0;">
		<img src="assets/images/sao-jose-footer.png" class="img-responsive">
	</section>
</footer>

<!-- End Footer -->

</body>
</html>