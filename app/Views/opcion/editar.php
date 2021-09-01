

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
              <form  action="<?php echo base_url() ?>/opcion/actualizar" id="formulario_opciones" method="POST" enctype="multipart/form-data" >
              <input type="hidden" name="id" value="<?php echo $datos['id']?>">
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Grupo</label>
              
        
                  <select class="form-control select2" name="id_grupo" id="id_grupo"  style="width: 100%;">
                    <option selected="selected" ><?php echo $datos['id_grupo'] ?></option>
                    <?php foreach ($grupos as $grupo):?> 

<option value="<?php echo $grupo['id'] ?>" ><?php echo $grupo['grupo']; ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $datos['nombre']?>" >
                  </div>
                  <div class="form-group">
                    <label for="op_url">URL</label>
                    <input type="text" name="op_url" class="form-control" id="op_url" value="<?php echo $datos['op_url']?>" >
                  </div>
                  <div class="form-group">

                  <label for="mostrar">Mostrar</label>

                  <select class="form-control select2" name="mostrar" id="mostrar"  style="width: 100%;"  >
                    <option selected="selected"   >Mostrar</option>

<option value="si" >si</option>
<option value="no" >no</option>



                  </select>
                  </div>
                  <div class="form-group">
                    <label for="orden">Orden</label>
                    <input type="text" name="orden" class="form-control" id="orden" value="<?php echo $datos['orden']?>" >
                  </div>
                <!-- /.form-group -->
              </div>
                    <!-- /.col -->
         
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Editar</button>
                  <a href="<?php echo base_url()?>/opcion" class="btn btn-dark ">Cancelar</a> 

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
