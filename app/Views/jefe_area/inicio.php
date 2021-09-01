

<!-- Info boxes -->
<div class="card">
  
      <div class="card-header">
        <h3 class="card-title"><?php echo $titulo ?></h3>
      </div>
      <div class="card-header">
      <td> <a href="<?php echo base_url()?>/jefe_area/agregar" class="btn btn-primary" >Agregar</a> </td>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID</th>
                        <th>Area</th>
                        <th>Nombre</th>
                        <th>Ap. paterno</th>
                        <th>Ap. materno</th>

                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th  >Fecha_inicio</th>
                        <th>Fecha_fin_/</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
          </thead>
          <tbody>
<?php  foreach ($datos as $data):?>


<tr>

<td><?php echo $data['id'];  ?></td>
                            <td><?php echo $data['nombre'];  ?></td>
                            <td><?php echo $data['nombres']; ?></td>
                            <td><?php echo $data['ap']; ?></td>
                            <td><?php echo $data['am']; ?></td>
                            <td><?php echo $data['ci']; ?></td>

                            <td><?php echo $data['telefono']; ?></td>
                            <td><?php echo $data['correo']; ?></td>
                            <td><?php echo $data['fec_inicio']; ?></td>
                            <td><?php echo $data['fec_fin']; ?></td>

<td> <a href="<?php echo base_url(); ?>/jefe_area/editar/<?php echo $data['id'];?>" class="btn btn-success" ><i class="nav-icon fas fa-edit"></i></a></td>
<td> <a href="<?php echo base_url(); ?>/jefe_area/eliminar/<?php echo $data['id'];?>" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></a></td>
</tr>
<?php endforeach;?>

</tbody>
          <tfoot>
          <tr>
          <th>ID</th>
          <th>Area</th>
                        <th>Nombre</th>
                        <th>Ap. paterno</th>
                        <th>Ap. materno</th>

                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th  >Fecha_inicio</th>
                        <th>Fecha_fin_/</th>
       
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
