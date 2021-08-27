

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Argregar<small>Sistemas Area</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="<?php echo base_url() ?>/sistema/insertar" id="formulario_area" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre_creador">Descripcion</label>
                    <input type="text" name="nombre_creador" class="form-control" id="nombre_creador" placeholder="nombre_creador">
                  </div>
              
                  <div class="form-group">
                    <label for="logo">Descripcion</label>
                    <input type="text" name="logo" class="form-control" id="logo" placeholder="logo">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/areas" class="btn btn-dark ">Cancelar</a> 

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
