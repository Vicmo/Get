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

<body class="nav-md">

  <?php
  session_start();
  if ($_SESSION["rol"] == 'Gestor') {
    $nombres = $_SESSION["nombres"];
    $apellidos = $_SESSION["apellidos"];
    $documento = $_SESSION["documento"];
    $idnodo = $_SESSION["idnodo"];
    $rol = $_SESSION["rol"];
    $nodo = $_SESSION["nodo"];
  }else{
    header('location: ' . URL . 'home');
  }
  ?>

  <div class="container body" >
    <div class="main_container" >
      <div class="col-md-3 left_col" >
        <div class="left_col scroll-view" style="background: #238276">
          <div class="navbar nav_title"  style="background: #238276">
           <a style="background: #238276" class="site_title"> <img src="<?php echo URL; ?>img/logo3.png" style="margin-left: 13px;"></a>
         </div>
         <div class="clearfix"></div >
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <center><h3>MENÚ</h3></center>
            <ul class="nav side-menu">
             <li><a style="background: #238276" href="<?php echo URL; ?>talento/index/<?php echo date("Y"); ?>/<?php echo $documento ?>"><i class="fa fa-users"></i>Talentos</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>proyecto/gestor/<?php echo $documento ?>/<?php echo date("Y"); ?>"><i class="fa fa-folder"></i>Proyectos</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>usoinfraestructura/index/<?php echo $documento ?>"><i class="fa fa-building"></i>Uso de Infraestructura</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>edt/index/<?php echo $documento ?>"><i class="fa fa-institution"></i>EDT</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>grupos/index/<?php echo $documento ?>"><i class="fa fa-laptop"></i>Grupos de Investigación</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>vigilancia/index/<?php echo $documento ?>"><i class="fa fa-binoculars"></i>Vigilancia Tecnológica</a></li>
             <li><a style="background: #238276" href="<?php echo URL; ?>costos/gestor/<?php echo $documento ?>/<?php echo date("Y"); ?>"><i class="fa fa-usd"></i>Costos</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>

   <div class="top_nav">
    <div class="nav_menu">
      <nav>

        <ul class="nav navbar-nav navbar-right">
          <li class="">
           <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
             <?php echo " $nombres  $apellidos - $rol nodo $nodo "  ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo URL; ?>cuentas/cambiarclave1"><i class="fa fa-unlock pull-right"></i> Cambiar Contraseña</a></li>
            <li><a href="<?php echo URL; ?>home/salir"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>

<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/fastclick/lib/fastclick.js"></script>
<script src="<?php echo URL; ?>css/vendors/nprogress/nprogress.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/iCheck/icheck.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/switchery/dist/switchery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/parsley.js"></script>
<script src="<?php echo URL; ?>css/alertas/dist/sweetalert-dev.js"></script>
<script src="<?php echo URL; ?>css/build/js/custom.min.js"></script>
<script src="<?php echo URL; ?>js/tabla.min.js"></script>
<script src="<?php echo URL; ?>js/campos.js"></script>


<script src="<?php echo URL; ?>css/datatable/tabla2.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- <script src="<?php echo URL; ?>css/datatable/datatables.net-buttons/js/dataTables.buttons.js"></script> -->

<!--
<script src="<?php echo URL; ?>css/datatable/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script> -->
<!-- <script src="<?php echo URL; ?>css/datatable/datatables.net-buttons/js/buttons.flash.min.js"></script> -->
<script src="<?php echo URL; ?>css/datatable/datatables.net-buttons/js/buttons.html5.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-scroller/js/dataTables.scroller.min.js"></script>


<script src="<?php echo URL; ?>css/reportes/g1.js"></script>
<script src="<?php echo URL; ?>css/reportes/g2.js"></script>
<script src="<?php echo URL; ?>css/reportes/g3.js"></script>
<script src="<?php echo URL; ?>css/reportes/g4.js"></script>



<script src="<?php echo URL; ?>js/md5.min.js"></script>
<script src="<?php echo URL; ?>css/calendario/moment.js"></script>
<script src="<?php echo URL; ?>css/calendario/daterangepicker.js"></script>
<script src="<?php echo URL; ?>css/select/js.js"></script>


<script>var uri = "<?php echo URL; ?>";</script>
<script>$(document).ready(function(){$('#tabla').DataTable();});</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#reportesgestorp').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6]
                }
            },


        ]
    } );
} );

    $(document).ready(function() {
    $('#reportesadmin').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0,1,2,3,4]
                }
            },


        ]
    } );
} );

</script>


</body>

</html>
