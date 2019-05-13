<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tipo_reconocimiento = $_POST["tipo_reconocimiento"];
$nivel_prem_dist = $_POST["nivel_prem_dist"];
$nom_prem_dist = $_POST["nom_prem_dist"];
$inst_otorgo_premio = $_POST["inst_otorgo_premio"];
$tip_inst_prem_dist = $_POST["tip_inst_prem_dist"];
$pub_priv_prem_dist = $_POST["pub_priv_prem_dist"];
$motivo_premio = $_POST["motivo_premio"];
$inst_otorga_no_considera = $_POST["inst_otorga_no_considera"];
$pais_inst_prem_dist = $_POST["pais_inst_prem_dist"];
$fecha = $_POST["fecha"];
$ano_prem_dist = $_POST["ano_prem_dist"];
$monto_mensual = $_POST["monto_mensual"];
session_start();
$idusuario = $_SESSION['usuario'];

$consulta = "INSERT INTO detalle_usuario_premios_y_distinciones /* tabla de destino */
(tipo_distincion,nivel,nombre_distincion,institucion_que_otorga,tipo_institucion,institucion_publica_privada,motivo,institucion_otorgante_no_considerada,pais_institucion,fecha,ano,monto_mensual,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tipo_reconocimiento','$nivel_prem_dist','$nom_prem_dist','$inst_otorgo_premio','$tip_inst_prem_dist','$pub_priv_prem_dist','$motivo_premio','$inst_otorga_no_considera','$pais_inst_prem_dist','$fecha','$ano_prem_dist','$monto_mensual','$idusuario')"; /* valores a insertar en los campos de destino */


if ($consulta = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos


?>