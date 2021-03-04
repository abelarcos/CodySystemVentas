<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cody | System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="icon" href="Vistas/img/Plantilla/AdminLTELogo.png">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Vistas/dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- jQuery -->
  <script src="Vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="Vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="Vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="Vistas/dist/js/demo.js"></script>

  
</head>
<body class="hold-transition sidebar-mini login-page">
<!-- Site wrapper -->
<?php

  if(isset($_SESSION['iniciarSesion']) && $_SESSION["iniciarSesion"] == "ok"){

    echo  '<div class="wrapper">';

      // <!-- Navbar -->
    
      include "Modulos/cabezote.php"; 
      
      // <!-- /.navbar -->
    
      // <!-- Main Sidebar Container -->
      include "Modulos/aside.php"; 
      
      // <!-- Content Wrapper. Contains page content -->
      
        if(isset($_GET['ruta'])){
          if($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "categorias" ||
            $_GET["ruta"] == "productos" ||
            $_GET["ruta"] == "clientes" ||
            $_GET["ruta"] == "ventas" ||
            $_GET["ruta"] == "crear-venta" ||
            $_GET["ruta"] == "reportes"){
              include "Modulos/". $_GET["ruta"]. ".php";
            }else{
              include "Modulos/404.php";
            }
        }else{
          include "Modulos/inicio.php";
        }
    
      // <!-- /.content-wrapper -->
      include "Modulos/footer.php"; 
      // <!-- Control Sidebar -->
    
      // <aside class="control-sidebar control-sidebar-dark">
      //   <!-- Control sidebar content goes here -->
      // </aside>
      // <!-- /.control-sidebar -->
    echo '</div>';
    // <!-- ./wrapper -->
    
  }else{

     include "Modulos/login.php";
  }

?>


</body>
</html>
