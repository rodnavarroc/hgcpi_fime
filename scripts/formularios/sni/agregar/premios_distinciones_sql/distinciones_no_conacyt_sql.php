<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nom_fondo = $_POST["nom_fondo"];
$insti_otorgo = $_POST["insti_otorgo"];
$ano_no_distinciones = $_POST["ano_no_distinciones"];
$pais_no_distinciones = $_POST["pais_no_distinciones"];
session_start();
$idusuario = $_SESSION['usuario'];
$consulta = "INSERT INTO detalle_usuario_distinciones_no_conacyt /* tabla de destino */
(nombre_dist,institucion_otorga,ano,pais,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$nom_fondo','$insti_otorgo','$ano_no_distinciones','$pais_no_distinciones','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>