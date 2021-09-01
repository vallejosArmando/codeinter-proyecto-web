<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Argregar<small><?php echo $titulo ?></small></h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <?php if(isset($validation)){ ?>
<div class="alert alert-danger" >
<?php echo $validation->listErrors(); ?>
</div>
<?php } ?>
      <form action="<?php echo base_url() ?>/acceso/insertar" id="formulario_accesos" method="POST" enctype="multipart/form-data">
        <div class="card-body">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Grupo</label>


                <select class="form-control select2" name="id_grupo" id="id_grupo" style="width: 100%;">
                  <option selected="selected"></option>
                  <?php foreach ($grupos as $grupo) : ?>

                    <option value="<?php echo $grupo['id'] ?>"><?php echo $grupo['grupo']; ?></option>
                  <?php endforeach; ?>

                </select>
              </div>
              <div class="form-group">
                <label>Roles</label>
                <select class="form-control select2" name="id_rol" id="id_rol" style="width: 100%;">
                  <option selected="selected"></option>
                  <?php foreach ($roles as $rr) : ?>

                    <option value="<?php echo $rr['id'] ?>"><?php echo $rr['rol']; ?></option>
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
                <label>Opcion</label>


                <select class="form-control select2" name="id_opcion" id="id_opcion" style="width: 100%;">
                  <option selected="selected"></option>
                  <?php foreach ($opciones as $opcion) : ?>

                    <option value="<?php echo $opcion['id'] ?>"><?php echo $opcion['nombre']; ?></option>
                  <?php endforeach; ?>

                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Permiso</label>
                <select class="form-control select2" name="permisos" id="permisos" style="width: 100%;">
                  <option selected="selected"></option>

                    <option?></option>

                  
                  <option value="a">a</option>
                  <option value="x">x</option>
                </select>
              </div>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Agregar</button>
          <a href="<?php echo base_url() ?>/acceso" class="btn btn-dark ">Cancelar</a>

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