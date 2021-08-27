<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url() ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="accesoacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (accesotional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">	<span class="user"><?php echo $_SESSION['s_usuario'].' - '.$_SESSION['s_rol']; ?></span></a>
      </div>
    </div>
<!-- Sidebar Menu -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
 <?php if(isset($_SESSION['s_id_rol'])){ ?>

<?php
     
    foreach ($datos['grupos'] as $d) {
      ?>
        
        <li class=" nav-item">
          <a  href=""  class="nav-link" >
            <i class="<?php echo $d->icono?>"></i>
            <p> <?php echo $d->grupo ?> 
            <i class="fas fa-angle-left right"></i>
          </p> 
        </a>
        <ul class="nav nav-treeview">
          <?php
            foreach($datos['opciones'] as $op){ 
          foreach($datos['acceso'] as $opp){ 
            if(isset($d->id) && $d->id == $opp->id_grupo && $opp->id_rol==$_SESSION['s_id_rol']){?>
        <li class="nav-item"> 
     
        <a  href=" <?php echo base_url() ?>/<?php echo $op->op_url?>" class="nav-link" > 
        <i class="far fa-circle nav-icon"></i>
        <p><?php echo $op->nombre ?></p>    
        </a>
        </li>
    <?php }}}?>
         </ul>
      </li>
    
      
      <?php } }
    ?>
    </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
 