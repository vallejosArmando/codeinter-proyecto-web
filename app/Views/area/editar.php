

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar<small>Editar Sitema</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="<?php echo base_url() ?>/area/actualizar" id="formulario_area" method="POST" enctype="multipart/form-data" >

              <input type="hidden" name="id" value="<?php echo $datos['id'];?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $datos['nombre'];?>" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?php echo $datos['descripcion'];?>" placeholder="descripcion">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                <input type="submit" class="btn btn-primary" value="editar">
                <a href="<?php echo base_url()?>/area" class="btn btn-dark ">Cancelar</a> 

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
