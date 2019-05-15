<?php
$mysqli = new mysqli("localhost", "root", "", "hgcpi");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

session_start();

$user = $_POST['usuario'];
$passw = $_POST['pass'];

/* buscar si el usuario existe */
$consulta = "SELECT idusuario FROM usuario WHERE idusuario='$user' AND clave='$passw'";

if ($resultado = $mysqli->query($consulta)) {

$row_cnt = $resultado->num_rows;
if($row_cnt == 0) {

    echo "<script>
            alert('Cuenta no existente o datos incorrectos.');
            window.location= '../index.php'
    </script>";
    $resultado->close();
}
}

/* comprobar si es la primera vez que entra para que llene sus datos personales */
$consulta = "SELECT cantidad_de_ingresos FROM usuario WHERE idusuario='$user' AND clave='$passw'";

if ($resultado = $mysqli->query($consulta)) {

$row_cnt = $resultado->num_rows;
if($row_cnt == 0) {echo '<script type="text/javascript"> alert("Usuario no existe."); </script>';}
 
 while ($fila = $resultado->fetch_row()) {
        if($fila[0] == 0 || $fila[0] == NULL)
        {
            $_SESSION['usuario'] = $user; 
            header("Location: ../datos_personales.php?user=$user");
        }
        else
        {
                   $_SESSION['usuario'] = $user; 
                    echo "<script>
                            alert('Identificado correctamente.');
                            window.location= '../perfil.php'
                    </script>";
        }
    }
     $resultado->close();
}
$mysqli->close();
?>