    <?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 

$ident = $_GET['ident'];

$insti_presenta = $_POST["insti_presenta"];
$fecha_public = $_POST["fecha_public"];
$num_pag = $_POST["num_pag"];
$origen_reptec = $_POST["origen_reptec"];
$descripcion = $_POST["descripcion"];
$objetivos = $_POST["objetivos"];
$palab_clave = $_POST["palab_clave"];
$ayuda_reptec = $_POST["ayuda_reptec"];
$area_reptec = $_POST["area_reptec"];
$campo_reptec = $_POST["campo_reptec"];
$disciplina_reptec = $_POST["disciplina_reptec"];
$subdisciplina_reptec = $_POST["subdisciplina_reptec"];
$idthomson_reptec = $_POST["idthomson_reptec"];
$idarxiv_reptec = $_POST["idarxiv_reptec"];
$idpubmed_reptec = $_POST["idpubmed_reptec"];
$idopen_reptec = $_POST["idopen_reptec"];
$idusuario = "1815906";

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="UPDATE detalle_usuario_reportes_tecnicos SET 

    institucion='$insti_presenta',
    fecha_publicacion='$fecha_public',
    numero_paginas='$num_pag',
    origen_reporte='$origen_reptec',
    descripcion='$descripcion',
    objetivos='$objetivos',
    palabras_clave='$palab_clave',
    recibio_apoyo_conacyt='$ayuda_reptec',
    area_conocimiento_reporte='$area_reptec',
    campo_reporte='$campo_reptec',
    disciplina_reporte='$disciplina_reptec',
    subdisciplina_reporte='$subdisciplina_reptec',
    researcher_id_autor='$idthomson_reptec',
    arxiv_id_autor='$idarxiv_reptec',
    pubmed_id_autor='$idpubmed_reptec',
    open_id_autor='$idopen_reptec'

WHERE id='$ident' 

AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
    header("Location: ../../../../../../../sni.php");
}

?>                                  