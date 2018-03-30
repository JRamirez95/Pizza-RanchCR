
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal Usuario</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

   <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="css/zerogrid.css">        	
    <link rel="stylesheet" href="css/estilo-pUs.css">
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
  
<section id="container" class="sub-page">
<div class="wrap-container zerogrid">
    <div class="d-flex align-items-stretch">

        <nav id="sidebar">
            <div class="sidebar-header d-flex align-items-center">
            <div class="avatar center-block img-thumbnail" style="background-image: url(fotosPerfil/)"  alt="..."></div>
                <div class="title">
                   <h1>Jonathan</h1> <p>Ramirez</p>
                    
                </div>

            </div><span class="heading">Menu</span>
            <ul class="list-unstyled">
                <li class="active"><a href="principalUsuarios.php"><i class="fa fa-globe"></i>Presentación</a></li>
                             
                <li>
                    <a href="Parametros.php"> <i class="fas fa-trophy"></i>Mis Puntos</a>
                </li>
                <li>
                    <a href="editarPerfil.php"> <i class="fas fa-pencil-alt"></i>Editar Perfil</a>
                </li>
                <li> 
                    <a href="cambiarContrasena.php"> <i class="fas fa-exchange-alt"></i>Cambiar Contraseña</a>
                </li>
                <li>
                    <a href="cerrarSesion.php"> <i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
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
                            <div class="block">
                                <div class="title">
                                    <strong>Perfil</strong>
                                </div>
                                <div class="block-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Nombre :</label>
                                            <div class="col-sm-6">
                                                <label>Jonathan Ramírez</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Mis Puntos :</label>
                                                <div class="col-sm-6">                                                    
                                                    <label>1500 PTS</label>                                                   
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Precio por hora:</label>
                                                <div class="col-sm-6">                                                    
                                                    <div class="i-checks" style='color:White;'>   
                                                                                                               
                                                    </div>                                                    
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Disponibilidad:</label>
                                            <div class="col-sm-6">
                                                <div class="i-checks" style='color:White;'>        
                                                <!-- <?php
                                                    while ($row = mysqli_fetch_array($dias)) {                                                       
                                                        echo "<label class='fa fa-check'></label> $row[2]<br>";				
                                                    }
                                                ?>                                                 -->
                                                </div>
                                            </div>                                               
                                        </div>                                         
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>         
                </div>
            </section>
        </div>
    </div>
    </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js">
    </script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/usuario.js"></script>
</body>

</html>