<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #238276">
  <title>Tecnoparque  | Mantenimiento</title>
  <div class="right_col" role="main" >
    <div class="">
      <div class="page-title">
        <div class="title_left">
        </div>
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row" >
        <div class="col-md-12">
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

                <br>
                <div class="item form-group">

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

                      <select id="txtlaboratorio" class="form-control" name="txtlaboratorio" required>
                       
                        <?php foreach ($laboratorio as $key => $value): ?>
                         <option value="<?= $value['idlaboratorio'] ?>"><?=$value['nombre']?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>

                 </div>
               </div>

               <div class="item form-group">
                 <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Precio<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                     <input required name="txtprecio" value="<?= $datos['precio'];?>" id="txtprecio" class="form-control col-md-7 col-xs-12" >
                   </div>

                   <div class="item form-group">
                    <div class="item form-group">
                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Vida util<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtvidautil" value="<?= $datos['vidautil'];?>" id="txtvidautil" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>
                 </div>


                 
                 
                 
                 
                 
                 <div class="item form-group">
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
               </div>


               <div class="form-group">
                 <center><button type="submit" id="modificar" class="btn btn-success">Modificar</button>
                  
                  <a id="cancelar" class="btn btn-danger" type="button">Cancelar</a>  
                  
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>




    </div>
  </div>
</div>
</div>


</div>
</div>
</div>
</div>
<script type="text/javascript">
  $("#txtlaboratorio").val("<?= $datos['laboratorio'];?>");
</script>
<script type="text/javascript"> $('#txtlaboratorio').select2();</script>
<script src="<?php echo URL; ?>js/mantenimiento.js"></script>
<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"mantenimiento/index/#menu2";});</script>





