<title>Tecnoparque | Focos</title>
<body style="background: #EDEDED">
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2><small>Los elementos con (*) son obligatorios</small></h2>
              <div class="clearfix" ></div>
              <div class="x_content" >
                <ul class="nav navbar-right panel_toolbox">
                  <li class="dropdown">
                  </li>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"  action="<?= URL?>foco/modificar"  method="POST">
                <input type="hidden" value="<?= $datos['idfoco'];?>" name="txtid">
                <div class="item form-group">
                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                     <input name="txtnombre" value="<?= $datos['nombre'];?>"  id="txtnombre" required class="form-control col-md-7 col-xs-12">
                   </div>
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Linea<span class="required"> (Mensual)*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                    <select id="txtlinea" class="form-control" name="txtlinea" required>
                     <?php foreach ($linea as $key => $value): ?>
                       <option value="<?= $value['idlinea'] ?>"><?=$value['nombre']?></option>
                     <?php endforeach; ?>
                   </select>
                 </div>
               </div>
             </div>
             <br>
             <center><button type="button" id="modificar"  class="btn btn-success">Modificar</button>
              <a id="cancelar" class="btn btn-danger" type="button">Cancelar</a>
              <br>
              <br>
            </form>
            <br>
            <script type="text/javascript">
             $("#txtlinea").val("<?= $datos['linea'];?>");
           </script>
           <script src="<?php echo URL; ?>js/modificarfoco.js"></script>
           <script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"foco/index/<?= $idnodo ?>/#menu2";});</script>
