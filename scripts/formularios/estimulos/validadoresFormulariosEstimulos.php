//================= DOCENCIA ==============//
function validarSeleccionProduccionAcademica() { //produccion academica docencia
        
        var select = $("#produccion_academica").val();
        
            if (select == "seleccion") 
            {
            alert('Seleccione una opción.'); //si no seleciono nada
            location.reload();
            return false;
            }

            else if(select == "articulo") //si selecciono articulo
            {
            $('#ventanaFormularioProdAcad').load('formularios/estimulos/docencia/produccion_academica_docencia_articulo.php');
            return true;
            }

            else //si la opcion no tiene formulario
            {
            alert('Opcion sin formulario.');
            location.reload();
            return false;
            }

        };

        function validarSeleccionGestionAcademica() { //gestion academica individualizada
        
            
            $('#ventanaFormularioGestionAcad').load('formularios/estimulos/docencia/gestion_academica_invididualizada.php');
            return true;
        };

        function validarCapaActa() { //capacitacion actualizacion lenguas extranjeras
        
            
            $('#ventanaCapaActa').load('formularios/estimulos/docencia/capa_lenguas_extra.php');
            return true;
        };

        function validarPremiosDist() { //premios y distinciones
        
            
            $('#ventanaPremiosDist').load('formularios/estimulos/docencia/premios_distinciones.php');
            return true;
        };

        function validarCapacitActuali() { //capacitaciones y actualizaciones academicas
        
            
            $('#ventanaCapaYActuali').load('formularios/estimulos/docencia/capa_actualizacion_academica.php');
            return true;
        };
//================= DOCENCIA ==============//