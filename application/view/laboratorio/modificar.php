<title>Tecnoparque | Laboratorios</title>
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2><small>Los elementos con (*) son obligatorios</small></h2>
              <div class="x_content" >
              <div class="clearfix"></div>
            <div class="x_content">
              <br />
              <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"  action="<?= URL?>laboratorio/modificar"  method="POST">
                <input type="hidden" value="<?= $datos['idlaboratorio'];?>" name="txtid">
                <input type="hidden" value="<?= $idnodo ?>" name="txtidnodo">
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
                  <div class="item form-group">
                    <label style="padding-right: 20px; margin-left: 10px;" class="control-label col-md-2 col-sm-12 col-xs-12" for="email">Costos Administrativos<span class="required">*</span>
                    </label>
                    <div class="input-group col-md-1 col-sm-1 col-xs-1">
                     <input name="txtparticipacion" value="<?= $datos['participacioncostos'];?>" onkeypress="return horas(event)" id="txtparticipacion" required class="form-control col-md-2 col-xs-2">
                     <span class="input-group-addon">%</span>
                   </div>
                 </div>
                   <br>
                   <center><button type="button" id="modificar"  class="btn btn-success">Modificar</button>
                    <a  id="cancelar" class="btn btn-danger" type="button">Cancelar</a>
                    <br>
                    <br>
                  </form>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
            <script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/parsley.js"></script>
              <script type="text/javascript">
               $("#txtlinea").val("<?= $datos['linea'];?>");
             </script>
             <script src="<?php echo URL; ?>js/laboratorio.js"></script>
             <script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"laboratorio/index/<?= $idnodo ?>/#menu2";});</script>
