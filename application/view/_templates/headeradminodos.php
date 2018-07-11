<!DOCTYPE html>
<html lang="en">

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
 <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>img/web.jpg">
</head>

<?php
session_start();
if ($_SESSION["rol"] == 'Administrador') {
  $nombres = $_SESSION["nombres"];
  $apellidos = $_SESSION["apellidos"];
  $documento = $_SESSION["documento"];
  $idnodo = $_SESSION["idnodo"];
  $nodo = $_SESSION["nodo"];
  $rol = $_SESSION["rol"];
}else{
  header('location: ' . URL . 'home');
}
?>

<body class="nav-md footer_fixed">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed" style="background: #238276">
        <div class="left_col scroll-view" style="background: #238276">
          <div class="navbar nav_title" style="background: #238276">
          <a href="<?php echo URL; ?>inicio/gestor" style="background: #238276;  " class="site_title"> <img src="<?php echo URL; ?>img/logo3.png" ></a>
         </div>
         <div class="clearfix"></div>
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <center><h3>MENÚ</h3></center>
            <ul class="nav side-menu">
             <li><a style="background:#238276" href="<?php echo URL; ?>nodo/indexr"><i class="fa fa-home"></i>Nodos</a></li>
             <li><a style="background:#238276" href="<?php echo URL; ?>usuario/index"><i class="fa fa-users"></i>Dinamizadores</a></li>
             <li><a style="background:#238276" href="<?php echo URL; ?>costosadministrativos/indexadmin"><i class="fa fa-users"></i>Costos Administrativos</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>usuario/indexadmin"><i class="fa fa-folder"></i>Usuarios</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>proyecto/indexAdmin"><i class="fa fa-user"></i>Proyecto</a></li>
             <!-- <li><a style="background:#238276" href="<?php echo URL; ?>foco"><i class="fa fa-bell-o"></i>Focos</a></li>
             <li><a style="background:#238276" href="<?php echo URL; ?>laboratorio"><i class="fa fa-flask"></i>Laboratorios</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>grupos/indexad/"><i class="fa fa-laptop"></i>Grupos de Investigación</a></li>
             <li><a style="background:#238276" href="<?php echo URL; ?>depreciacion/index"><i class="fa fa-bolt"></i>Depreciación</a></li>
             <li><a style="background:#238276" href="<?php echo URL; ?>mantenimiento"><i class="fa fa-legal"></i>Mantenimiento</a></li>
             <li><a style="background:#238276" href="<?php echo URL; ?>materiales/index"><i class="fa fa-book"></i>Materiales de Formación</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>costos/index"><i class="fa fa-usd"></i>Costos</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>reportes/index"><i class="fa fa-bar-chart-o"></i>Reportes</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>indicadores/index"><i class="fa fa-sort-numeric-asc"></i>Indicadores</a></li> -->
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
                    <?php echo " $nombres  $apellidos - $rol nodos Tecnoparque "  ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo URL; ?>cuentas/cambiarclav"> Perfil</a></li>

                    <li><a href="javascript:;">Ayuda</a></li>
                    <li><a href="<?php echo URL; ?>home/salir"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->
