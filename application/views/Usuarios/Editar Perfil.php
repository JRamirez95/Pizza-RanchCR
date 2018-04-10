
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perfil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
   <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/estilo-pUs.css">
</head>
<body onload="cargarDatos()">


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

    <?php foreach ($usuario as $index=> $user) ?>

        <nav class="navbar navbar-expand-lg">

            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a href="principalUsuarios.php" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Pizza</strong><strong>Ranch</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">P</strong><strong>R</strong></div>
                    </a>
                    <button class="sidebar-toggle"><i class=""></i></button>
                </div>

                <ul class="right-menu list-inline no-margin-bottom">
                    <li class="list-inline-item logout"><a id="logout" href="cerrarSesion.php" class="nav-link">Cerrar Sesion <i class="fa fa-sign-out"></i></a></li>
                </ul>
            </div>
        </nav>


    <div class="d-flex align-items-stretch">

        <nav id="sidebar">
            <div class="sidebar-header d-flex align-items-center">
            <div class="avatar center-block img-thumbnail" style="background-image: url(fotosPerfil/)"  alt="..."></div>
                <div class="title">
                  <p><?php echo $user->nombre, " ", $user->apellidos; ?></p>
                </div>

            </div><span class="heading">Menu</span>
            <ul class="list-unstyled">
                <li><a href="Perfil"><i class="fa fa-globe"></i>Presentación</a></li>

                <li>
                    <a href="Puntos"> <i class="fas fa-trophy"></i>Mis Puntos</a>
                </li>
                <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"><i class="fas fa-tag"></i> Promociones </a>
                    <ul id="dashvariants" class="collapse list-unstyled">
                        <li><a href="agregarPromociones"> <i class="fas fa-plus"></i> Nueva Promoción</a></li>
                        <li><a href="listaPromociones"> <i class="fas fa-clipboard-list"></i> Promociones</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""> <i class="fas fa-info-circle"></i> Información</a>
                </li>
                 <li>
                    <a href=""> <i class="far fa-calendar-alt"></i> Horario</a>
                </li>
                <li class="active">
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
                                    <div class="block">
                                        <div class="title">
                                            <strong>Edite su información</strong>
                                        </div>
                                        <div class="block-body">
                                            <form method="POST" action="/Pizza-RanchCR/home/registrar" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Cedula :</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon fa fa-user"></span>
                                                                <input type="text" name="cedula" placeholder="" value="" class="form-control" id="editCedula">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Nombre :</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon fa fa-user"></span>
                                                                <input type="text" name="nombre" placeholder="" value="" class="form-control"  id="editNombre">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Apellidos :</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon fa fa-user"></span>
                                                                <input type="text" name="apellidos" placeholder="" value="" class="form-control"  id="editApellidos">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Correo :</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon fa fa-at"></span>
                                                                <input type="email" name="email" disabled="" placeholder="" class="form-control"  id="editCorreo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Teléfono :</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon fa fa-phone"></span>
                                                                <input type="tel" name="telefono" placeholder="" value="" class="form-control"  id="editTelefono">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Coordenadas :</label>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon fas fa-map-signs"> Lat</span>
                                                                <input type="tel" name="lat" placeholder="" value="" class="form-control" id="lat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon fas fa-map-signs"> Lng</span>
                                                                <input type="tel" name="lng" placeholder="" value="" class="form-control" id="lng">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <button type="button" class="btn btn-success btn-block" data-toggle="modal"
                                                                    data-target="#fsModal">Actualizar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Direción en señas:</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon far fa-compass"></span>
                                                                <textarea name="direccion" placeholder="" value="" class="form-control"  id="editDireccion"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Subir Foto :</label>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon fa fa-image"></span>
                                                                <input class="form-control" name="imagen" type="file" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                                <div class="form-group row">
                                                    <div class="col-sm-9 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                                        <button type="reset" class="btn btn-secondary">Cancelar</button>
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

    <!-- modal -->
<div id="fsModal"
     class="modal animated bounceIn"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">

  <!-- dialog -->
  <div class="modal-dialog">

    <!-- content -->
    <div class="modal-content">

      <!-- header -->
      <div class="modal-header">
        <h1 id="myModalLabel"
            class="modal-title">
          Modal title
        </h1>
      </div>
      <!-- header -->

      <!-- body -->
      <div class="modal-body">
          
          <div id="map">
            <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVDzvvE7UhvRLQXBbsbr4ILGTqrIt50EA&callback=initMap">
            </script>
          </div>


      </div>
      <!-- body -->

      <!-- footer -->
      <div class="modal-footer">
        <button class="btn btn-secondary"
                data-dismiss="modal">
          close
        </button>
        <button class="btn btn-default">
          Default
        </button>
        <button class="btn btn-primary">
          Primary
        </button>
      </div>
      <!-- footer -->

    </div>
    <!-- content -->

  </div>
  <!-- dialog -->

</div>
<!-- modal -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="css/js/bootstrap.min.js"></script>
    <script src="js/usuario.js"></script>
    <script src="js/map.js"></script>
    <script type="text/javascript">
        function cargarDatos(){
          var datos =  <?php echo json_encode($usuario,JSON_FORCE_OBJECT); ?>;
          document.getElementById('editCedula').value=datos[0]['cedula'];
          document.getElementById('editNombre').value=datos[0]['nombre'];
          document.getElementById('editApellidos').value=datos[0]['apellidos'];
          document.getElementById('editCorreo').value=datos[0]['email'];
          document.getElementById('editTelefono').value=datos[0]['telefono'];
          document.getElementById('editDireccion').value=datos[0]['direccion'];
          document.getElementById('lat').value=datos[0]['lat'];
          document.getElementById('lng').value=datos[0]['lng'];
        }
    </script>
</body>

</html>
