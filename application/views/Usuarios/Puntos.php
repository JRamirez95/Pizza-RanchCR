
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Puntos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="css/zerogrid.css">        	
    <link rel="stylesheet" href="css/estilo-pUs.css">
    <link rel="stylesheet" href="css/puntos.css">
</head>
<body>

    <!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p>info@pizzaranchcr.com</p></li>
				<li class="phone"><p>24600909</p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="images/logo.png"></div></center>
		</div>
	</header>
  
     <nav class="navbar navbar-expand-lg">

            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a href="principalUsuarios.php" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Pizza</strong><strong>Ranch</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">P</strong><strong>R</strong></div>
                    </a>
                    <button class="sidebar-toggle"><i class=""></i></button>
                </div>

            </div>
        </nav>

    <div class="d-flex align-items-stretch">

        <nav id="sidebar">
            <div class="sidebar-header d-flex align-items-center">
            <div class="avatar center-block img-thumbnail" style="background-image: url(fotosPerfil/)"  alt="..."></div>
                <div class="title">
                   <h1>Jonathan</h1> <p>Ramirez</p>
                    
                </div>

            </div><span class="heading">Menu</span>
            <ul class="list-unstyled">
                <li><a href="Perfil"><i class="fa fa-globe"></i>Presentación</a></li>
                             
                <li class="active">
                    <a href="Puntos"> <i class="fas fa-trophy"></i>Mis Puntos</a>
                </li>
                   <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"><i class="fas fa-tag"></i> Promociones </a>
                    <ul id="dashvariants" class="collapse list-unstyled">
                        <li><a href="Promociones"> <i class="fas fa-plus"></i> Nueva Promoción</a></li>
                        <li><a href="listaPromociones"> <i class="fas fa-clipboard-list"></i> Promociones</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""> <i class="fas fa-info-circle"></i> Información</a>
                </li>
                 <li>
                    <a href=""> <i class="far fa-calendar-alt"></i> Horario</a>
                </li>
                <li>
                    <a href="EditarPerfil"> <i class="fas fa-pencil-alt"></i>Editar Perfil</a>
                </li>
                <li> 
                    <a href="cambiarContrasena"> <i class="fas fa-exchange-alt"></i>Cambiar Contraseña</a>
                </li>
                <li>
                    <a href="cerrarSesion"> <i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
                </li>
            </ul>
        </nav>

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom fa fa-globe"> Presentación</h2>
                </div>
            </div>          
            <section class="no-padding-top">
                <div class="container-fluid">                    
                    <div class="row">                   
                        <div class="col-lg-12">                          
                               
                                    <div class='ui col-sm-4'>
                                                                              
                                        <div class='ui_box'>
                                            <div class='ui_box__inner'>
                                                <h2>TOTAL DE PUNTOS</h2>
                                                <hr>
                                                <div class='stat'>
                                                    <span><i class="fas fa-trophy"></i> 1400</span>
                                                </div>    
                                                <hr>                                           
                                                <p>Suma más puntos y podrás cambiarlos por pizzas o rebajar el precio de tu compra.</p>
                                            </div>
                                            <center><button class="btn btn-success">Cambiar Puntos</button></center>
                                        </div>
                                        
                                    </div>                                 
                            
                        </div> 
                    </div>         
                </div>
            </section>
        </div>
    </div>
 
 

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>   
    <script src="css/js/bootstrap.min.js"></script> 
    <script src="js/usuario.js"></script>
    

</body>

</html>