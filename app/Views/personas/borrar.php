

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
      <form action="<?php echo base_url() ?>/personas/borrar/<?php echo $datos['id']; ?>" id="formulario_personas" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <!-- /.form-group -->

              <!-- /.form-group -->
              <div class="form-group">
                <label for="">Cedula</label>
                <input type="text" name="ci" class="form-control" id="ci" value="<?php echo $datos['ci'] ?>" placeholder="Ingrese nombre ">
              </div>
              <div class="form-group">
                <label for="">Apellido Paterno</label>
                <input type="text" name="ap" class="form-control" id="ap" value="<?php echo $datos['ap'] ?>" placeholder="Ingrese nombre ">
              </div>
              <div class="form-group">
                <label for="nombre">Telefono </label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $datos['telefono'] ?>" placeholder="Ingrese nombre ">
              </div>

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">

              <!-- /.form-group -->

              <!-- /.form-group -->
              <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombres" class="form-control" id="nombres" value="<?php echo $datos['nombres'] ?>" placeholder="Ingrese nombre ">
              </div>
              <div class="form-group">
                <label for="">Apellido Materno</label>
                <input type="text" name="am" class="form-control" id="am" value="<?php echo $datos['am'] ?>" placeholder="Ingrese nombre ">
              </div>

              <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $datos['direccion'] ?>" placeholder="Direccion ">
              </div>
              <div class="form-group">
                <label for="">Genero</label>
                <input type="text" name="genero" class="form-control" id="genero" value="<?php echo $datos['genero'] ?>" placeholder="Ingrese nombre ">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="submit" class="btn btn-danger" value="Eliminar"> <a href="<?php echo base_url() ?>/personas" class="btn btn-dark ">Cancelar</a>

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
