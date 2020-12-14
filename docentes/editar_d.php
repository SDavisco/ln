<?php
@session_start();
    include ('../bd/conexion.php');
    if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('../bd/conexion.php');
    //traer el id de solicitud de cotizacion
    $id=$_GET['id'];
    $query = "SELECT docente, telefono, dni FROM docente WHERE id_docente=$id";
    $list_datos = $conn ->query($query);
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
            <input id="prodId" name="id_docente" type="hidden" value="<?php echo $datos['id_docente']?>">
              <div class="card-body">
                <div class="form-group">
                <h4>Datos del Docente</h4>
                <div class="form-group">
                  <label for="exampleInputBorder">Nombres</label>
                  <input type="text" class="form-control form-control-border" name="nombres" id="nombres" value="<?php echo $datos['docente']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputBorder">Apellidos</label>
                  <input type="text" class="form-control form-control-border" name="apellidos" id="apellidos" value="<?php echo $datos['telefono']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputBorder">D.N.I</label>
                  <input type="text" class="form-control form-control-border" name="dni" id="dni" value="<?php echo $datos['dni']?>">
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
