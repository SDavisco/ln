<?php
	@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('../bd/conexion.php');
	//CONSULTAS PARA TRAER DATOS
	$u_didactica = "SELECT nomb_unidad FROM unidad_d";
	$list_ud = $conn->query($u_didactica);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
<link rel="stylesheet" href="../dist/css/adminlte.min.css">
<meta name="viewport" content="../width=device-width, initial-scale=1">
<link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
		<title>Cursos</title>
	</head>
<body>
    <?php include 'header.php';?>
<section class="content-wrapper">    
        <form name="unidades_d" action="bd/subird.php" method="POST" id="formulario">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Unidad Didactica</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <h4>Datos de la Unidad Didactica</h4>    
                <div class="form-group">
                  <label for="exampleInputBorder">Nombre de Unidad Didactica</label>
                  <input type="text" class="form-control form-control-border" name="docente" id="docente" placeholder="Unidad Didactica">
                </div>
<!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>           
              </div>
              </div>
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de Cursos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Cursos</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    WHILE ($row =  $list_ud ->fetch_array(MYSQLI_BOTH)) { 
                    ?>
                  <tr>
                    <td><?php echo $row['nomb_unidad']; ?></td>
                  </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Docentes</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div> <!
        </form>                    
        </section>

            -- Control Sidebar -->
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
