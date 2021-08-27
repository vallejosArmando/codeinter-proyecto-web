

<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Argregar<small>Areagar Area</small></h3>
      </div>
     
      <form action="<?php echo base_url() ?>/usuarioroles/borrar/<?php echo $datos['id']; ?>" id="formulario_area" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
           
              <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_usuario" id="id_usuario" style="width: 100%;" value="<?php echo $datos['id_usuario'] ?>">
                  <option selected="selected"><?php echo $datos['id_usuario'] ?></option>
                  <?php foreach ($datos['usuario'] as $data) : ?>

                    <option value="<?php echo $data->id_usuario ?>"><?php echo $data->nom_usuario ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
           
           
           
            </div>
            
            <div class="col-md-6">

           
              <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_rol" id="id_rol" style="width: 100%;">
                  <option selected="selected"value="<?php echo $datos['id_rol'] ?>"><?php echo $datos['id_rol'] ?></option>
                  <?php foreach ($datos['rol'] as $data) : ?>

                    <option value="<?php echo $data->id_rol ?>"><?php echo $data->rol ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
           
           
            </div>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="editar"> <a href="<?php echo base_url() ?>/usuarioroles" class="btn btn-dark ">Cancelar</a>

        </div>
      </form>
    </div>
  </div>

  <div class="col-md-6">

  </div>
</div>
