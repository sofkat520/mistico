<?php
require_once "../config/global.php";
if (strlen(session_id()) < 1) 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo PRO_NOMBRE?> Admin | Cusco Mistico Travel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--cache-->
    <meta http-equiv="Last-Modified" content="0">
    
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    
    <meta http-equiv="Pragma" content="no-cache">
    <!-- Bootstrap 3.3.5 -->
   
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
   
    <!--lo demas-->
    
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">
    <!--FROALA-->
    
    
    <!-- finFROALA-->
    
    <!--<script src="https://cdn.tiny.cloud/1/xvymr6obp2bhjvs3k8kh6gbbwegyl3ivoz8ne03xbebv12eg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
    <!--<script src="../public/js/ckeditor/opcional.js" referrerpolicy="origin"></script>-->
  </head>
  <body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CUSCO MISTICO TRAVEL</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>CUSCO MISTICO TRAVEL</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../public/img/user.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../public/img/user.jpg" class="img-circle" alt="User Image">
                    <p>
                    <?php echo $_SESSION['nombre']; ?>
                     
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Cerrar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <!--<li style="background-color:#20A0CC;">-->           
           
            <li class="">
              <a class="nav-link active" href="oferta.php">
                <i class="fa fa-tasks"></i> <span>Oferta</span>
              </a>
            </li>
            <!--<li class="">
              <a class="nav-link active" href="autor.php">
                <i class="fa fa-tasks"></i> <span>Autor</span>
              </a>
            </li>
            <li class="">
              <a class="nav-link active" href="nota.php">
                <i class="fa fa-tasks"></i> <span>Nota</span>
              </a>
            </li>
            <li class="">
              <a class="nav-link active" href="edicion.php">
                <i class="fa fa-tasks"></i> <span>Edicion Anterior</span>
              </a>
            </li>
            <li class="">
              <a class="nav-link active" href="tendencia.php">
                <i class="fa fa-tasks"></i> <span>Tendencia</span>
              </a>
            </li>
            <li class="">
              <a class="nav-link active" href="galeria.php">
                <i class="fa fa-tasks"></i> <span>Galerias</span>
              </a>
            </li>
            <li class="">
              <a class="nav-link active" href="foto.php">
                <i class="fa fa-tasks"></i> <span>Fotos de Galerias</span>
              </a>
            </li>-->
            <!--<li class="">
              <a class="nav-link active" href="infografia.php">
                <i class="fa fa-tasks"></i> <span>Infografias</span>
              </a>
            </li>-->      
            <li>
              <a href="../public/doc/manual.pdf" target="_blank">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="../ajax/usuario.php?op=salir">
                <i class="fa fa-sign-out"></i> <span>Cerrar Sesion</span>
                
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
