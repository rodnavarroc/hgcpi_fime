<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

if(!isset($_GET["user"]))
{
	exit;
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nueva_clave = $_POST["nueva_clave"];
$nombre = $_POST["nombre"];
$ap_paterno = $_POST["ap_paterno"];
$ap_materno = $_POST["ap_materno"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$nacionalidad = $_POST["nacionalidad"];
$ciudad_nacimiento = $_POST["ciudad_nacimiento"];
$estado_civil = $_POST["estado_civil"];
$telefono = $_POST["telefono"];
$telefono_particular = $_POST["telefono_particular"];
$correo_personal = $_POST["correo_personal"];
$calle_dom = $_POST["calle_dom"];
$numero_exterior_dom = $_POST["numero_exterior_dom"];
$numero_interior_dom = $_POST["numero_interior_dom"];
$colonia_residencia = $_POST["colonia_residencia"];
$pais_residencia = $_POST["pais_residencia"];
$estado_residencia = $_POST["estado_residencia"];
$ciudad_residencia = $_POST["ciudad_residencia"];
$codigo_postal = $_POST["codigo_postal"];
$ies_adscripcion = $_POST["ies_adscripcion"];
$titulo = $_POST["titulo"];
$curp = $_POST["curp"];
$rfc = $_POST["rfc"];
$cvu = $_POST["cvu"];
$orcid = $_POST["orcid"];
$idusuario = $_GET["user"];

$consulta = "UPDATE usuario /* tabla de destino */ SET 
    
    nombre = '$nombre',
    ap_paterno = '$ap_paterno',
    ap_materno = '$ap_materno',
    titulo = '$titulo',
    curp = '$curp',
    rfc = '$rfc',
    numero_cvu = '$cvu',
    orcid = '$orcid',
    fecha_nacimiento = '$fecha_nacimiento',
    sexo = '$sexo',
    nacionalidad = '$nacionalidad',
    ciudad_nacimiento = '$ciudad_nacimiento',
    estado_civil = '$estado_civil',
    telefono_particular = '$telefono',
    telefono_movil = '$telefono_particular',
    correo_electronico_personal = '$correo_personal',
    calle_dom = '$calle_dom',
    numero_exterior_dom = '$numero_exterior_dom',
    numero_interior_dom = '$numero_interior_dom',
    colonia_residencia = '$colonia_residencia',
    pais_residencia = '$pais_residencia',
    estado_residencia = '$estado_residencia',
    codigo_postal_dom = '$codigo_postal',
    ciudad_residencia = '$ciudad_residencia',
    ies_adscripcion = '$ies_adscripcion',
    clave = '$nueva_clave',
    cantidad_de_ingresos = '2'

    WHERE idusuario = '$idusuario'";/* campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../perfil.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>