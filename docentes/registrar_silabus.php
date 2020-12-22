<?php
//registro de unidad//
    @session_start();
    if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('../bd/conexion.php');
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
  <title>Registar Silabus</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
    <title>REGISTAR SILABUS DE UNIDAD</title>
    <!-- <link rel="stylesheet" href="css/main.css"  type="text/css"> -->
</head>    
<body class="hold-transition sidebar-mini layout-fixed"s>
<?php include 'layout/header.php';?>
        <section class="content content-wrapper">
        <form  enctype="multipart/form-data" name="unidades" action="../bd/subir_unid.php" method="POST" id="formulario">
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
                    <label for="exampleSelectRounded0">Especialidad</label>
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