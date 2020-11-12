<?php
	@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('../bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
    $silabus = "SELECT * FROM unidad_docente";
    $list_s = $conn->query($silabus);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Perfil</title>
		<link rel="stylesheet" href="css/main.css"  type="text/css">
    </head>	
	<body>
    <?php include 'layout/header.php';?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card"></div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <?php
    $query = "SELECT nomb_unidad, docente, semestre_academico,silabus
    FROM UNIDAD_DOCENTE ORDER BY id_unidad ASC";
    $list_s = $conn->query($query);
    ?>
    <?php WHILE($row = $list_s->fetch_assoc()){?>
    <div>
    <label>UNIDAD DIDACTICA: <?php echo $row ['nomb_unidad']; ?></label><br>
    <label>DOCENTE: <?php echo $row ['docente']; ?></label><br>
    <label>DOCENTE: <?php echo $row ['semestre_academico']; ?></label><br>
    <embed src="../silabus/<?php echo $row['silabus']; ?>" alt="">
    </div>
    <?php }?>
	</body>
</html>