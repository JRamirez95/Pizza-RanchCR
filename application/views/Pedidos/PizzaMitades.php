<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Ordenar</title>

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
    <link rel="stylesheet" href="css/ordenar.css">

		<!-- Custom Fonts -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

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
			<div class="row">
				<h2 class="t-center">Invitado</h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			<li class="colour-1"><a href="Home">Inicio</a></li>
			<li class="colour-2"><a href="Menu">Menu</a></li>
			<li class="colour-3"><a href="Sucursales">Sucursales</a></li>
			<li class="colour-4"><a href="archive.html">Promociones</a></li>
			<li class="colour-5"><a href="reservation.html">Galería</a></li>
			<li class="colour-6"><a href="Ordenar">Ordenar</a></li>
			<li class="colour-7"><a href="Registrarse">Registrarse</a></li>
			<li class="colour-8"><a href="gallery.html">Iniciar Sesión</a></li>
		</ul>
    </nav>

<!--////////////////////////////////////Container-->
<body>
	<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
        <div class="crumbs">
			<h2 class="t-center">Pizzas por mitades</h2>
			<!-- <ul>
				<li><a href="Home">Inicio</a></li>
				<li><a href="Sucursales">Sucursales</a></li>
			</ul> -->
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<?php foreach ($pizzasm as $index=> $pmitad){ ?>
				<div class="row">
					<!-- Image -->
                    <div class="col-12 col-lg-6">
                        <div class="card bg-light mb-3">
                            <div class="card-body">
                                <a href="" data-toggle="modal" data-target="#productModal">
                                    <img class="img-fluid" src="<?php echo $pmitad->foto; ?>" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Add to cart -->
                    <div class="col-12 col-lg-6 add_to_cart_block">
                        <div class="card bg-light mb-3">
                            <div class="card-body">
															<br>
                              <center>
																<h2 class="price"><strong>₡ 10.000 </strong></h2>
															</center>
                                <form method="get" action="cart.html">
																	<br>



                                    <div class="form-group col-12">
																			<div class="col-5">
																					<label for="colors"><strong>Mitad #1:</strong></label>
																					<select  id="colors" onclick="Home/cargarSelect()">


	                                        </select>
																			</div>

																			<div class="col-5">
																				<label for="colors"><strong>Mitad #2:</strong></label>
																				<select  id="colors">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Ciudad Quesada</option>
                                            <option value="2">La Fortuna</option>
                                        </select>
																		</div>


																														<div class="form-group col-5">
																																<label for="colors"><strong>Cantidad:</strong></label>
																																	<select  id="colors">
																																			<option selected>Seleccionar</option>
																																			<option value="1">1</option>
																																			<option value="2">2</option>
																																			<option value="3">3</option>
																																			<option value="4">4</option>
																																			<option value="5">5</option>
																																			<option value="6">6</option>
																																			<option value="7">7</option>
																																			<option value="8">8</option>
																																			<option value="9">9</option>
																																			<option value="10">10</option>
																																	</select>


																								</div>
																			</div>

                                        </div>

																<br>
								<a href="cart.html" class="btn btn-success btn-ms btn-block text-uppercase">
																				<i class="fa fa-shopping-cart"></i> Agregar a pedido
																		</a>


                                </form>
                            </div>
                        </div>
                    </div>
				</div><br><br>
				<?php } ?>
		</div>
	</div>
</section>

<script type="text/javascript">

function cargarselect(){
	$select = $this->Ranch_model->cargarPizzas();


	foreach ($select as $index=> $pizza){?>
			<option value="<?php echo $pizza->nombre; ?>"><?php echo $pizza->nombre; ?></option>

			}
		}
</script>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">

	<div class="copyright">
		<center><div class="wrapper">
			Copyright 2018 - Diseñado por <a href="m">JAKADESIGN</a>
		</div></center>
	</div>
</footer>


    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>

</div>
</body></html>
