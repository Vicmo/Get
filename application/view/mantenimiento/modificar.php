  <title>Tecnoparque  | Mantenimiento</title>
  <div class="right_col" role="main" >
      <div class="row" >
          <div class="x_panel" >
            <div class="x_title">
              <div class="clearfix" ></div>
              <h2><small>Los elementos con (*) son obligatorios</small></h2>
              <br>
              <br>
              <div class="x_content" >
                <br />
                <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                action="<?= URL?>mantenimiento/modificar"  method="POST">
                <input type="hidden" value="<?= $datos['idmantenimiento'];?>"  name="txtid" >
                <input type="hidden" value="<?= $idnodo ?>"  name="txtidnodo" >
                <br>
                <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Item<span class="required">*</span>
                    </label>
                    <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">
                          <input   value="<?= $datos['item'];?>"  name="txtitem" required="" id="txtitem" onkeypress="return valid(event)" class="form-control col-md-7 col-xs-12"  >
                        </div>
                      </div>
                    </div>
                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Laboratorio<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <select id="txtlaboratorio" class="form-control select2" name="txtlaboratorio" required>
                        <?php foreach ($laboratorio as $key => $value): ?>
                         <option value="<?= $value['idlaboratorio'] ?>"><?=$value['nombre']?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
               </div>
                 <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Precio<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                     <input required name="txtprecio" value="<?= $datos['precio'];?>" id="txtprecio" class="form-control col-md-7 col-xs-12" >
                   </div>
                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Vida util<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtvidautil" value="<?= $datos['vidautil'];?>" id="txtvidautil" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>
                 <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" >Año ultimo mantenimiento<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                     <input required value="<?= $datos['anoum'];?>"  maxlength="4" minlength="4"  name="txtanoum" onkeypress="return valida(event)" id="txtanoum" class="form-control col-md-7 col-xs-12" >
                   </div>
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Horas de uso<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                     <input required value="<?= $datos['horasuso'];?>" name="txthorasuso" onkeypress="return valida(event)" id="txthorasuso" class="form-control col-md-7 col-xs-12" >
                   </div>
               </div>
               <div class="form-group">
                 <center><button type="submit" id="modificar" class="btn btn-success">Modificar</button>
                  <a id="cancelar" class="btn btn-danger" type="button">Cancelar</a>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
      </div>
  </div>
<footer>
  <div class="pull-right">
    Plataforma Tecnoparque V2
  </div>
</footer>
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<script src="<?php echo URL; ?>js/mantenimiento.js"></script>
<script type="text/javascript">
  $("#txtlaboratorio").val("<?= $datos['laboratorio'];?>");
</script>
<!-- <script type="text/javascript"> $('#txtlaboratorio').select2();</script> -->
<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"mantenimiento/index/<?= $idnodo ?>/#menu2";});</script>
