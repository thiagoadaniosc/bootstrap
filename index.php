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
			background-color: #00488d;
			margin: 0;
			border-radius: 0 !important;

		}
		.navbar {
			border-radius: 0;
			background-color: #162d50;
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
			height: 34px !important; 
			border: 0px !important;
			padding: 0px
			margin: 0px;
		}


		


		.navbar-inverse .navbar-nav > li > a  {
			transition: 0.4s;
			color: white;
			padding-left: 50px;
			padding-right: 50px;
			font-size: 16px;
			text-align: center;
			height:50px;
			margin: 0;

		}

		.navbar-inverse .navbar-nav > li > a:hover {
			background-color: #00488d;

			height:50px;
			



		}


		@media (max-width: 700px) {
			.navbar-form {
				margin: auto;
				display: block;
				width: 100%;
			}
			.navbar-form {
				margin: auto;
				width: 100%;
				

			}

			button {
				width: 15% !important;
			}

			.form-control[type="text"],
			.form-control[type="text"]:hover, 
			.form-control[type="text"]:focus {
				transition: 0.4s;
				width: 85%;
				opacity: 0.8;
			}


		</style>
	</head>
	<body>


		<header class="jumbotron">
			<div class="container" style="padding: 0;">
				<img src="assets/images/sao-jose-logo.png" class="img-responsive " width="300px" style="margin-left:30px; margin-right: 0; display: inline;">
				<form class="navbar-form navbar-right" style="margin-right: 10px; margin-top: 30px;">
					<input type="text" name="busca" class="form-control form-group col-xs-8" placeholder="Pesquisar..."  >

					<button type="submit" value="Buscar" class="btn btn-primary form-group form-control"><span class="fa fa-search"></span></button>

				</form>
			</div>
		</header>
		<nav class="navbar navbar-inverse col-xs-12"" style="margin:0; padding: 0;">
			<div class="container" style=" padding: 0;">
				<ul class="navbar-nav nav container col-lg-12 col-xs-12" style="padding: 0; margin:0;">

					<li><a href="" class="nav-item">Home</a></li>
					<li><a href="" class="nav-item">Home</a></li>
					<li><a href="" class="nav-item">Home</a></li>
					<li><a href="" class="nav-item">Home</a></li>

				</ul>	
			</div>

		</nav>

		<main style=" clear: both; border: 2px solid black; padding: 0" class="container align-content-center">	
	<!-- <ol class="breadcrumb" style="background-color: transparent; padding-top: 50px;">
		Pagina: <li class="active">Inicial</li>
	</ol>
-->

<section id="noticias" class="container col-lg-9 col-sm-12 col-xs-12 col-md-12 col-xl-12" style="border: 2px solid #CCC">
	<h3> > Principais Noticias</h3>		



	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding: 0; margin: 0">

		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" 
			style="width: 20px; height: 3px; border-radius: 0; margin: 0; padding: 0;"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1" 
			style="width: 20px; height: 3px; border-radius: 0;  margin: 0; padding: 0""></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2" 
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
		<a class="left carousel-control" href="#carouselExampleIndicators" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carouselExampleIndicators" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>





</section>

<nav class="navbar-nav nav col-lg-3 col-sm-12 col-xs-12"" style="border: 2px solid red; margin: 0">
	<img src="assets/images/camara-transparente.png" class="img-responsive">
</nav>




</main>



<footer class="" style="background-color: #00488d; width: 100% ; height: auto; margin-top: 25px; padding: 20px">
	<section class="container" style="padding: 0;">
		<img src="assets/images/sao-jose-footer.png" class="img-responsive">
	</section>
</footer>

</body>
</html>