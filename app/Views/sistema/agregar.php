<?= $header ;?>
<br>

<h1>Formlario del Sistema</h1>



<div class="card" >
<div class="card-body ">
<h5>Ingresa datos del Sistema:</h5>
<p class="card-text">

<form method="post" action="<?= base_url('/guardar') ?>" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="nombre">Nombre del sistema</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= old('nombre') ?>" >
  </div>
  <div class="form-group">
    <label for="nombre_creador">Nombre del creador del sistema:</label>
    <input type="text" class="form-control" name ="nombre_creador" id="nombre_creador" value="<?= old('nombre_creador') ?>" >
  </div>
  <div class="form-group">
    <label for="logo">Logo del sistema:</label>
    <input type="file" class="form-control-file" name ="logo" id="logo" placeholder="Logo">
  </div>
  <br>
  <button type="submit"class="btn btn-success " >Guardar</button>
  <a href=" <?= base_url('/listar'); ?> " class="btn btn-info" >Canselar</a>
</form>
</p>
</div>
</div>
<?=$footer; ?>