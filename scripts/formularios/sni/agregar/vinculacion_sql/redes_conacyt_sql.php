<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$red_conacyt = $_POST["red_conacyt"];
$fecha_ingreso = $_POST["fecha_ingreso"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_redes_tematicas_conacyt /* tabla de destino */
(red_tematica_conacyt,fecha_ingreso,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$red_conacyt','$fecha_ingreso','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>