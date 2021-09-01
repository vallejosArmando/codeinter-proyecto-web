
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
              <form  action="<?php echo base_url() ?>/empleado/insertar" id="formulario_area" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo Empleado</label>
              
        
                  <select class="form-control select2" name="id_tipo" id="id_tipo"  style="width: 100%;">
                    <option selected="selected"   ></option>
                    <?php foreach ($tipos as $tipo):?> 

<option value="<?php echo $tipo['id'] ?>" ><?php echo $tipo['nombre']; ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombres" class="form-control" id="nombres" value="" placeholder="Ingrese nombre ">
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
                  <?php foreach ($areas as $area):?> 

<option value="<?php echo $area['id'] ?>" ><?php echo $area['nombre']; ?></option>
<?php endforeach; ?>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="ap">Apellido Paterno</label>
                  <input type="text" name="ap" class="form-control" id="ap" >
                </div>
                <div class="form-group">
                  <label for="nombre">Cedula</label>
                  <input type="text" name="ci" class="form-control" id="ci" >
                </div>
                <div class="form-group">
                  <label for="nombre">Telefono Celular</label>
                  <input type="text" name="tel_cel" class="form-control" id="tel_cel" >
                </div>
                <div class="form-group">
                    <label for="nombre">Direccion</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" >
                  </div>
            </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/empleado" class="btn btn-dark ">Cancelar</a> 

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
