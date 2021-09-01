
     

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar<small><?php echo $titulo ?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="<?php echo base_url() ?>/acceso/actualizar" id="formulario_accesos" method="POST" enctype="multipart/form-data" >
              <input type="hidden" name="id" value="<?php echo $datos['id']?>">
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Grupo</label>
              
        
                  <select class="form-control select2" name="id_grupo" id="id_grupo"  style="width: 100%;">
                    <option selected="selected" placeholder="Ingrese grupo "  ><?php echo $datos['id_grupo']?></option>
                    <?php foreach ($grupos as $data):?> 

<option value="<?php echo $data['id'] ?>" ><?php echo $data['grupo']; ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <div class="form-group">
                  <label>Opcion</label>
              
        
                  <select class="form-control select2" name="id_opcion" id="id_opcion"  style="width: 100%;">
                    <option selected="selected" placeholder="Ingrese opcion "  ><?php echo $datos['id_opcion']?></option>
                    <?php foreach ($opciones as $opcion):?> 

<option value="<?php echo $opcion['id'] ?>" ><?php echo $opcion['nombre']; ?></option>
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
                  <?php foreach ($roles as $r):?> 

<option value="<?php echo $r['id'] ?>" ><?php echo $r['rol']; ?></option>
<?php endforeach; ?>
                </select>
              </div>
              <!-- /.form-group -->
              
                <div class="form-group">
                <label>Permido</label>
                <select class="form-control select2" name="permisos" id="permisos" style="width: 100%;">
                  <option selected="selected">permisoso</option>
             

<option value=""></option>

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
                  <a href="<?php echo base_url()?>/acceso" class="btn btn-dark ">Cancelar</a> 

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
