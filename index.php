<!DOCTYPE html>
<html lang="en">
<head>
	<title>HGCPI FIME</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=egde">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <img src="img/logo.png" width="12%" style="padding-right: 1.5%;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="menuNavegacion">
                        <ul class="navbar-nav mr-auto">
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    PRODEP
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    SNI
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="estimulos.php" class="nav-link">
                                    Estimulos
                                </a>
                            </li>
                        </ul>
                        <form action="" class="form-inline my-2 my lg-0">
                            <input type="text" class="form-control mr-sm-2" type="search" placeholder="Buscar">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
        					<li><a href="#"><span class="glyphicon glyphicon-user m-3"></span>Ayuda</a></li>
      					</ul>
                    </div>
                </div>
            </nav>

            <div class="col-md-12">
                <br>
                    <h4><center>Iniciar Sesión</center></h4><br>
                    <form enctype="multipart/form-data" action="#" method="POST">

                    <div style="padding-right: 30%; padding-left: 30%">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">N° de Empleado</span>
                      </div>
                      <input type="text" class="form-control" placeholder="674512" aria-label="Usuario" aria-describedby="basic-addon1" name="usuario" required>
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Contraseña</span>
                      </div>
                      <input type="password" class="form-control" placeholder="" aria-label="Usuario" aria-describedby="basic-addon1" name="pass" required>
                    </div>
                    <center><input class="btn btn-primary my-2 my-sm-0" type="submit" name="login_btn" value="Acceder"></center>
                    </form>
                    </div>
            </div>       

            <div class="col-md-12"><br>
                <br>
                    <h4><center>Solicitud de Registro</center></h4><br>
                    <form enctype="multipart/form-data" action="#" method="POST">

                    <div style="padding-right: 30%; padding-left: 30%">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">N° de Empleado</span>
                      </div>
                      <input type="text" class="form-control" placeholder="674512" aria-label="Usuario" aria-describedby="basic-addon1" name="usuario" required>
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                      </div>
                      <input type="text" class="form-control" placeholder="alguien@uanl.edu.mx" aria-label="Usuario" aria-describedby="basic-addon1" name="correo" required>
                    </div>
                    <center><input class="btn btn-primary my-2 my-sm-0" type="submit" name="login_btn" value="Enviar Solicitud"><br><br>
                        <p style="text-align: justify;"><small>* Su solicitud será atendida por el administrador del sistema y <b>se le notificará mediante el correo proporcionado</b> cuando su solicitud sea aprobada. <br><br><i>Este proceso puede tardar varios días. Si tiene alguna duda o problema por favor envíe un correo a <a href="#">la administración del sitio</a>, o comuníquese directamente con la Coordinación de Sistemas de la FIME.</i></small></p></center>
                    </form>
                    </div>
            </div> 
        </header>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>