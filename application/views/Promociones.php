<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Promociones</title>

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/promos.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
    <![endif]-->

</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p>info@pizzaranchcr.com</p></li>
				<li class="phone"><p>24600909</p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="images/logo.png"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<h2 class="t-center">Invitado</h2>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Menu</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			<li class="colour-1"><a href="Home">Inicio</a></li>
			<li class="colour-2"><a href="Menu">Menu</a></li>
			<li class="colour-3"><a href="Sucursales">Sucursales</a></li>
			<li class="colour-4"><a href="Promos">Promociones</a></li>
			<li class="colour-5"><a href="Galeria">Galería</a></li>
			<li class="colour-6"><a href="">Ordenar</a></li>
			<li class="colour-7"><a href="Registrarse">Registrarse</a></li>
			<li class="colour-8"><a href="Login">Iniciar Sesión</a></li>
		</ul>
    </nav>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
        <div class="crumbs">
			<h2 class="t-center">PROMOCIONES DEL DÍA</h2>
			<!-- <ul>
				<li><a href="Home">Inicio</a></li>
				<li><a href="Sucursales">Sucursales</a></li>
			</ul> -->
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<?php foreach ($promos as $index=> $promo){ ?>
				<div class="row">
					<!-- Image -->
                    <div class="col-12 col-lg-6">
                        <div class="card bg-light mb-3">
                            <div class="card-body">
                                <a href="" data-toggle="modal" data-target="#productModal">
                                    <img class="img-fluid" src="<?php echo base_url(). "Pizza-RanchCR/uploads_promos/$promo->foto" ?>" style="width:100%; height:100%;"/>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Add to cart -->
                    <div class="col-12 col-lg-6 add_to_cart_block">
                        <div class="card bg-light mb-3">
                            <div class="card-body">
                                <p class="price"><?php echo $promo->precio; ?> ₡</p>
                                <p><strong><?php echo $promo->descripcion; ?></strong></p>
                                <form method="get" action="cart.html">
                                    <div class="form-group">
                                        <label for="colors">Sucursales</label>
                                        <select class="custom-select" id="colors">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Ciudad Quesada</option>
                                            <option value="2">La Fortuna</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Cantidad :</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1">
                                            <div class="input-group-append">
                                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="cart.html" class="btn btn-success btn-lg btn-block text-uppercase">
                                        <i class="fa fa-shopping-cart"></i> Add To Cart
                                    </a>
                                </form>
                                <div class="product_rassurance">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>Express</li>
                                        <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>Pagar con Tarjeta</li>
                                        <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br/>+506 2460-09-09</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
				</div>
				<?php } ?>
		</div>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Customer Testimonials</h4>
					<div class="row">
						<img src="images/a-1.jpg">
						<h5>Nick Roach</h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Ubicación</h4>
					<div class="wrap-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.0737095097943!2d-84.43382528520303!3d10.335986392621301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa065858cca930d%3A0x1b05f1a343eb8f0f!2sPizza+Ranch+Ciudad+Quesada!5e0!3m2!1ses-419!2scr!4v1520782240628" width="100%" height="200" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Horario</h4>
					<p><span>Lunes a Domingo</span> 11:00 – 21:00</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			Copyright 2018 - Diseñado por <a href="m">JAKADESIGN</a>
			<ul class="quick-link f-right">
				<li><a href="#">Politicas de Privacidad</a></li>
				<li><a href="#">Terminos y Condiciones</a></li>
			</ul>
		</div>
	</div>
</footer>
</div>

	<!-- js -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/promos.js"></script>


</body></html>
