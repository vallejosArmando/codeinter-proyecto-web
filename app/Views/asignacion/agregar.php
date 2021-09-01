
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
              <form  action="<?php echo base_url() ?>/asignacion/insertar" id="formulario_area" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo Empleado</label>
              
        
                  <select class="form-control select2" name="id_conf" id="id_conf"  style="width: 100%;">
                    <option selected="selected"   ></option>
                    <?php foreach ($confir as $conf):?> 

<option value="<?php echo $conf['id'] ?>" ><?php echo $conf['nombres']; ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="nombre">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" id="descripcion" value="">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Fecha de inicio</label>
                    <input type="text" name="fec_inicio" class="form-control" id="fec_inicio" >
                  </div>
                  <div class="form-group">
                    <label for="nombre">Fecha fin</label>
                    <input type="text" name="fec_fin" class="form-control" id="fec_fin" >
                  </div>
                <!-- /.form-group -->
              </div>
                    <!-- /.col -->
              <div class="col-md-6">
              
              <!-- /.form-group -->
              <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_empleado" id="id_empleado" style="width: 100%;">
                  <option selected="selected">Area</option>
                  <?php foreach ($empleados as $empleado):?> 

<option value="<?php echo $empleado['id'] ?>" ><?php echo $empleado['nombre']; ?></option>
<?php endforeach; ?>
                </select>
              </div>
              <!-- /.form-group -->
          
            </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/asignacion" class="btn btn-dark ">Cancelar</a> 

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
