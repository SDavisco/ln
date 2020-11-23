<?php
//registro de unidad//
    @session_start();
    if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('../bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
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
  <title>Registar Unidad Alumno||||</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <title>REGISTAR-AlUMNO</title>
    <!-- <link rel="stylesheet" href="css/main.css"  type="text/css"> -->
</head>    
    <body class="hold-transition sidebar-mini layout-fixed">
    <?php include 'layout/header.php';?>
    <div class="content-wrapper">
        <section class="content">
        <form  enctype="multipart/form-data" name="unidades" action="bd/subir_a.php" method="POST" id="formulario">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registrar Alumno</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <h4>Datos del Alumno</h4>
                <div class="form-group">
                  <label for="exampleInputBorder">Nombres</label>
                  <input type="text" class="form-control form-control-border" name="nombres" id="nombres" placeholder="Nombres">
                </div>
                <div class="form-group">
                  <label for="exampleInputBorder">Apellidos</label>
                  <input type="text" class="form-control form-control-border" name="apellidos" id="apellidos" placeholder="Apellidos">
                </div>
                <div class="form-group">
                  <label for="exampleInputBorder">D.N.I</label>
                  <input type="text" class="form-control form-control-border" name="dni" id="dni" placeholder="DNI">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Carrera</label>
                    <select class="custom-select rounded-0" name="carrera">
                        <option value="0">CARRERA</option>
                        <?php WHILE($row = $list_c->fetch_assoc()){?>
                    <option value="<?php echo $row['nomb_carrera'];?>"><?php echo $row['nomb_carrera'];?>
                       </option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Semestre Academico</label>
                  <select class="custom-select rounded-0" id="semestre" name="semestre">
                    <option value="0">semestre academico </option>
                    <?php WHILE($row4 = $list_sa->fetch_assoc()){?>
                    <option value="<?php echo $row4['semestre'];?>"><?php echo $row4['semestre'];?>
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
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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