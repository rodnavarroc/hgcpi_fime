<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$empleado = $_POST["empleado"];
$password = $_POST["clave"];

$consulta = "INSERT INTO usuario /* tabla de destino */
(
    idusuario,
    clave

    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$empleado',
    '$password'

)"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../admin.php"); alert("Agregado exitosamente."); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>