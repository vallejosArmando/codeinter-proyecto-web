
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

<form  action="<?php echo base_url() ?>/reclamo_conf/actualizar" id="formulario_personas" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="id" value="<?php echo $datos['id']?>">
    <div class="card-body">
              
              <div class="row">
    <div class="col-md-6">

    <div class="form-group">

        <fieldset >
            
            <legend class="leg">Datos Del Usuario:</legend>

          

            <div class="form-group"><label for="nombres" class="">Nombres:</label><input type="text" name="nombres" id="nombres"  class="form-control" value="<?php echo $datos['nombres']?>"></div>

            <div class="form-group"><label for="ap">Apellido paterno:</label><input type="text" name="ap" id="ap"  class="form-control" value="<?php echo $datos['ap']?>"></div>

            <div class="form-group"><label for="am">Apellido materno:</label><input type="text" name="am" id="am"  class="form-control" value="<?php echo $datos['am']?>"></div>


            <div class="form-group"><label for="telefono">Telefono:</label><input type="text" name="telefono" id="telefono"  class="form-control" value="<?php echo $datos['telefono']?>"></div>

            <div class="form-group"><label for="correo">Correo:</label><input type="text" name="correo" id="correo"  class="form-control" value="<?php echo $datos['correo']?>"></div>

            <div class="form-group"><label for="codigo_usuario">Codigo usuario:</label><input type="text" name="codigo_usuario" id="codigo_usuario" class="form-control"  value="<?php echo $datos['codigo_usuario']?>"></div>

            <div class="form-group"><label for="barrio">Barrio:</label><input type="text" name="barrio" id="barrio"  class="form-control" value="<?php echo $datos['barrio']?>"></div>

            <div class="form-group"> <label for="calle_avenida">Calle o avenida:</label><input type="text" name="calle_avenida" id="calle_avenida" class="form-control" value="<?php echo $datos['calle_avenida']?>"></div>

            <div class="form-group"><label for="entre_que_calles">Entre que calles:</label><input type="text" name="entre_que_calles" id="entre_que_calles" class="form-control" value="<?php echo $datos['entre_que_calles']?>"></div>

            <div class="form-group"><label for="numero_de_casa">Numero de casa:</label><input type="text" name="numero_de_casa" id="numero_de_casa" class="form-control" value="<?php echo $datos['numero_de_casa']?>"></div>

        </fieldset>
    </div>
    </div>
        
        <div class="col-md-6">

        <div class="form-group">

        <fieldset>
            
            <legend class="leg">Descripcion y lugar del reclamo:</legend>
            <div class="form-group"><label for="map">Mapa ubicacion:</label>
                <input type="text" name="map" id="map" class="form-control" value="<?php echo $datos['map']?>"></div>
            
            <div class="form-group"><label for="otro_recurrente">Otro recurrente:</label><input type="text" name="otro_recurrente" id="otro_recurrente" class="form-control" value="<?php echo $datos['otro_recurrente']?>"></div>
            <div class="form-group"><label for="telefono_del_recurrente">telefono:</label><input type="text" name="telefono_del_recurrente" id="telefono_del_recurrente"  class="form-control" value="<?php echo $datos['telefono_del_recurrente']?>"></div>
            <div class="form-group"><label for="tipo_de_calzada" >Tipo de calzada</label><select  name="tipo_de_calzada" id="tipo_de_calzada"  class="form-control">
                <option selected><?php echo $datos['tipo_de_calzada']?></option>
                <option value="Tierra">Tierra</option>
                <option value="Empedrado">Empedrado</option>
                <option value="Asfalto">Asfalto</option>
                <option value="Adoquin">Adoquin</option>
                <option value="Cemento">Cemento</option>
                <option value="En la acera">En la acera</option>
            </select>
            </div>
            <div class="form-group"><label for="referencias">Referencias:</label><textarea name="referencias" id="referencias"  class="form-control" ><?php echo $datos['referencias']?></textarea>
            </div>
            
           
            <div class="form-group"><label for="descripcion_del_reclamo">Descripcion:</label><textarea name="descripcion_del_reclamo" id="descripcion_del_reclamo"  class="form-control"><?php echo $datos['descripcion_del_reclamo']?></textarea>
            </div>
            <div class="form-group"><label for="fotos">Foto del reclamo:</label><input type="file" name="fotos" id="fotos" class="form-control"></div>
        </fieldset>
        </div>
              </div>
    </div></div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-warning" value="agregar">Editar</button>
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
