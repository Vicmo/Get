<body style="background: #238276">
  <title>Tecnoparque  | Uso de infraestructúra</title>
  <div class="right_col" role="main">
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

              <div class="tab-content" >
                <div id="home" class="tab-pane fade in active">
                  <br>
                  <h2><small>Los elementos con (*) son obligatorios</small></h2>
                  <div class="clearfix" ></div>

                  <div class="x_content" >
                    <br />

                    <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                    action="<?= URL?>usoinfraestructura/modificar"  method="POST">

                    <input value="<?php echo "$documento";?>" name="txtdocumento" id="txtdocumento" type="hidden">
                    <input value="<?= $datos['idusoinfraestructura'];?>"  id="txtid" name="txtid" type="hidden">
                    <div class="item form-group">

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-3" >Fecha<span class="required">*</span>
                        </label>  
                        <div class="control-group">
                          <div class="controls">
                            <div class="col-md-3 ">
                              <input name="txtfecha" disabled="" value="<?= $datos['fecha'];?>"  class="form-control has-feedback-left"  id="">
                              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                          </div>
                        </div>

                        <label class="control-label col-md-2 col-sm-3 col-xs-3" >Proyecto<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <input  id="txtproyecto" value="<?= $datos['nombre'];?>" class="form-control col-md-7 col-xs-12" disabled="">
                        </div>


                      </div>
                    </div>
                    <div class="item form-group">

                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Gestor<span class="required">*</span>
                     </label>

                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input  id="txtgestor" value="<?= $datos['nombres'];?> <?= $datos['apellidos'];?>" class="form-control col-md-7 col-xs-12" disabled="">

                     </div>

                     <div class="item form-group">

                       <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Linea<span class="required">*</span>
                       </label>

                       <div class="col-md-3 col-sm-3 col-xs-3">
                        <input  id="txtlinea" value="<?= $datos['linea'];?>" class="form-control col-md-7 col-xs-12" disabled="">

                      </div>
                    </div>
                  </div>

                  <hr>
                  <h2><small>Si no se van a registrar horas de asesorias dejar el campo vacío</small></h2>
                  <br>
                  <br>
                  <br>



                  <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Asesoria Directa  <span class="required">(Horas)</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                    <input name="txtad" value="<?= $datos['asesoriad'];?>" onkeypress="return cero(event)" id="txtad" class="form-control col-md-7 col-xs-12" >
                  </div>

                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Asesoria Indirecta  <span class="required">(Horas)</span>
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <input name="txtai" value="<?= $datos['asesoriai'];?>" onkeypress="return cero(event)" id="txtai" class="form-control col-md-7 col-xs-12" >
                  </div>



                </div>

                <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Descripción <span class="required">*</span>
                  </label>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <textarea required name="txtdes" maxlength="200"  id="txtdes" class="form-control" rows="5"><?= $datos['descripcion'];?></textarea>
                  </div>
                  <br>
                </div>
                <br>

                <center><button type="button" id="modificar"  class="btn btn-success">Modificar</button>

                  <a id="cancelar" class="btn btn-danger" type="button">Cancelar</a>  
                </div>

              </div>


            </div>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">




          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>
</div>
</div>
<script src="<?php echo URL; ?>js/modificaruso.js"></script>
<script type="text/javascript">
  var docug = $("#txtdocumento").val();
</script>
<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"usoinfraestructura/index/"+docug+"/#menu2";});</script>
