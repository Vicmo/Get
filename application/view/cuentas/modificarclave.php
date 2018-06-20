<title>Tecnoparque | Cambiar Contraseña</title>
<?php 
$correo = $_SESSION["correo"];
?>
<body style="background: #238276">
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">


      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Cambiar Contraseña<hr><small>Los elementos con (*) son obligatorios</small></h2>

              <ul class="nav navbar-right panel_toolbox">

                <li class="dropdown">                       
                </li>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"  action="<?= URL?>cuentas/modificarclave"  method="POST">

              <div>

               <div class="item form-group">
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <input type="hidden" id="txtcorreo"  name="txtcorreo"  value="<?php echo "$correo";?>" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Clave Actual<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input onchange="validarclave()" name="txtclaveactual" maxlength="30" id="txtclaveactual" type="password" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nueva Clave<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="txtclavenueva" maxlength="30" id="clave1" type="password" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirmar Clave<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="txtclavenuevaa" maxlength="30" id="txtclavenuevaa" type="password" data-parsley-equalto="#clave1" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <br>
              <br>


              <center><button type="button" id="modificarclave"  class="btn btn-success">Cambiar Clave</button>  
                <br>
                <br>
              </form>
              <br>


              <script src="<?php echo URL; ?>js/cambioclave.js"></script>