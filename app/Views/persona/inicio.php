

<!-- Info boxes -->
<div class="card">

  <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div>
  <div class="card-header">
    <td> <a href="<?php echo base_url() ?>/persona/agregar" class="btn btn-primary">Agregar</a> </td>
  </div>

  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <td>Cedula</td>
          <td>Nombre</td>
          <td>Ap_paterno</td>
          <td>Ap_materno</td>
          <td>Telefono</td>
          <td>Direccion</td>
          <td>Genero</td>
          <th>Editar</th>
          <th>Eliminar</th>

        </tr>
      </thead>
      <tbody>

        <?php foreach ($datos as $data) : ?>


          <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['ci']; ?></td>
            <td><?php echo $data['nombres']; ?></td>
            <td><?php echo $data['ap']; ?></td>
            <td><?php echo $data['am']; ?></td>
            <td><?php echo $data['telefono']; ?></td>
            <td><?php echo $data['direccion']; ?></td>
            <td><?php echo $data['genero']; ?></td>

            <td> <a href="<?php echo base_url(); ?>/persona/editar/<?php echo $data['id']; ?>" class="btn btn-success"><i class="nav-icon fas fa-edit"></i></a></td>
            <td> <a href="<?php echo base_url(); ?>/persona/eliminar/<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
      <tfoot>
        <tr>
          <th>ID</th>
          <td>Cedula</td>
          <td>Nombre</td>
          <td>Ap_paterno</td>
          <td>Ap_materno</td>
          <td>Telefono</td>
          <td>Direccion</td>
          <td>Genero</td>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
