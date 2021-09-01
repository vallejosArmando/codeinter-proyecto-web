

<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Argregar<small>Areagar Area</small></h3>
      </div>
     
      <form action="<?php echo base_url() ?>/empleados/borrar/<?php echo $datos['id']; ?>" id="formulario_area" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
           
              <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_tipo" id="id_tipo" style="width: 100%;" value="<?php echo $datos['id_tipo'] ?>">
                  <option selected="selected"><?php echo $datos['id_tipo'] ?></option>
                  <?php foreach ($datos['tipo'] as $data) : ?>

                    <option value="<?php echo $data->id_tipo ?>"><?php echo $data->nombre ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
           
              <div class="form-group">
                <label for="">Apellido Paterno</label>
                <input type="text" name="nombres" class="form-control" id="nombres" value="<?php echo $datos['nombres'] ?>" placeholder="Ingrese nombre ">
              </div>
              <div class="form-group">
                <label for="">Apellido Materno</label>
                <input type="text" name="am" class="form-control" id="am" value="<?php echo $datos['am'] ?>" placeholder="Ingrese nombre ">
              </div>
              <div class="form-group">
                <label for="">Telefono fijo</label>
                <input type="text" name="tel_fijo" class="form-control" id="tel_fijo" value="<?php echo $datos['tel_fijo'] ?>" placeholder="Ingrese nombre ">
              </div>
           
            </div>
            
            <div class="col-md-6">

           
              <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_area" id="id_area" style="width: 100%;">
                  <option selected="selected"value="<?php echo $datos['id_area'] ?>"><?php echo $datos['id_area'] ?></option>
                  <?php foreach ($datos['area'] as $data) : ?>

                    <option value="<?php echo $data->id_area ?>"><?php echo $data->nombre ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
           
              <div class="form-group">
                <label for="">Apellido Paterno</label>
                <input type="text" name="ap" class="form-control" id="ap" value="<?php echo $datos['ap'] ?>" placeholder="Ingrese nombre ">
              </div>
              <div class="form-group">
                <label for="">Cedula</label>
                <input type="text" name="ci" class="form-control" id="ci" value="<?php echo $datos['ci'] ?>" placeholder="Ingrese nombre ">
              </div>
              <div class="form-group">
                <label for="nombre">Telefono Celular</label>
                <input type="text" name="tel_cel" class="form-control" id="tel_cel" value="<?php echo $datos['tel_cel'] ?>" placeholder="Ingrese nombre ">
              </div>
              <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $datos['direccion'] ?>" placeholder="Ingrese nombre ">
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="editar"> <a href="<?php echo base_url() ?>/empleados" class="btn btn-dark ">Cancelar</a>

        </div>
      </form>
    </div>
  </div>

  <div class="col-md-6">

  </div>
</div>
