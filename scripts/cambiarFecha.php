<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$convocatoria = $_GET["convocatoria"];
$fecha_fin = $_POST["fecha_fin"];

$consulta = "UPDATE convocatorias /* tabla de destino */ SET 
    
    fecha_cierre = '$fecha_fin'

    WHERE nombre = '$convocatoria'";/* campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../admin.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>