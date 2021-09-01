
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
              <form  action="<?php echo base_url() ?>/sistema/actualizar" id="formulario_sistema" method="POST" enctype="multipart/form-data" >
              <input type="hidden" name="id" value="<?php echo $datos['id'];?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $datos['nombre'];?>" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre_creador">Nombre del Creador</label>
                    <input type="text" name="nombre_creador" class="form-control" id="nombre_creador" value="<?php echo $datos['nombre_creador'];?>" placeholder="nombre_creador">
                  </div>
                  <div class="form-group">
                    <label for="logo">Logo del Sistema</label>
                    <br><img  class="img-thumbnail" src=" <?= base_url()?>/fotos/<?= $datos['logo'];  ?> " alt="" width="60">
    <br>
                    <input type="file" name="logo" class="form-control" id="logo">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                <input type="submit" class="btn btn-primary" value="editar">
                <a href="<?php echo base_url()?>/sistema" class="btn btn-dark ">Cancelar</a> 

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
