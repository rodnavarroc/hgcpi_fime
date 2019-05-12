//================= FORMACION ACADEMICA ===================//

function borrarRegistroGradAcad(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/grados_academicos.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroLenguasIdiomas(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/lenguas_idiomas.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

//================= FORMACION ACADEMICA ===================//

//================= TRAYECTORIA PROFESIONAL ===================//

function borrarRegistroExperienciaLaboral(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/exp_laboral.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroEstancias(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/estancias_investigacion.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroDocencia(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/docencia.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }


//================= TRAYECTORIA PROFESIONAL ===================//

//================= PRODUCCION ===================//

function borrarRegistroProdArticulo(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/articulo.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroProdLibro(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/libro.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroProdCapitulo(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/capitulo.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroProdReportes(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/reportes.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroProdMemorias(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/memorias.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroProdDocumentosTrabajo(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/documentos_trabajo.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroDesaTec(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/desarrollos_tecnologicos.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroInnovacion(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/innovacion.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroSoftware(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/software.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroPatentes(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/patentes.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroProdProyectos(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/prod_proyectos.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

//================= PRODUCCION ===================//

//================= FORMACION CAPITAL HUMANO ==============//

function borrarRegistroTesisDiplomados(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/tesis_diplomados.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

//================= FORMACION CAPITAL HUMANO ==============//

//================= COMUNICACION PUBLICA ==============//

function borrarRegistroParticipacionCongresos(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/participacion_congresos.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }


function borrarRegistroDivulgacion(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/divulgacion.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }


//================= COMUNICACION PUBLICA ==============//

//================= VINCULACION ==============//

function borrarRegistroRedesConacyt(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/redes_conacyt.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroRedesInvestigacion(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/redes_investigacion.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroGrupoinvestigacion(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/grupos_investigacion.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

//================= VINCULACION ==============//

//================= EVALUACIONES ==============//

function borrarRegistroEvaluacionConacyt(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/evaluaciones_conacyt.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroEvaluacionNoConacyt(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/evaluaciones_no_conacyt.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }


//================= EVALUACIONES ==============//

//================= PREMIOS Y DISTINCIONES ==============//


function borrarRegistroDistincionesConacyt(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/distinciones_conacyt.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroDistincionesNoConacyt(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/distinciones_no_conacyt.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarRegistroPremiosDistinciones(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/sni/borrar/premios_distinciones.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

//================= PREMIOS Y DISTINCIONES ==============//