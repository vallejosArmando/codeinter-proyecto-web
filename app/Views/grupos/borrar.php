

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Eliminar<small>Eliminar Area</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="<?php echo base_url() ?>/grupos/borrar/<?php echo $datos['id'];?>" id="formulario_grupos" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="grupo">Nombre</label>
                    <input type="text" name="grupo" class="form-contgrupo" id="grupo" value="<?php echo $datos['grupo'];?>" placeholder="Ingrese grupo ">
                  </div>
                 
              
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                <input type="submit" class="btn btn-danger" value="Eliminar">
                <a href="<?php echo base_url()?>/grupos" class="btn btn-dark ">Cancelar</a> 

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
