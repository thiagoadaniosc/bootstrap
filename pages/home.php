<link rel="stylesheet" type="text/css" href="<?= DOCUMENT_URL?>assets/css/home.css">
<!-- Body Init -->
<main id="content-body" class="container">	

	<!-- <ol class="breadcrumb" style="background-color: transparent; padding-top: 50px;">
		Pagina: <li class="active">Inicial</li>
	</ol>
-->
<!-- Carrousel Begin -->
<section id="noticias-content" class="container col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-12 col-xl-12">
	
	<div id="carousel-noticias" class="carousel slide thumbnail" data-ride="carousel">

		<h1 id="carousel-title"> 	 
			PRINCIPAIS NOTICIAS
		</h1>	
		<span id="carousel-title-border"></span>

		<ol class="carousel-indicators">
			<li data-target="#carousel-noticias" data-slide-to="0" class="active" ></li>
			<li data-target="#carousel-noticias" data-slide-to="1"></li>
			<li data-target="#carousel-noticias" data-slide-to="2"></li>
		</ol>
		<!-- Init Carousel Itens Content-->
		<div class="carousel-inner" role="listbox" >
			<!-- Init Carrousel Itens -->
			<div class="item active">
				
				<img class="img-responsive" src="assets/images/1032_big.jpg" alt="First slide">
				<div class="carousel-caption">
					<h1><a href="">Primeiro semestre do Legislativo resultou em 128 projetos</a></h1>
					

				</div>

			</div>

			<div class="item">
				<img class="img-responsive" src="assets/images/1030_big.jpg" alt="First slide">
				<div class="carousel-caption">
					<h1><a href="">Primeiro semestre do Legislativo resultou em 128 projetos</a></h1>
					

				</div>
			</div>

			<div class="item">
				<img class="img-responsive" src="assets/images/1030_big.jpg" alt="First slide">
				<div class="carousel-caption">
					<h1><a href="">Primeiro semestre do Legislativo resultou em 128 projetos</a></h1>


				</div>
			</div>
			<!-- End Carousel Item -->
		</div> 
		
		<!-- End Carousel contend -->
		<!-- INIT Carousel Arrows-->
		<a class="left carousel-control" href="#carousel-noticias" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-noticias" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>

		

		<!-- End Carousel --> 
	</div>

	<section id="last-news">
		<div id="last-news-title" class="col-lg-12">

			<h3 class="col-lg-9">Ultimas Noticias</h3>
			<a href="noticias" class="more-news col-lg-3">Mais Noticias...</a>
		</div>
		<!-- INIT NOTICIA ITEM-->
		<?php for ($i=0; $i < 12; $i++): ?>
			<div class="last-news-item thumbnail col-lg-4"> 
				<a href="">
					<div class="news-img col-lg-12" >
						<img src="assets/images/1032_big.jpg" class="img-responsive">
					</div>
					<h4 class="news-title col-lg-12">Noticia de hoje em dia <br>
						<small>Subtexto da noitica Subtexto da noiticaSubtexto da noiticaSubtexto da noiticaSubtexto da noitica</small>
					</h4>
				</a>
			</div>
		<?php endfor; ?>
		<!-- END  NOTICIA ITEM-->


	</section>
	<!-- VIDEOS -->
	<section id="last-videos">
		<div id="last-videos-title" class="col-lg-12">
			<h3>Ultimas Vídeos</h3>
		</div>
		<!-- INIT VIDEO ITEM-->
		<?php for ($i=0; $i < 8; $i++): ?>
			<div class="last-videos-item thumbnail col-lg-3" title="Sessão 12/12/2017" uk-tooltip="delay: 400" offset="0"> 
				<a href="">
					<div class="videos-img col-lg-12">
						<img src="assets/images/1032_big.jpg" class="img-responsive">
						<i class="fa fa-play fa-5x img-responsive"></i>
					</div>
				</a>
			</div>
		<?php endfor ?>
		<!-- END  VIDEO ITEM-->


	</section>

</section>
<!-- INIT Menu RIGHT -->
<nav id="menu-right-content" class="navbar col-lg-4 col-md-4 col-sm-12 col-xs-12 col-xl-12" >

	<?php include 'includes/menu.php'; ?>

<!--
	<ul class="navbar-nav nav-stacked col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12">
		<li class="nav-item ">
			<a href="">
				<div class="menu-right-img-1">
					<img src="assets/images/mak1.png" class="nav-right-img-mak img-responsive">
				</div>

			</a>
		</li>
		<li class="nav-item">
			<a href="">
				<div class="menu-right-img-2">
					<img src="assets/images/mak2.png" class="nav-right-img-mak">
				</div>
			</a>
		</li>
		<li class="nav-item">
			<a href="">
				<div class="menu-right-img-3">
					<img src="assets/images/mak3.png" class="nav-right-img-mak">
				</div>
			</a>
		</li>
		<li class="nav-item">
			<a href="">
				<div class="menu-right-img-4">
					<img src="assets/images/mak4.png" class="nav-right-img-mak">
				</div>
			</a>
		</li>


	</ul>

</nav>

-->
<!-- END Menu RIGHT -->

</main>

<script type="text/javascript">
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>


<!-- Body End -->
