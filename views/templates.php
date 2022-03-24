<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Comercial Eduardo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no" name="viewport">

  <!-- icino encabezado -->
  <link rel="icon" href="views/img/templates/logo-mini.png">
  <!-- 
                CSS PLUGINS
   -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  
  <!-- 
                JAVASCRIPT PLUGINS
   -->
  <!-- jQuery 3 -->
  <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>

</head>

   <!-- 
                DOCUMENT BODY
   -->
<body class="hold-transition skin-green sidebar-collapse sidebar-mini login-page">
<!-- Site wrapper -->

    <?php
    if(isset($_SESSION["logIn"]) && $_SESSION["logIn"] == "okey"){

    
    // <!-- Site wrapper -->
    echo '<div class="wrapper">';
        /* ========================================================
                    CABECERA - HEADER
        ============================================================= */
        include "modules/header.php";
         /* ========================================================
                    MENU LATERAL
        ============================================================= */
        include "modules/menu.php";
        
        /* ========================================================
                   CONTENT
       ============================================================= */
        if(isset($_GET["ruta"])){
          if($_GET["ruta"] == "home" || 
          $_GET["ruta"] == "users" || 
          $_GET["ruta"] == "categories" || 
          $_GET["ruta"] == "products" || 
          $_GET["ruta"] == "clients" || 
          $_GET["ruta"] == "create-sales" || 
          $_GET["ruta"] == "manage-sales" || 
          $_GET["ruta"] == "reports" || 
          $_GET["ruta"] == "providers" || 
          $_GET["ruta"] == "notes" || 
          $_GET["ruta"] == "backups" ||
          $_GET["ruta"] == "exit"){
            include "modules/".$_GET["ruta"].".php";
          }else {
            include "modules/error-404.php";
          }
        }else{
          include "modules/error-404.php";
        }
        
        /* ==========================
                    footer
        ==============================*/
        include "modules/footer.php";
    echo "</div>";
    // <!-- ./wrapper -->
    }else{
      include "views/modules/login.php";
    }
    ?>




<script src="views/js/template.js"></script>
</body>
</html>
