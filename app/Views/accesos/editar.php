
     

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar<small>editar acceso</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="<?php echo base_url() ?>/accesos/editar/<?php echo $datos['id']?>" id="formulario_accesos" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Grupo</label>
              
        
                  <select class="form-control select2" name="id_grupo" id="id_grupo"  style="width: 100%;">
                    <option selected="selected" placeholder="Ingrese grupo "  ><?php echo $datos['id_grupo']?></option>
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
                <label>Rol</label></label>
                <select class="form-control select2" name="id_rol" id="id_rol" style="width: 100%;">
                  <option selected="selected"><?php echo $datos['id_rol']?></option>
                  <?php foreach ($datos['rol'] as $data):?> 

<option value="<?php echo $data->id_rol ?>" ><?php echo $data->rol; ?></option>
<?php endforeach; ?>
                </select>
              </div>
              <!-- /.form-group -->
              
                <div class="form-group">
                <label>Permido</label>
                <select class="form-control select2" name="permisos" id="permisos" style="width: 100%;">
                  <option selected="selected"><?php echo $datos['permisos']?></option>
                  <?php foreach ($datos['permisos'] as $data):?> 

<option value="<?php echo $data->id_accceso ?>" ><?php echo $data->perisos; ?></option>

<?php endforeach; ?>
<option value="a">a</option>
<option value="x">x</option>
                </select>
              </div>
            </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Editar</button>
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
