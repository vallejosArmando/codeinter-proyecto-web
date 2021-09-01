
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Argregar<small><?php echo $titulo ?></small></h3>
      </div>
      <?php if(isset($validation)){ ?>
<div class="alert alert-danger" >
<?php echo $validation->listErrors(); ?>
</div>
<?php } ?>
      <form action="<?php echo base_url() ?>/empleado/actualizar" id="formulario_area" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $datos['id']?>">
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
           
              <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_tipo" id="id_tipo" style="width: 100%;" >
                  <option selected="selected">Tipo de Empleado</option>
                  <?php foreach ($tipos as $tipo) : ?>

                    <option value="<?php echo $tipo['id'] ?>"><?php echo $tipo['nombre'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
           
              <div class="form-group">
                <label for="">Apellido Paterno</label>
                <input type="text" name="nombres" class="form-control" id="nombres" value="<?php echo $datos['nombres'] ?>" >
              </div>
              <div class="form-group">
                <label for="">Apellido Materno</label>
                <input type="text" name="am" class="form-control" id="am" value="<?php echo $datos['am'] ?>" >
              </div>
              <div class="form-group">
                <label for="">Telefono fijo</label>
                <input type="text" name="tel_fijo" class="form-control" id="tel_fijo" value="<?php echo $datos['tel_fijo'] ?>" >
              </div>
           
            </div>
            
            <div class="col-md-6">

           
              <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_area" id="id_area" style="width: 100%;">
                  <option selected="selected">Areas</option>
                  <?php foreach ($areas as $area) : ?>

                    <option value="<?php echo $area['id'] ?>"><?php echo $area['nombre'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
           
              <div class="form-group">
                <label for="">Apellido Paterno</label>
                <input type="text" name="ap" class="form-control" id="ap" value="<?php echo $datos['ap'] ?>" >
              </div>
              <div class="form-group">
                <label for="">Cedula</label>
                <input type="text" name="ci" class="form-control" id="ci" value="<?php echo $datos['ci'] ?>" >
              </div>
              <div class="form-group">
                <label for="nombre">Telefono Celular</label>
                <input type="text" name="tel_cel" class="form-control" id="tel_cel" value="<?php echo $datos['tel_cel'] ?>" >
              </div>
              <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $datos['direccion'] ?>" >
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="editar"> <a href="<?php echo base_url() ?>/empleado" class="btn btn-dark ">Cancelar</a>

        </div>
      </form>
    </div>
  </div>

  <div class="col-md-6">

  </div>
</div>
