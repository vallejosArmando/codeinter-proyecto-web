
    


<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar<small><?php echo $titulo ?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($validation)){ ?>
<div class="alert alert-danger" >
<?php echo $validation->listErrors(); ?>
</div>
<?php } ?>
              <form  action="<?php echo base_url() ?>/usuario/insertar" id="formulario_sistema" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                <label>Persona</label>
                <select class="form-control select2" name="id_persona" id="id_persona" style="width: 100%;"  value="<?php echo set_value('id_persona') ?>" >
                  <option selected="selected" >Tipo empleado</option>
                  <?php foreach ($personas as $persona):?> 

<option value="<?php echo $persona['id'] ?>" ><?php echo $persona['nombres']?></option>
<?php endforeach; ?>
                </select>
              </div>
                  <div class="form-group">
                    <label for="nom_usuario">Nombre</label>
                    <input type="text" name="nom_usuario" class="form-control" id="nom_usuario" value="<?php echo set_value('nom_usuario') ?>" >
                  </div>
                  <div class="form-group">
  <div class="row" >
  <div class ="col-12 col-sm-6" >
    <label for="usuario">Contraseña:</label>
    <input type="password" class="form-control" name="clave" id="clave" value="<?php  set_value('clave') ?>" >
  </div>
    <div class ="col-12 col-sm-6" >
    <label for="clave">Repite la contraseña:</label>
    <input type="password" class="form-control" name ="reclave" id="reclave" value="<?php echo set_value('reclave') ?>" >
  </div>
  </div>
  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/usuario" class="btn btn-dark ">Cancelar</a> 

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
