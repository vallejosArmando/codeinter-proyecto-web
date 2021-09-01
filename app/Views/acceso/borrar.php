
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
              <form  action="<?php echo base_url() ?>/accesos/borrar/<?php echo $datos['id']?>" id="formulario_accesos" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Grupo</label>
              
        
                  <select class="form-control select2" name="id_grupo" id="id_grupo"  style="width: 100%;">
                    <option selected="selected" placeholder="Ingrese nombre "  ><?php echo $datos['id_grupo']?></option>
                    <?php foreach ($datos['grupos'] as $data):?> 

<option value="<?php echo $data->id_grupo ?>" ><?php echo $data->grupo; ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <div class="form-group">
                  <label>Opcion</label>
              
        
                  <select class="form-control select2" name="id_opcion" id="id_opcion"  style="width: 100%;">
                    <option selected="selected" placeholder="Ingrese opcion "  ><?php echo $datos['id_opcion']?></option>
                    <?php foreach ($datos['opcion'] as $data):?> 

<option value="<?php echo $data->id_opcion ?>" ><?php echo $data->nombre; ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <!-- /.form-group -->
              
                <!-- /.form-group -->
              </div>
                    <!-- /.col -->
              <div class="col-md-6">
              
              <!-- /.form-group -->
              <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_rol" id="id_rol" style="width: 100%;">
                  <option selected="selected"><?php echo $datos['id_rol']?></option>
                  <?php foreach ($datos['rol'] as $data):?> 

<option value="<?php echo $data->id_rol ?>" ><?php echo $data->rol; ?></option>
<?php endforeach; ?>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="permisos">Permisos</label>
                  <input type="text" name="permisos" class="form-control" id="permisos" value="<?php echo $datos['permisos']?>" placeholder="Ingrese permisos ">
                </div>
             
            </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                  <a href="<?php echo base_url()?>/accesos" class="btn btn-dark ">Cancelar</a> 

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
