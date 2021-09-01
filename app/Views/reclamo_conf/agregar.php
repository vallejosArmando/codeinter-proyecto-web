<style media="screen">
    #uploadForm,
    #imagePreview{
      width: 720px;
      margin: 0;
    }
    img{
      
      max-width: 250px;
      height: 180px;

    }
    </style>
<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Argregar<small><?php echo $titulo ?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($validation)){ ?>
<div class="alert alert-danger" >
<?php echo $validation->listErrors(); ?>
</div>
<?php } ?>

<form  action="<?php echo base_url() ?>/reclamo_conf/insertar" id="formulario_personas" method="POST" enctype="multipart/form-data" >
    <div class="card-body">
              
              <div class="row">
    <div class="col-md-6">

    <div class="form-group">

        <fieldset >
            
            <legend class="leg">Datos Del Usuario:</legend>

          

            <div class="form-group"><label for="nombres" class="">Nombres:</label><input type="text" name="nombres" id="nombres" placeholder=""  class="form-control" ></div>

            <div class="form-group"><label for="ap">Apellido paterno:</label><input type="text" name="ap" id="ap"  class="form-control" ></div>

            <div class="form-group"><label for="am">Apellido materno:</label><input type="text" name="am" id="am"  class="form-control"></div>


            <div class="form-group"><label for="telefono">Telefono:</label><input type="text" name="telefono" id="telefono"  class="form-control" placeholder="0000000"></div>

            <div class="form-group"><label for="correo">Correo:</label><input type="text" name="correo" id="correo"  class="form-control" placeholder="@gmail.com" ></div>

            <div class="form-group"><label for="codigo_usuario">Codigo usuario:</label><input type="text" name="codigo_usuario" id="codigo_usuario" class="form-control"  placeholder="0000"></div>

            <div class="form-group"><label for="barrio">Barrio:</label><input type="text" name="barrio" id="barrio"  class="form-control"></div>

            <div class="form-group"> <label for="calle_avenida">Calle o avenida:</label><input type="text" name="calle_avenida" id="calle_avenida" class="form-control"></div>

            <div class="form-group"><label for="entre_que_calles">Entre que calles:</label><input type="text" name="entre_que_calles" id="entre_que_calles" class="form-control"></div>

            <div class="form-group"><label for="numero_de_casa">Numero de casa:</label><input type="text" name="numero_de_casa" id="numero_de_casa" class="form-control" placeholder="00000"></div>

        </fieldset>
    </div>
    </div>
        
        <div class="col-md-6">

        <div class="form-group">

        <fieldset>
            
            <legend class="leg">Descripcion y lugar del reclamo:</legend>
            <div class="form-group"><label for="map">Mapa ubicacion:</label>
                <input type="text" name="map" id="map" class="form-control"></div>
                <div class="form-group">

                  <label>Reclamos</label>
              
        <select class="form-control select2" name="id_reclamo" id="id_reclamo"  style="width: 100%;">
                    <option selected="selected" ></option>
                    <?php foreach ($reclamos as $reclamo):?> 

<option value="<?php echo $reclamo['id'] ?>" ><?php echo $reclamo['nombres'] ?></option>
<?php endforeach; ?>

                  </select>
                </div>
            <div class="form-group"><label for="otro_recurrente">Otro recurrente:</label><input type="text" name="otro_recurrente" id="otro_recurrente" class="form-control"></div>
            <div class="form-group"><label for="telefono_del_recurrente">telefono:</label><input type="text" name="telefono_del_recurrente" id="telefono_del_recurrente"  class="form-control"placeholder="Telefono del recurrente"></div>
            <div class="form-group"><label for="tipo_de_calzada">Tipo de calzada:</label><select  name="tipo_de_calzada" id="tipo_de_calzada"  class="form-control">
                <option selected>..........</option>
                <option value="Tierra">Tierra</option>
                <option value="Empedrado">Empedrado</option>
                <option value="Asfalto">Asfalto</option>
                <option value="Adoquin">Adoquin</option>
                <option value="Cemento">Cemento</option>
                <option value="En la acera">En la acera</option>
            </select>
            </div>
            <div class="form-group"><label for="referencias">Referencias:</label><textarea name="referencias" id="referencias" placeholder="Escribe aquí las referencias para llegar al lugar "  class="form-control" ></textarea>
            </div>
            
           
            <div class="form-group"><label for="descripcion_del_reclamo">Descripcion:</label><textarea name="descripcion_del_reclamo" id="descripcion_del_reclamo"  class="form-control"placeholder="Escribe aqui el problema del reclamo"></textarea>
            </div>
            <div id="div"><label for="fotos">Foto del reclamo:</label><input type="file" name="fotos" id="fotos"></div>

            <div id="imagePreview" ></div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <script type="text/javascript">
            (function(){
              function filePreview(input){
                if(input.files && input.files[0]){
                  var reader =new FileReader();
                  reader.onload= function(e){
                    $('#imagePreview').html("<img src='"+e.target.result+"'/>")
                  }
                  reader.readAsDataURL(input.files[0]);
                }
              }
              $('#fotos').change(function(){
                filePreview(this);
              })
            })();
            </script>
        </fieldset>
        </div>
              </div>
    </div></div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" value="agregar">Agregar</button>
                <a href="<?php echo base_url()?>/reclamo_conf" class="btn btn-dark ">Cancelar</a> 

                </div>
            
    </form>
    </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
