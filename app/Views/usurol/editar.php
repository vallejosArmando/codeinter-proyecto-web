
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Editar<small><?php echo $titulo ?></small></h3>
      </div>
      <?php if(isset($validation)){ ?>
<div class="alert alert-danger" >
<?php echo $validation->listErrors(); ?>
</div>
<?php } ?>
      <form action="<?= base_url();?>/usurol/actualizar" 
      id="formulario_area" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?=$datos['nom_usuario']; ?>">
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
           
            <div class="form-group">
                <label>Roles</label>
                <select class="form-control select2" name="id_rol" id="id_rol" style="width: 100%;"   >
                  <option selected="selected" >Rol</option>
                  <?php foreach ($roles as $rol):?> 

<option value="<?php echo $rol['id'] ?>" ><?php echo $rol['rol']?></option>
<?php endforeach; ?>
                </select>
              </div>
           
           
            </div>
            
            <div class="col-md-6">

           
            <div class="form-group">
                <label>Usuarios</label>
                <select class="form-control select2" name="id_usuario" id="id_usuario" style="width: 100%;"   >
                  <option selected="selected" >Usuario</option>
                  <?php foreach ($usuarios as $usuario):?> 

<option value="<?php echo $usuario['id'] ?>" ><?php echo $usuario['nom_usuario']?></option>
<?php endforeach; ?>
                </select>
              </div>
           
           
            </div>
          </div>
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Editar</button>
                  <a href="<?php echo base_url()?>/usurol" class="btn btn-dark ">Cancelar</a>

        </div>
      </form>
    </div>
  </div>

  <div class="col-md-6">

  </div>
</div>
