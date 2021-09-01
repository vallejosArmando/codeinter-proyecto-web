<style media="screen">
    #uploadForm,
    #imagePreview{
      width: 720px;
      margin: 0;
    }
    img{
      
      max-width: 250px;
      height: 180px;

    }
    </style>

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Argregar<small><?php echo $titulo ?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(isset($validation)){ ?>
<div class="alert alert-danger" >
<?php echo $validation->listErrors(); ?>
</div>
<?php } ?>
              <form  action="<?php echo base_url() ?>/sistema/insertar" id="formulario_area" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre ">
                  </div>
                  <div class="form-group">
                    <label for="nombre_creador">Nombre del creador</label>
                    <input type="text" name="nombre_creador" class="form-control" id="nombre_creador" placeholder="nombre_creador">
                  </div>
              
                  <div class="form-group">
                    <label for="logo">Logo</label>
                    <div id="div"><label for="fotos">Logo del Sistema:</label><input type="file" name="fotos" id="fotos"></div>

<div id="imagePreview" ></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
(function(){
  function filePreview(input){
    if(input.files && input.files[0]){
      var reader =new FileReader();
      reader.onload= function(e){
        $('#imagePreview').html("<img src='"+e.target.result+"'/>")
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $('#fotos').change(function(){
    filePreview(this);
  })
})();
</script>                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  <a href="<?php echo base_url()?>/sistema" class="btn btn-dark ">Cancelar</a> 

                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
