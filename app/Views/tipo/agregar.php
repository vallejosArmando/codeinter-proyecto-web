


<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar<small>AgregarTipo Empelados</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($validation)){ ?>
<div class="alert alert-danger" >
<?php echo $validation->listErrors(); ?>
</div>
<?php } ?>
              <form  action="<?php echo base_url() ?>/tipo/insertar" id="formulario_sistema" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" >
                  </div>
                  <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" id="descripcion">
                  </div>
               
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/tipo" class="btn btn-dark ">Cancelar</a> 

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
