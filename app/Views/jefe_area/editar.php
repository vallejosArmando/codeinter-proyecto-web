
<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo $titulo ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($validation)){ ?>
<div class="alert alert-danger" >
<?php echo $validation->listErrors(); ?>
</div>
<?php } ?>
              <form  action="<?php echo base_url() ?>/jefe_area/actualizar" id="formulario_area" method="POST" enctype="multipart/form-data" >
              <input  type="hidden" name="id" value="<?php echo $datos['id']?>">
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Area</label>
              
        
                  <select class="form-control select2" name="id_area" id="id_area"  style="width: 100%;">
                    <option selected="selected"><?php echo $datos['id_area'] ?></option>
                    <?php foreach ($areas as $area):?> 

<option value="<?php echo $area['id'] ?>" ><?php echo $area['nombre']; ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombres" class="form-control" id="nombres" value="<?php echo $datos['nombres'] ?>" >
                  </div>
                  <div class="form-group">
                    <label for="nombre">Apellido Materno</label>
                    <input type="text" name="am" class="form-control" id="am" value="<?php echo $datos['am'] ?>" >
                  </div>
                  <div class="form-group">
                    <label for="nombre">Telefono </label>
                    <input type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $datos['telefono'] ?>" >
                  </div>
                <!-- /.form-group -->
              </div>
                    <!-- /.col -->
              <div class="col-md-6">
              
              <!-- /.form-group -->
           
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="ap">Apellido Paterno</label>
                  <input type="text" name="ap" class="form-control" id="ap" value="<?php echo $datos['ap'] ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">Cedula</label>
                  <input type="text" name="ci" class="form-control" id="ci" value="<?php echo $datos['ci']?>">
                </div>
                <div class="form-group">
                  <label for="nombre">Correo</label>
                  <input type="text" name="correo" class="form-control" id="correo" value="<?php echo $datos['correo']?>">
                </div>
                <div class="form-group">
                    <label for="nombre">Fecha de inicio</label>
                    <input type="text" name="fec_inicio" class="form-control" id="fec_inicio" value="<?php echo $datos['fec_inicio'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Fecha fin</label>
                    <input type="text" name="fec_fin" class="form-control" id="fec_fin" value="<?php echo $datos['fec_fin'] ?>">
                  </div>
            </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Editar</button>
                  <a href="<?php echo base_url()?>/jefe_area" class="btn btn-dark ">Cancelar</a> 

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
