
    


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
              <form  action="<?php echo base_url() ?>/usurol/insertar" id="formulario_sistema" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                <label>Usuario</label>
                <select class="form-control select2" name="id_usuario" id="id_usuario" style="width: 100%;"  value="<?php echo set_value('id_usuario') ?>" >
                  <option selected="selected" >Usuario</option>
                  <?php foreach ($usuarios as $usu):?> 

<option value="<?php echo $usu['id'] ?>" ><?php echo $usu['nom_usuario']?></option>
<?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Rol</label>
                <select class="form-control select2" name="id_rol" id="id_rol" style="width: 100%;"  value="<?php echo set_value('id_rol') ?>" >
                  <option selected="selected" >Rol</option>
                  <?php foreach ($roles as $ro):?> 

<option value="<?php echo $ro['id'] ?>" ><?php echo $ro['rol']?></option>
<?php endforeach; ?>
                </select>
              </div>
                
           
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/usurol" class="btn btn-dark ">Cancelar</a> 

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
