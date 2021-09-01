
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Agregar Empleados</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form id="quickForm"action="<?php echo base_url() ?>/empleados/agregar" id="formulario_empleados" method="POST" enctype="multipart/form-data"  >
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo Empleado</label>
              
        
                  <select class="form-control select2" name="id_tipo_empleado" id="id_tipo_empleado"  style="width: 100%;">
                    <option selected="selected" placeholder="Ingrese nombre "  ></option>
                      <?php foreach ($datos['tipo'] as $data):?> 

                    <option value="<?php echo $data->id_tipo_empleado ?>" ><?php echo $data->nombre; ?></option>
                    <?php endforeach; ?>

                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Apellido Materno</label>
                    <input type="text" name="am" class="form-control" id="am" value="" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Telefono fijo</label>
                    <input type="text" name="tel_fijo" class="form-control" id="tel_fijo" value="" placeholder="Ingrese nombre ">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Areas</label></label>
                  <select class="form-control select2" name="id_area" id="id_area" style="width: 100%;">
                    <option selected="selected">Area</option>
                    <?php foreach ($datos['area'] as $data):?> 

<option value="<?php echo $data->id_area ?>" ><?php echo $data->nombre; ?></option>
<?php endforeach; ?>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="nombre">Apellido Paterno</label>
                    <input type="text" name="ap" class="form-control" id="ap" value="" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Cedula</label>
                    <input type="text" name="ci" class="form-control" id="ci" value="" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Telefono Celular</label>
                    <input type="text" name="tel_cel" class="form-control" id="tel_cel" value="" placeholder="Ingrese nombre ">
                  </div>
              </div>
              <!-- /.col -->
            </div>
         
            <!-- /.row -->
            <div class="form-group">
                    <label for="nombre">Direccion</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" value="" placeholder="Ingrese nombre ">
                  </div>
          </div>
            <!-- /.row -->
          </div>
        
          <!-- /.card-body -->
          <div class="card-footer">
          <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/empleados" class="btn btn-dark ">Cancelar</a> 
          </div>
                    </form>
        </div>
