        function validarCambiarFecha(convo) {
            
            $('#ventanaCambiarFechas').load('formularios/cambiarFecha.php?convocatoria='+convo);
            return true;
        };

         function ActDesact(convo)
        {
           cadena="convocatoria=" + convo;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/activadorDesactivador.php",
                data:cadena,
                success:function(r){alert("Operación existosa."); location.reload();}
              }
            );
        }