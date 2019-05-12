<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */

$convo = $_POST["convocatoria"];

$sql="SELECT * FROM convocatorias WHERE nombre='$convo'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

if($mostrar['estatus'] == 'Activa')

{
	$consulta = "UPDATE convocatorias /* tabla de destino */ SET 
	    
	    estatus = 'Inactiva'

	    WHERE nombre = '$convo'";/* campos de destino */
}

else if($mostrar['estatus'] == 'Inactiva')

{
	$consulta = "UPDATE convocatorias /* tabla de destino */ SET 
	    
	    estatus = 'Activa'

	    WHERE nombre = '$convo'";/* campos de destino */
}

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../admin.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>