<?php
@session_start();
    include ('../bd/conexion.php');
    if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('../bd/conexion.php');
    //traer el id de solicitud de cotizacion
    $id=$_GET['id'];
    $query = "SELECT id_al, dni, nombre, apellido, correo, carrera, semestre_academico, semestre_lectivo, turno, pass FROM alumno WHERE id_al=$id";
    $list_datos = $conn ->query($query);
    $carrera = "SELECT nomb_carrera FROM carrera";
    $list_c = $conn->query($carrera);
    $sem_ac = "SELECT semestre FROM semestre_academico";
    $list_sa = $conn->query($sem_ac);
    $turno = "SELECT turno FROM turno WHERE id_turno = 1 or id_turno = 2 ";
    $sem_lec = "SELECT sem_lectivo FROM semestre_lectivo";
    $list_sl = $conn->query($sem_lec);
    $list_t = $conn->query($turno);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar datos||||</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
    <title>Editar datos</title>
    <!-- <link rel="stylesheet" href="css/main.css"  type="text/css"> -->
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
    <?php include 'layout/header.php';?>
    <div class="content-wrapper">
        <section class="content">
        <form  enctype="multipart/form-data" name="unidades" action='../bd/update_a.php' method="POST" id="formulario">
        <?php WHILE ($datos= $list_datos ->fetch_array(MYSQLI_BOTH)) { ?>
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar Datos de Alumno</h3>
              </div>
            <!-- /.card-header -->
            <input id="prodId" name="id_al" type="hidden" value="<?php echo $datos['id_al']?>">
              <div class="card-body">
                <div class="form-group">
                <h4>Datos del Alumno</h4>
                <div class="form-group">
                  <label for="exampleInputBorder">Nombres</label>
                  <input type="text" class="form-control form-control-border" name="nombres" id="nombres" value="<?php echo $datos['nombre']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputBorder">Apellidos</label>
                  <input type="text" class="form-control form-control-border" name="apellidos" id="apellidos" value="<?php echo $datos['apellido']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputBorder">D.N.I</label>
                  <input type="text" class="form-control form-control-border" name="dni" id="dni" value="<?php echo $datos['dni']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" id="email" value="<?php echo $datos['correo']?>">
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Carrera</label>
                    <select class="custom-select rounded-0" name="carrera" value="<?php echo $datos['carrera']?>">
                        <?php WHILE($row = $list_c->fetch_assoc()){?>
                    <option value="<?php echo $row['nomb_carrera'];?>"><?php echo $row['nomb_carrera'];?>
                       </option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Semestre Academico</label>
                  <select class="custom-select rounded-0" id="semestre" name="semestre" value="<?php echo $datos['semestre_academico']?>">
                    <?php WHILE($row4 = $list_sa->fetch_assoc()){?>
                    <option value="<?php echo $row4['semestre'];?>"><?php echo $row4['semestre'];?>
                    </option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Semestre</label>
                  <select class="custom-select rounded-0" id="semestre" name="sem_lectivo" value="<?php echo $datos['semestre_lectivo']?>">
                    <?php WHILE($row4 = $list_sl->fetch_assoc()){?>
                    <option value="<?php echo $row4['sem_lectivo'];?>"><?php echo $row4['sem_lectivo'];?>
                    </option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Turno</label>
                    <select class="custom-select rounded-0" id="turno" name="turno" value="<?php echo $datos['turno']?>">
                    <option value="0">turno</option>
                    <?php WHILE($row5 = $list_t->fetch_assoc()){?>
                    <option value="<?php echo $row5['turno'];?>"><?php echo $row5['turno'];?>
                    </option>
                    <?php }?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorder">Contraseña</label>
                  <input type="text" class="form-control form-control-border" name="pass" id="pass" value="<?php echo $datos['pass']?>">
                </div>
                <?php } ?>
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>           
              </div>
              </div>
            </form>                    
        </section>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</div>
</body>
</html>
<div class="DatosSolicitud">
      <?php $DatosSC= $s_cotizacion ->fetch_array(MYSQLI_BOTH)?>
            <ul>
                <li>
                    <h4>Cliente</h4>
                    <p><?php echo $DatosSC['cli_nomb']?></p>
                </li>
                <li>
                    <h4>Persona de Contacto</h4>
                    <p><?php echo $DatosSC['cli_cont']?></p>
                </li>
                <li>
                    <h4>Correo Electronico</h4>
                    <p><?php echo $DatosSC['cli_mail']?></p>
                </li>
                <li>
                    <h4>Fecha de Solicitud</h4>
                    <p><?php echo $DatosSC['correo_fecha']?></p>
                </li>
                <li>
                    <h4>Fecha Limite</h4>
                    <p><?php echo $DatosSC['fin_fecha']?></p>
                </li>
                <li>
                    <h4>Descripcion</h4>
                    <p><?php echo $DatosSC['descripcion']?></p>
                </li>
                
            </ul>
      
        
    </div>