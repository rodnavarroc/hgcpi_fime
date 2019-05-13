<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
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

$consulta = "INSERT INTO detalle_usuario_prod_articulos /* tabla de destino */
(
    issn,
    nombre_art,
    pais,
    numero_revista,
    volumen_revista,
    ano_edicion,
    ano_publicacion,
    pagina_inicial,
    pagina_final,
    palabras_clave,
    apoyo_conacyt,
    fondo,
    comision_articulo,
    researcher_id_autor,
    arxiv_id_autor,
    pubmed_id_autor,
    open_id_autor,

    usuario_idusuario
    ) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES 
(
    '$issn',
    '$nombre',
    '$pais_art',
    '$num_revista',
    '$vol_revista',
    '$ano_edic_art',
    '$ano_publi_art',
    '$pag_inic',
    '$pag_fin',
    '$palabras_clave',
    '$ayuda_art',
    '$fond_prog',
    '$comision_art',
    '$idthomson_art',
    '$idarxiv_art',
    '$idpubmed_art',
    '$idopen_art',

    '$idusuario'
)"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../../sni.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>