<?=$header; ?>
<br>
<h1>Formlario del Sistema</h1>

<div class="card" >
<div class="card-body ">
<h5>Editar datos del Sistema:</h5>

<p class="card-text">

<form method="post" action="<?= base_url('/actualizar') ?>" enctype="multipart/form-data" >
<input type="hidden" name="id" Value="<?=$sistema['id']?>" >
  <div class="form-group">
    <label for="nombre">Nombre del sistema</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$sistema['nombre']?>" >
  </div>
  <div class="form-group">
    <label for="nombre_creador">Nombre del creador del sistema:</label>
    <input type="text" class="form-control" name ="nombre_creador" id="nombre_creador" Value="<?=$sistema['nombre_creador']?>">
  </div>
  <div class="form-group">
    <label for="logo">Logo del sistema:</label>
    <br>
    <img  class="img-thumbnail" src=" <?= base_url()?>/fotos/<?= $sistema['logo'];  ?> " alt="" width="60">
    <br>
    <input type="file" class="form-control-file" name ="logo" id="logo" >
  </div>
  <br>
  <button type="submit"class="btn btn-success " >Guardar</button>
<a href=" <?= base_url('/listar'); ?> " class="btn btn-info" >Canselar</a>
</form>
</p>
</div>
</div>
<?=$footer; ?>