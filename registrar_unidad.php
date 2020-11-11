<?php
//registro de unidad//
    @session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
    $docentes = "SELECT docente FROM docente";
    $list_d = $conn->query($docentes);
    $sem_ac = "SELECT semestre FROM semestre_academico";
    $list_sa = $conn->query($sem_ac);
    $sem_lec = "SELECT sem_lectivo FROM semestre_lectivo";
    $list_sl = $conn->query($sem_lec);
    $unidad = "SELECT nomb_unidad FROM unidad_d";
    $list_u = $conn->query($unidad);
    $turno = "SELECT turno FROM turno";
    $list_t = $conn->query($turno);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <title>REGISTAR-UNIDADES</title>
    <!-- <link rel="stylesheet" href="css/main.css"  type="text/css"> -->
</head>    
<body class="hold-transition sidebar-mini layout-fixed"s>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
</aside>
    <div class="content-wrapper">
        <section class="content">
        <form  enctype="multipart/form-data" name="unidades" action="bd/subir_unid.php" method="POST" id="formulario">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Unidad Didactica</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <h4>Datos de Unidad Didactica</h4>
                <div class="form-group">
                  <label for="exampleSelectBorder">Unidad Didactica</label>
                  <select class="custom-select form-control-border" id="unidad" name="unidad">
                    <option value="0">nombre de la unidad</option>
                    <?php WHILE($row1 = $list_u->fetch_assoc()){?>
                    <option value="<?php echo $row1['nomb_unidad'];?>"><?php echo $row1['nomb_unidad'];?>
                    </option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectBorderWidth2">Docente</label>
                  <select class="custom-select form-control-border border-width-2" id="docente" name="docente">
                    <option value="0">nombre del docente</option>
                    <?php WHILE($row2 = $list_d->fetch_assoc()){?>
                    <option value="<?php echo $row2['docente'];?>"><?php echo $row2['docente'];?>
                    </option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Ciclo</label>
                  <select class="custom-select rounded-0" id="sem_ac" name="sem_ac">
                    <option value="0">semestre academico</option>
                    <?php WHILE($row3 = $list_sa->fetch_assoc()){?>
                    <option value="<?php echo $row3['semestre'];?>"><?php echo $row3['semestre'];?>
                    </option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Semestre</label>
                  <select class="custom-select rounded-0" id="semestre" name="sem_lectivo">
                    <option value="0">semestre lectivo</option>
                    <?php WHILE($row4 = $list_sl->fetch_assoc()){?>
                    <option value="<?php echo $row4['sem_lectivo'];?>"><?php echo $row4['sem_lectivo'];?>
                    </option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Turno</label>
                    <select class="custom-select rounded-0" id="turno" name="turno">
                    <option value="0">turno</option>
                    <?php WHILE($row5 = $list_t->fetch_assoc()){?>
                    <option value="<?php echo $row5['turno'];?>"><?php echo $row5['turno'];?>
                    </option>
                    <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelectRounded0">Semestre</label>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" name="checkbox[]" value="COMPUTACION">
                          <label for="customCheckbox1" class="custom-control-label">Computacion e Informatica</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" name="checkbox[]" value="CONTABILIDAD">
                          <label for="customCheckbox2" class="custom-control-label">Contabilidad</label>
                        </div>                        
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" name="checkbox[]" value="ELECTRONICA">
                          <label for="customCheckbox3" class="custom-control-label">Electronica Industrial</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox4" name="checkbox[]" value="MECAUTO">
                          <label for="customCheckbox4" class="custom-control-label">Mecanica Automotriz</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox5" name="checkbox[]" value="MECPROD">
                          <label for="customCheckbox5" class="custom-control-label">Mecanica de Produccion</label>
                        </div>                                                                        
                  </div>
                <div class="form-group">
                            <label for="exampleInputFile">Subir Silabus</label>
                            <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="silabus"> 
                            <label class="custom-file-label" for="exampleInputFile">Seleccionar archivos</label>
                            </div>
                            <div class="input-group-append">
                            <span class="input-group-text">Subir</span>
                            </div>
                            </div>
                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>           
                </div>
            </form>                    
        </section>

    <form  enctype="multipart/form-data" name="unidades" action="bd/subir_unid.php" method="POST" id="formulario">
    <label>UNIDAD</label>
    <select class="input" name="unidad">
        <option value="0">unidad</option>
            <?php WHILE($row1 = $list_u->fetch_assoc()){?>
        <option value="<?php echo $row1['nomb_unidad'];?>"><?php echo $row1['nomb_unidad'];?>
        </option>
        <?php }?>
    </select>
    <label>DOCENTE</label>
    <select class="input" name="docente">
        <option value="0">docente</option>
            <?php WHILE($row2 = $list_d->fetch_assoc()){?>
        <option value="<?php echo $row2['docente'];?>"><?php echo $row2['docente'];?>
        </option>
        <?php }?>
    </select>
    <label>SEMESTRE ACADEMICO</label>
    <select class="input" name="sem_ac">
        <option value="0">sem-academico</option>
            <?php WHILE($row3 = $list_sa->fetch_assoc()){?>
        <option value="<?php echo $row3['semestre'];?>"><?php echo $row3['semestre'];?>
        </option>
        <?php }?>
    </select>
        <label>TURNO</label>
    <select class="input" name="turno">
        <option value="0">turno</option>
            <?php WHILE($row5 = $list_t->fetch_assoc()){?>
        <option value="<?php echo $row5['turno'];?>"><?php echo $row5['turno'];?>
        </option>
        <?php }?>
    </select>
    <label>SEMESTRE LECTIVO</label>
    <select class="input" name="sem_lectivo">
        <option value="0">sem-lectivo</option>
            <?php WHILE($row4 = $list_sl->fetch_assoc()){?>
        <option value="<?php echo $row4['sem_lectivo'];?>"><?php echo $row4['sem_lectivo'];?>
        </option>
        <?php }?>
    </select>

    <input type="checkbox" name="checkbox[]" value="EECTRONICA"> ELECTRONICA<br>
	<input type="checkbox" name="checkbox[]" value="CONTABILIDAD">CONTABILIDAD<br>
	<input type="checkbox" name="checkbox[]" value="ELECTRONICA">INFORMATICA<br>

    <input type="file" name="silabus" accept="application/pdf">    
    
    <input class="" type="submit" name="submit" value="aceptar" id="reset">
    
    </form>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</div>
</body>