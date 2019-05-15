<!-- TODAVIA NO FUNCIONA A 100%-->

<?php 

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];

/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="SELECT * FROM colaboradores_prod_articulos WHERE id='$ident' AND usuario_idusuario='$usuario'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);

?>																	

                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Colaboradores de artículos</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    
                                                                    <table class="table table-info">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nombre del colaborador</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Miguel Rodríguez</td>
                                                                                <td><center><button class="btn btn-danger" onclick="">Eliminar</button></center></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table><br><hr><br>

                                                                    <center><h5><i>Agregar nuevo colaborador</i></h5></center><br>

                                                                    	<form enctype="multipart/form-data" action="" method="POST">
                                                                        <div class="form-group">
                                                                          <label for="nom_colab_art" required>Nombre(s):</label>
                                                                          <input type="text" class="form-control nom_colab_art" name="nom_colab_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="prim_ap_art" required>Primer apellido:</label>
                                                                          <input type="text" class="form-control prim_ap_art" name="prim_ap_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="seg_ap_art" required>Segundo apellido:</label>
                                                                          <input type="text" class="form-control seg_ap_art" name="seg_ap_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="origen_art" required>Origen:</label>
                                                                          <input type="text" class="form-control origen_art" name="origen_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="acciones_art" required>Acciones:</label>
                                                                          <input type="text" class="form-control acciones_art" name="acciones_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="area_art" required>Área:</label>
                                                                          <input type="text" class="form-control area_art" name="area_art" placeholder="" required>
                                                                         </div>

                                                                        <div class="form-group">
                                                                            <label for="campo_art" required>Campo:</label>
                                                                            <input type="text_art" class="form-control campo_art" name="campo_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="disciplina_art" required>Disciplina:</label>
                                                                            <input type="text" class="form-control disciplina_art" name="disciplina_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="subdisciplina_art" required>Subdisciplina:</label>
                                                                            <input type="text" class="form-control subdisciplina_art" name="subdisciplina_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="identificador_art" required>Identificador:</label>
                                                                            <input type="text" class="form-control identificador_art" name="identificador_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idthomson_colab_art" required>Researcher ID Thomson:</label>
                                                                            <input type="text" class="form-control idthomson_colab_art" name="idthomson_colab_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idarxiv_colab_art" required>arXiv ID:</label>
                                                                            <input type="text" class="form-control idarxiv_colab_art" name="idarxiv_colab_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idpubmed_colab_art" required>PubMed ID:</label>
                                                                            <input type="text" class="form-control idpubmed_colab_art" name="idpubmed_colab_art" placeholder="" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="idopen_colab_art" required>Open ID:</label>
                                                                            <input type="text" class="form-control idopen_colab_art" name="idopen_colab_art" placeholder="" required>
                                                                        </div>
                                                                        <br>
                                                                        <center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
                                                                    	</form>
                                                                    </div>