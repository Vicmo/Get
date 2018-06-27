<body style="background: #238276">
  <title>Tecnoparque  | Nodo</title>

  <div class="right_col" role="main" >
   <div class="x_title">
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


            <h2><small>Los elementos con (*) son obligatorios</small></h2>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>



                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>nodo/modificar"  method="POST">

                  <input type="hidden" value="<?= $datos['idnodo'];?>"  id="txtidnodo" name="txtidnodo" >
                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Nombre<span class="required">*</span>
                      </label>
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">

                            <input value="<?= $datos['nombrenodo'];?>"  name="txtnombre" required="" id="txtnombre" class="form-control col-md-7 col-xs-12"  >
                          </div>
                        </div>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Direccion<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required value="<?= $datos['direccion'];?>" name="txtdireccion"  id="txtdireccion" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>
                   <div class="item form-group">
                     <label class="control-label col-md-2 col-sm-3 col-xs-3" >Departamento<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <select id="txtdept" class="form-control" name="txtdept" required>
                        <option value="">Seleccione</option>
                        <?php foreach ($depto as $key => $value): ?>
                          <option value="<?= $value['iddepartamento'] ?>"><?=$value['nombre']?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <label class="control-label col-md-2 col-sm-3 col-xs-3" >Ciudad<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <select id="txtciudad" class="form-control" name="txtciudad" required>
                       <option value="">Seleccione</option>
                       <?php foreach ($ciudad as $key => $value2): ?>
                         <option value="<?= $value2['idciudad'] ?>"><?=$value2['ciudad']?></option>
                       <?php endforeach; ?>
                     </select>
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
<!-- <script src="<?php echo URL; ?>js/modificargestor.js"></script> -->
<script type="text/javascript">
  $("#txtdept").val("<?= $datos['iddepartamento'];?>");
  $("#txtciudad").val("<?= $datos['idciudad'];?>");
</script>
</script>
<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"gestor/index/#menu2";});</script>
