<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nom_prog_educ = $_POST["nom_prog_educ"];
$nom_curso = $_POST["nom_curso"];
$nom_inst = $_POST["nom_inst"];
$tip_inst = $_POST["tip_inst"];
$pub_priv = $_POST["pub_priv"];
$pais = $_POST["pais"];
$clasificacion = $_POST["clasificacion"];
$horas_tot = $_POST["horas_tot"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_docencia /* tabla de destino */
(
    nombre_programa_educativo,
    nombre_curso,
    nombre_institucion_ies,
    tipo_institucion,
    institucion_publica_privada,
    pais_institucion,
    clasificacion_institucion,
    horas_totales_curso,
    fecha_inicio,
    fecha_fin,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$nom_prog_educ',
    '$nom_curso',
    '$nom_inst',
    '$tip_inst',
    '$pub_priv',
    '$pais',
    '$clasificacion',
    '$horas_tot',
    '$fecha_inicio',
    '$fecha_fin',
    
    '$idusuario'
)"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>