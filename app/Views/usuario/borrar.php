

<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar<small>Editar Usuario</small></h3>
              </div>
           
              <form  action="<?php echo base_url() ?>/usuarios/borrar/<?php echo $datos['id'];?>" id="formulario_usuarios" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                <label>Areas</label></label>
                <select class="form-control select2" name="id_persona" id="id_persona" style="width: 100%;"  value="<?php echo $datos['id_persona']?>">
                  <option selected="selected" >Tipo empleado</option>
                  <?php foreach ($datos['persona'] as $data):?> 

<option value="<?php echo $data->id_persona ?>" ><?php echo $data->id_persona?></option>
<?php endforeach; ?>
                </select>
              </div>
                  <div class="form-group">
                    <label for="nom_usuario">Nombre</label>
                    <input type="text" name="nom_usuario" class="form-control" id="nom_usuario" value="<?php echo $datos['nom_usuario'];?>" placeholder="Ingrese nom_usuario ">
                  </div>
                  <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="text" name="clave" class="form-control" id="clave" value="<?php echo $datos['clave'];?>" placeholder="clave">
                  </div>
            
                  
                </div>
                <div class="card-footer">

                <input type="submit" class="btn btn-primary" value="Eliminar">
                <a href="<?php echo base_url()?>/usuarios/inicio" class="btn btn-dark ">Cancelar</a> 
                </div>
              </form>
            </div>
            </div>
       
          <div class="col-md-6">

          </div>
        </div>
