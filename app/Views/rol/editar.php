

<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar<small><?php echo $titulo ?></small></h3>
              </div>
          
              <form  action="<?php echo base_url() ?>/rol/actualizar" id="formulario_roles" method="POST" enctype="multipart/form-data" >
              <input type="hidden" name="id" value="<?php echo $datos['id'];?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="rol">Nombre</label>
                    <input type="text" name="rol" class="form-control" id="rol" value="<?php echo $datos['rol'];?>" placeholder="Ingrese rol ">
                  </div> 
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="editar">
                <a href="<?php echo base_url()?>/rol" class="btn btn-dark ">Cancelar</a> 
                </div>
              </form>
              
            </div>
            </div>
          <div class="col-md-6">
          </div>
        </div>
