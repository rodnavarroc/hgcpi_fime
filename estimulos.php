<!DOCTYPE html>
<html lang="en">
<head>
	<title>Estímulos UANL | HGCPI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=egde">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a href="index.php" class="navbar-brand">HGCPI FIME</a>
                    <a href="#" class="navbar-brand">Estimulos UANL</a>
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
                        </ul>
                        <form action="" class="form-inline my-2 my lg-0">
                            <input type="text" class="form-control mr-sm-2" type="search" placeholder="Buscar">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
        					<li><a href="#"><span class="glyphicon glyphicon-user m-3"></span>Salir</a></li>
      					</ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
        	<div class="row mt-4">
        		<div class="col-12">
        			<div id="accordion">
                    <!--CARD#1-->
                        <div class="card border-0">
                            <div class="btn btn-dark" id="header1">
                                <a class="btn btn-block" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Docencia</a>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="header1" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-dark border-light" id="subheader1">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1" aria-expanded="true" aria-controls="subcollapse1">Producción Académica Docencia</a>
                                            </div>
                                            <div id="subcollapse1" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Producción Académica Docencia</h4> 
                                                                </div>
                                                                <div class="col-3">
                                                                    <select name="seleccion_produccion_academica" id="produccion_academica" class="right">
                                                                        <option value="seleccion">Seleccione...</option>
                                                                        <option value="articulo">Artículo</option>
                                                                        <option value="capitulo_libro">Capítulo del libro</option>
                                                                        <option value="libro">Libro</option>
                                                                        <option value="manual_operacion">Manual de operación</option>
                                                                        <option value="material_apoyo">Material de apoyo</option>
                                                                        <option value="material_didactico">Material didactico</option>
                                                                    </select>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-dark btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar</button>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
														<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="contenidoFormulario">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <table class="table table-dark m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Titulo del articulo</th>
                                                                <th>ISSN</th>
                                                                <th>Fecha de publicación</th>
                                                                <th>Editorial</th>
                                                                <th>Nombre de la revista</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                    <br><br><br><br>
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-light" id="subheader2">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2" aria-expanded="true" aria-controls="subcollapse2">Capacitación y Actualización Académica</a>
                                            </div>
                                            <div id="subcollapse2" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-light" id="subheader3">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3" aria-expanded="true" aria-controls="subcollapse3">Capacitación y Actualización en Lenguas Extranjeras</a>
                                            </div>
                                            <div id="subcollapse3" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-white" id="subheader4">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4" aria-expanded="true" aria-controls="subcollapse4">Gestión Académica Invididualizada</a>
                                            </div>
                                            <div id="subcollapse4" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-light" id="subheader5">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse5" aria-expanded="true" aria-controls="subcollapse5">Impartición de Cursos a Profesores y Trabajadores de la UANL</a>
                                            </div>
                                            <div id="subcollapse5" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-light" id="subheader6">
                                                <a class="btn btn-block border-dark" data-toggle="collapse" data-target="#subcollapse6" aria-expanded="true" aria-controls="subcollapse6">Premios y Distinciones</a>
                                            </div>
                                            <div id="subcollapse6" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
        		</div>
        	</div>
        </div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "dd/mm/yy",
            //primer dia sea lunes
            firstDay: 1,
            //Nombres de los dias
            dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            //Abreviatura de los dias largos
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            //Escribir los meses
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            //Abreviatura de los meses
            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            onSelect: function(dateText){
                $('#fecha').val(dateText);
            }
        });

        function validarSeleccionProduccionAcademica() {
        
        var select = $("#produccion_academica").val();
        
            if (select == "seleccion") 
            {
            alert('Seleccione una opción.'); //si no seleciono nada
            location.reload();
            return false;
            }

            else if(select == "articulo") //si selecciono articulo
            {
            $('#contenidoFormulario').load('formularios/estimulos/produccion_academica_docencia_articulo.php');
            return true;
            }

            else //si la opcion no tiene formulario
            {
            alert('Opcion sin formulario.');
            location.reload();
            return false;
            }

        };

    </script>
</body>
</html>