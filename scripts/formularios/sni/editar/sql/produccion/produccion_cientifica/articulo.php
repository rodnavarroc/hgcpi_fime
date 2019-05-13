<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$issn = $_POST["issn"];
$nombre = $_POST["nombre"];
$pais_art = $_POST["pais_art"];
$num_revista = $_POST["num_revista"];
$vol_revista = $_POST["vol_revista"];
$ano_edic_art = $_POST["ano_edic_art"];
$ano_publi_art = $_POST["ano_publi_art"];
$pag_inic = $_POST["pag_inic"];
$pag_fin = $_POST["pag_fin"];
$palabras_clave = $_POST["palabras_clave"];
$ayuda_art = $_POST["ayuda_art"];
$fond_prog = $_POST["fond_prog"];
$idthomson_art = $_POST["idthomson_art"];
$idarxiv_art = $_POST["idarxiv_art"];
$idpubmed_art = $_POST["idpubmed_art"];
$idopen_art = $_POST["idopen_art"];
$comision_art = $_POST["comision_art"];

session_start();
$idusuario = $_SESSION['usuario'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_prod_articulos SET 

    issn='$issn',
    nombre_art='$nombre',
    pais='$pais_art',
    numero_revista='$num_revista',
    volumen_revista='$vol_revista',
    ano_edicion='$ano_edic_art',
    ano_publicacion='$ano_publi_art',
    pagina_inicial='$pag_inic',
    pagina_final='$pag_fin',
    palabras_clave='$palabras_clave',
    apoyo_conacyt='$ayuda_art',
    fondo='$fond_prog',
    comision_articulo='$comision_art',
    researcher_id_autor='$idthomson_art',
    arxiv_id_autor='$idarxiv_art',
    pubmed_id_autor='$idpubmed_art',
    open_id_autor='$idopen_art'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  