

<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar<small>Editar Grupo</small></h3>
              </div>
          
              <form  action="<?php echo base_url() ?>/grupos/editar/<?php echo $datos['id'];?>" id="formulario_grupos" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="grupo">Nombre</label>
                    <input type="text" name="grupo" class="form-contgrupo" id="grupo" value="<?php echo $datos['grupo'];?>" placeholder="Ingrese grupo ">
                  </div> 
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="editar">
                <a href="<?php echo base_url()?>/grupos" class="btn btn-dark ">Cancelar</a> 
                </div>
              </form>
              
            </div>
            </div>
          <div class="col-md-6">
          </div>
        </div>
