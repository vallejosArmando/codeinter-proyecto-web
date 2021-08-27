
<!-- Info boxes -->
<div class="card">
  
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <div class="card-header">

      <td> <a href="<?php echo base_url()?>/tipos/insertar" class="btn btn-primary">Agregar</a> </td>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>

          </tr>
          </thead>
          <tbody>
<?php  foreach ($datos['tipos'] as $data):?>


<tr>
<td><?php echo $data->id?></td>
<td><?php echo $data->nombre?></td>
<td><?php echo $data->descripcion?></td>
<td> <a href="<?php echo base_url(); ?>/tipos/editar/<?php echo $data->id;?>" class="btn btn-success "> <i class="nav-icon fas fa-edit"></i></a></td>
<td> <a href="<?php echo base_url(); ?>/tipos/borrar/<?php echo $data->id;?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
</tr>
<?php endforeach;?>
icon-cancel
</tbody>
          <tfoot>
          <tr>
          <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
