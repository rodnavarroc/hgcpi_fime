/*=========== DOCENCIA ============*/

function borrarRegistroProdArt(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/estimulos/borrar/produccion_academica_docencia_articulo.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

/*=========== DOCENCIA ============*/