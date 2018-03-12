<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Registrarse</title>	
	
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
			<li class="colour-4"><a href="archive.html">Promociones</a></li>
			<li class="colour-5"><a href="reservation.html">Galería</a></li>
			<li class="colour-6"><a href="staff.html">Ordenar</a></li>
			<li class="colour-7"><a href="Registrarse">Registrarse</a></li>
			<li class="colour-8"><a href="gallery.html">Iniciar Sesión</a></li>
		</ul>
    </nav>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="Home">Inicio</a></li>
				<li><a href="Registrarse">Registrarse</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">					
					<div class="col-2-4">
						<div class="wrap-col">
							<div class="contact">
								<div id="contact_form">
									<form name="contact" id="contact" method="post" action="reservation.php">

                                        <label class="row">
											<div class="col-1-1">
												<div class="wrap-col">
													<input type="number" name="name" id="name" placeholder="Cedula *" required="required" />
												</div>
                                            </div>
                                        </label>   

										<label class="row">
											<div class="col-1-1">
												<div class="wrap-col">
													<input type="text" name="name" id="name" placeholder="Nombre *" required="required" />
												</div>
                                            </div>                                   
                                        </label>

                                        <label class="row">
                                             <div class="col-1-1">
												<div class="wrap-col">
													<input type="text" name="lastName" id="lastName" placeholder="Apellidos *" required="required" />
												</div>
                                            </div>
                                        </label>

                                        <label class="row">
                                            <div class="col-1-1">
												<div class="wrap-col">
													<input type="email" name="email" id="email" placeholder="Email *" required="required" />
												</div>
											</div>
                                        </label>
                                        
                                        <label class="row">
                                            <div class="col-1-1">
												<div class="wrap-col">
													<input type="email" name="email" id="email" placeholder="Confirmación de Email *" required="required" />
												</div>
											</div>
                                        </label>

                                        <!-- <label class="row">
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="username" id="username" placeholder="Nombre de Usuario *" required="required" />
												</div>
                                            </div>
                                        </label> -->

                                        <label class="row">
                                            <div class="col-1-1">
												<div class="wrap-col">
													<input type="password" name="password" id="password" placeholder="Contraseña *" required="required" />
												</div>
											</div>
                                        </label>
                                        
                                        <label class="row">
                                            <div class="col-1-1">
												<div class="wrap-col">
													<input type="password" name="password" id="password" placeholder="Repetir Contraseña *" required="required" />
												</div>
											</div>
                                        </label>  

										<label class="row">
											<div class="col-1-3">
												<div class="wrap-col">
												<select type="text" name="subject" id="subject" required="required">
                                                    <option selected disabled value="">Provincia</option>
                                                </select>
												</div>
											</div>
											<div class="col-1-3">
												<div class="wrap-col">
												<select type="text" name="subject" id="subject" required="required">
                                                    <option selected disabled value="">Canton</option>
                                                </select>
												</div>
											</div>
											<div class="col-1-3">
												<div class="wrap-col">
												<select type="text" name="subject" id="subject" required="required">
                                                    <option selected disabled value="">Distrito</option>
                                                </select>
												</div>
											</div>											
                                        </label>
                                        
										<label class="row">
											<div class="wrap-col">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Dirección exacta con señas"></textarea>
											</div>
                                        </label>                                        
                                        
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Acepto las condiciones de uso y entiendo que mi información será utilizada como se describe en la Política de privacidad de Pizza Ranch.</span>
                                        </label>
                                        
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Acepto recibir mensajes de correo electrónico, promociones y ofertas especiales de Pizza Ranch.</span>
                                        </label>
                                        <hr color="black">
                                        <p>* Campos obligatorios</p>
										<center><input class="sendButton" type="submit" name="Submit" value="Registrarse"></center>
									</form>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-1-2 info">
						<div class="wrap-col">
							<h3>Con tu cuenta podes</h3>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Armar su propia pizza a gusto.</span>
                            </label>
                            <hr>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Pagar en linea.</span>
                            </label>
                            <hr>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Acepto recibir mensajes de correo electrónico, promociones y ofertas especiales de Pizza Ranch.</span>
                            </label>							
						</div>
					</div>
				</div>
			</div>
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


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>
	
</div>
</body></html>