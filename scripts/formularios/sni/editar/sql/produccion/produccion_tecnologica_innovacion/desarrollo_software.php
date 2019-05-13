<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$titulo_soft = $_POST["titulo_soft"];
$tip_soft = $_POST["tip_soft"];
$derechos_autor = $_POST["derechos_autor"];
$pais_soft = $_POST["pais_soft"];
$hrs_hombre = $_POST["hrs_hombre"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$costo = $_POST["costo"];
$beneficiario = $_POST["beneficiario"];
$objetivo = $_POST["objetivo"];
$resumen = $_POST["resumen"];
$contribucion = $_POST["contribucion"];
$gen_valor = $_POST["gen_valor"];
$form_recur = $_POST["form_recur"];
$ayuda_innova = $_POST["ayuda_innova"];
$logros = $_POST["logros"];

session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_desarrollo_software SET 

    tipo_desarrollo='$tip_soft',
    titulo='$titulo_soft',
    derechos_autor='$derechos_autor',
    pais='$pais_soft',
    horas_hombre='$hrs_hombre',
    fecha_inicio='$fecha_inicio',
    fecha_fin='$fecha_fin',
    costo='$costo',
    beneficiario='$beneficiario',
    objetivo='$objetivo',
    resumen='$resumen',
    contribucion='$contribucion',
    generacion_de_valor='$gen_valor',
    formacion_rh='$form_recur',
    recibio_apoyo_conacyt='$ayuda_innova',
    logros='$logros'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  