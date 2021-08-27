

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Argregar<small>Areagar Area</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="<?php echo base_url() ?>/opciones/borrar/<?php echo $datos['id']?>" id="formulario_opciones" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo Empleado</label>
              
        
                  <select class="form-control select2" name="id_grupo" id="id_grupo"  style="width: 100%;">
                    <option selected="selected" placeholder="Ingrese grupo "  ><?php echo $datos['id_grupo'] ?></option>
                    <?php foreach ($datos['grupo'] as $data):?> 

<option value="<?php echo $data->id_grupo ?>" ><?php echo $data->grupo; ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $datos['nombre']?>" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre">URL</label>
                    <input type="text" name="op_url" class="form-control" id="op_url" value="<?php echo $datos['op_url']?>" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="mostrar">Mostrar</label>
                    <input type="text" name="mostrar" class="form-control" id="mostrar" value="<?php echo $datos['mostrar']?>" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="orden">Mostrar</label>
                    <input type="text" name="orden" class="form-control" id="orden" value="<?php echo $datos['orden']?>" placeholder="Ingrese orden ">
                  </div>
                <!-- /.form-group -->
              </div>
                    <!-- /.col -->
         
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                  <a href="<?php echo base_url()?>/opciones" class="btn btn-dark ">Cancelar</a> 

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
