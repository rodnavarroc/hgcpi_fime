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
                  <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="120" height="40" class="d-inline-block align-top"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Convocatorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="estimulos.php">Estímulos UANL</a>
                          <a class="dropdown-item" href="prodep.php">PRODEP</a>
                          <a class="dropdown-item" href="sni.php">Sistema Nacional de Investigadores</a>
                        </div>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link disabled" href="perfil.php#datos">Datos Personales</a>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="#"></a></span>
                  </div>
            </nav>
    </header>

        <div class="row-mt-4">
            <div class="col-md-12">
              <div class="container" style="background-color: #f2f2f2;">
                <br><br>
                <h2><center>Bienvenido a la plataforma HGCPI</center></h2><br>
                <h6><center>Aquí mantendrá en orden su currículum y le proporcionaremos las herramientas necesarias <br>para que su participación en convocatorias de la UANL sea más rápida y eficiente.</center></h6>
                <br><br>
              </div>
                  <br><br>
                    <h4><center>Iniciar Sesión</center></h4><br>
                    <form enctype="multipart/form-data" action="scripts/login.php" method="POST">

                    <div style="padding-right: 30%; padding-left: 30%">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">N° de Empleado</span>
                      </div>
                      <input id="usuario" type="text" class="form-control" placeholder="674512" aria-label="Usuario" aria-describedby="basic-addon1" name="usuario" required>
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Contraseña</span>
                      </div>
                      <input id="pass" type="password" class="form-control" placeholder="" aria-label="Usuario" aria-describedby="basic-addon1" name="pass" required>
                    </div>
                    <center><input class="btn btn-primary my-2 my-sm-0" type="submit" name="login_btn" value="Acceder a su cuenta"></center>
                    </form>
            </div>
      

            <div class="col-md-12"><br>
                <br>
                    <h4><center>Solicitud de Registro</center></h4><br>

                    <div style="padding-right: 30%; padding-left: 30%">
                    <p style="text-align: justify;">Si desea registrar una cuenta de docente/investigador en la plataforma HGCPI por favor envíe un correo electrónico a <a href="mailto:hgcpi_fime@gmail.com">hgcpi_fime@gmail.com</a> con los siguientes datos: <br>
                      <ul>
                        <li><b>Asunto:</b> Solicitud de Registro HGCPI</li>
                        <li>Correo institucional <b><i>(@uanl.edu.mx)</i></b></li>
                        <li>Número de empleado UANL</li>
                      </ul>
                      <br>
                    Será contactado en un plazo de 24 a 48 horas para informarle sobre los datos (usuario y contraseña) de su nueva cuenta en el sistema HGCPI. Para cualquier duda o aclaración al respecto de la plataforma utilice como medio de contacto el correo electrónico mencionado anteriormente.
                    </p></center>
            </div>
        </div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>