<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tip_part = $_POST["tip_part"];
$nom_congre = $_POST["nom_congre"];
$tit_trab = $_POST["tit_trab"];
$pais_congre = $_POST["pais_congre"];
$fecha = $_POST["fecha"];
$palab_clave = $_POST["palab_clave"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_participacion_congresos /* tabla de destino */
(tipo_participacion,nombre_congreso,titulo_trabajo,pais,fecha,palabras_clave,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tip_part','$nom_congre','$tit_trab','$pais_congre','$fecha','$palab_clave','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>