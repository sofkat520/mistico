<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Oferta <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Titulo</th>
                            <th>Cuerpo</th>
                            <th>Incluye</th>
                            <th>Imagen</th>
                            <th>PDF</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Titulo</th>
                            <th>Cuerpo</th>
                            <th>Incluye</th>
                            <th>Imagen</th>
                            <th>PDF</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Titulo(*):</label>
                            <input type="hidden" name="idoferta" id="idoferta">
                            <input type="text" maxlength="500" class="form-control" name="titulo" id="titulo" maxlength="100" placeholder="Titulo" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>¿Cuantos items contendra la oferta?:</label><br>
                            <select name="item" id="item" onChange="Citem(this.value)">
                              <option value="0">--- Seleccione la cantidad ---</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                            </select>     
                          </div>
                          <div id="1" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>1(*):</label>
                            <input type="text" maxlength="500" class="form-control" name="uno" id="uno" maxlength="100" placeholder="¿Que incluye?">
                          </div>
                          <div id="2" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>2(*):</label>
                            <input type="text" maxlength="500" class="form-control" name="dos" id="dos" maxlength="100" placeholder="¿Que incluye?">
                          </div>
                          <div id="3" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>3(*):</label>
                            <input type="text" maxlength="500" class="form-control" name="tres" id="tres" maxlength="100" placeholder="¿Que incluye?">
                          </div>
                          <div id="4" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>4(*):</label>
                            <input type="text" maxlength="500" class="form-control" name="cuatro" id="cuatro" maxlength="100" placeholder="¿Que incluye?">
                          </div>
                          <div id="5" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>5(*):</label>
                            <input type="text" maxlength="500" class="form-control" name="cinco" id="cinco" maxlength="100" placeholder="¿Que incluye?">
                          </div>
                          <div id="6" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>6(*):</label>
                            <input type="text" maxlength="500" class="form-control" name="seis" id="seis" maxlength="100" placeholder="¿Que incluye?">
                          </div>
                          <div id="7" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>7(*):</label>
                            <input type="text" maxlength="500" class="form-control" name="siete" id="siete" maxlength="100" placeholder="¿Que incluye?">
                          </div>
                          <div id="8" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>8(*):</label>
                            <input type="text" maxlength="500" class="form-control" name="ocho" id="ocho" maxlength="100" placeholder="¿Que incluye?">
                          </div>
                          <script type="text/javascript" src="scripts/nicEdit.js" ></script>
                          <script type="text/javascript">
                          bkLib.onDomLoaded(function() { 
                            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                           });
                          </script>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen (*):</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <input type="hidden" name="imagenactual" id="imagenactual">
                            <div class="container">
                            <progress id="progress-bar1" value="0" max="100"></progress>  <a id="btn_pr" class="btn btn-warning" onclick="limpiar_prog(1)">X</a><br>
                            <label for="progress-bar">0%</label> 
                            </div>
                            <img src="" width="150px" height="120px" id="imagenmuestra">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Archivo :</label> <input type="text" name="archivol" id="archivol" disabled="disabled"><br>
                            <label>(Archivos mayores a 5MB podrian tener problemas en la carga)</label>
                            <input type="file" class="form-control" name="archivo" id="archivo" >
                            <div class="container">
                            <progress id="progress-bar12" value="0" max="100"></progress>  <a id="btn_pra" class="btn btn-warning" onclick="limpiar_prog(2)">X</a><br>
                            <label for="progress-bar1">0%</label>
                            </div>
                            <input type="hidden" name="archivoactual" id="archivoactual">                        
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label>Cuerpo(*):</label>
                          <textarea name="editor" id="editor" style="width: 750%; height: 100px;" ></textarea>
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                        
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php

require 'footer.php';
?>

<script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.PrintArea.js"></script>
<script type="text/javascript" src="scripts/oferta.js"></script>

                          <script>
                          const file1 = document.getElementById('imagen');
                          const file2 = document.getElementById('archivo');
                          
                          const progress1 = document.getElementById('progress-bar1');
                          const progress2 = document.getElementById('progress-bar12');
                          file1.addEventListener('change', function() {
                          $("#btn_pr").show();
                          const userImg = file1.files[0];
                          const payload = new FormData();
                          payload.append('user-image', userImg, 'user-image.jpg');
                          const req = new XMLHttpRequest();
                          req.open('POST', 'https://httpbin.org/post');
                          req.upload.addEventListener('progress', function(e) {
                          const percentComplete = (e.loaded / e.total)*100; 
                          progress1.setAttribute('value', percentComplete); 
                          progress1.nextElementSibling.nextElementSibling.nextElementSibling.innerText = Math.round(percentComplete)+"%";
                          })
                          req.addEventListener('load', function() {
                          console.log(req.status); 
                          console.log(req.response); 
                          })
                          req.send(payload); 
                          });
                          file2.addEventListener('change', function() {
                          $("#btn_pra").show();
                          const userImg = file2.files[0];
                          const payload = new FormData();
                          payload.append('user-image', userImg, 'user-image.jpg'); 
                          const req = new XMLHttpRequest(); 
                          req.open('POST', 'https://httpbin.org/post'); 
                          req.upload.addEventListener('progress', function(e) {
                          const percentComplete = (e.loaded / e.total)*100; // Calculate percentage complete via "e" object
                          progress2.setAttribute('value', percentComplete); // Update value of progress HTML element
                          progress2.nextElementSibling.nextElementSibling.nextElementSibling.innerText = Math.round(percentComplete)+"%"; // Prints progress in progress element label as well
                          })
                          req.addEventListener('load', function() {
                          console.log(req.status); 
                          console.log(req.response); 
                          })
                          req.send(payload); 
                          });
                         

                          </script>
<?php 
}
ob_end_flush();
?>