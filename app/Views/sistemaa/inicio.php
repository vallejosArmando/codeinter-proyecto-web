


        <!-- Info boxes -->
        <div class="card">
          
              <div class="card-header">
                <h3 class="card-title"><?php echo $titulo ?></h3>
              </div>
              <div class="card-header">

              <td> <a href="<?php echo base_url()?>/sistema/agregar" class="btn btn-primary" >Agregar</a> </td>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Nombre del creador</th>
                    <th>Logo </th>
                    <th>Editar</th>
                    <th>Eliminar</th>

                  </tr>
                  </thead>
                  <tbody>
    <?php  foreach ($sistema as $data ) :?>


    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['nombre']?></td>
        <td><?php echo $data['nombre_creador']?></td>
        <td>
                                        <img  class="img" src=" <?= base_url()?>/fotos/<?= $data['logo'];  ?> " alt="" width="60">
                                        </td>
        <td> <a href="<?php echo base_url(); ?>/sistema/editar/<?php echo $data['id'];?>" class="btn btn-success "> <i class="nav-icon fas fa-edit"></i></a></td>
        <td> <a href="<?php echo base_url(); ?>/sistema/eliminar/<?php echo $data['id'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php endforeach;?>
    
</tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Nombre</th>
                    <th>Nombre del creador</th>
                    <th>Logo </th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

