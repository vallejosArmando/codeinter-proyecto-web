

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
              <form  action="<?php echo base_url() ?>/opciones/agregar" id="formulario_opciones" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
              
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Grupo</label>
              
        
                  <select class="form-control select2" name="id_grupo" id="id_grupo"  style="width: 100%;">
                    <option selected="selected" placeholder="Ingrese grupo "  ></option>
                    <?php foreach ($datos['grupos'] as $data):?> 

<option value="<?php echo $data->id ?>" ><?php echo $data->grupo ?></option>
<?php endforeach; ?>

                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre">URL</label>
                    <input type="text" name="op_url" class="form-control" id="op_url" value="" placeholder="Ingrese nombre ">
                  </div>
                  <label for="mostrar">Mostrar</label>

<select class="form-control select2" name="mostrar" id="mostrar"  style="width: 100%;">
  <option selected="selected" placeholder="mostrar "  ></option>

<option value="si" >si</option>
<option value="no" >no</option>



</select>
                  <div class="form-group">
                    <label for="orden">Orden</label>
                    <input type="text" name="orden" class="form-control" id="orden" value="" placeholder="Ingrese orden ">
                  </div>
                <!-- /.form-group -->
              </div>
                    <!-- /.col -->
         
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/opciones" class="btn btn-dark ">Cancelar</a> 

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
