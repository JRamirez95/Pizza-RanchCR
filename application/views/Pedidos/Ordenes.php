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
			<h2 class="t-center">Aperitivos</h2>
		</div>
		<div id="main-content">
			<div class="wrap-content col-12">
				<?php foreach ($ordenes as $index=> $orden){ ?>
				
				
                    <div class="col-1-4 ">
                        <div class="card bg-light mb-3">
                            <div class="card-body col-12 "><br>
                                <a href="">
                                    <center><img class="img-fluid" src="<?php echo $orden->foto; ?>" width="200px" height="200px"/></center>
                                </a>
                            
							<form method="get" action=""><br>
							<center><h3><strong><?php echo $orden->nombre; ?></strong></h3></center>
							<div>
							<label for="price"><strong>Precio:</strong></label>
                                <p class="price">₡ <?php echo $orden->precio; ?></p>
                               
							</div>
							<br>
                                    <div class="form-group">
                                        <label for="cantidad"><strong>Cantidad:</strong></label>
                                        <select class="btn-sm" name="cantidad" id="">
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
                                <br>
								<a href="cart.html" class="btn btn-success btn-ms btn-block text-uppercase">
                                        <i class="fa fa-shopping-cart"></i> Agregar a pedido
                                    </a>
                                    </div>
                                  
                                    </div>
                                    
                                </form>
                                

					
                            </div>
							
                        </div>
						<?php } ?>
				</div>
				
				
		</div>
	</div>
</section>

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