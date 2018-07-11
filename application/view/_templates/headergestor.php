<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo URL; ?>css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/alertas/dist/sweetalert.css">
  <link href="<?php echo URL; ?>css/build/css/custom.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/datatable/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/datatable/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/datatable/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/datatable/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/datatable/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/calendario/daterangepicker.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/select/css.css" rel="stylesheet">
  <link href="<?php echo URL; ?>css/reportes/r.min.css" rel="stylesheet">

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>img/web.jpg">
</head>

<body class="nav-md footer_fixed">

  <?php
  session_start();
  if ($_SESSION["rol"] == 'Gestor') {
    $nombres = $_SESSION["nombres"];
    $apellidos = $_SESSION["apellidos"];
    $persona = $_SESSION["persona"];
    $idnodo = $_SESSION["idnodo"];
    $rol = $_SESSION["rol"];
    $nodo = $_SESSION["nodo"];
  }else{
    header('location: ' . URL . 'home');
  }
  ?>

  <div class="container body " >
    <div class="main_container" >
      <div class="col-md-3 left_col menu_fixed" style="background: #238276">
        <div class="left_col scroll-view" style="background: #238276">
          <div class="navbar nav_title"  style="background: #238276">
           <a href="<?php echo URL; ?>inicio/gestor" style="background: #238276;  " class="site_title"> <img src="<?php echo URL; ?>img/logo3.png" ></a>
         </div>
         <div class="clearfix"></div >
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <center><h3>MENÚ</h3></center>
            <ul class="nav side-menu">
             <li><a style="background: #238276" href="<?php echo URL; ?>talento/index/<?php echo $persona ?>"><i class="fa fa-users"></i>Talentos</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>proyecto/gestor/<?php echo $persona ?>/<?php echo date("Y"); ?>"><i class="fa fa-folder"></i>Proyectos</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>usoinfraestructura/index/<?php echo $persona ?>"><i class="fa fa-building"></i>Uso de Infraestructura</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>edt/index/<?php echo $persona ?>"><i class="fa fa-institution"></i>EDT</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>grupos/index/<?php echo $persona ?>"><i class="fa fa-laptop"></i>Grupos de Investigación</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>vigilancia/index/<?php echo $persona ?>"><i class="fa fa-binoculars"></i>Vigilancia Tecnológica</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>costos/gestor/<?php echo $persona ?>/<?php echo date("Y"); ?>"><i class="fa fa-usd"></i>Costos</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>

<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo " $nombres  $apellidos - $rol nodo $nodo "  ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo URL; ?>cuentas/cambiarclave1"> Perfil</a></li>

                    <li><a href="javascript:;">Ayuda</a></li>
                    <li><a href="<?php echo URL; ?>home/salir"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->
