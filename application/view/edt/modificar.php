<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #238276">
  <title>Tecnoparque  | Edt</title>
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


                <div class="clearfix" ></div>
 
                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                  action="<?= URL?>edt/modificar"  method="POST">
                  <input value="<?php echo "$documento";?>" id="txtdocumento" name="txtgestor" type="hidden">

                 <input type="hidden" value="<?= $datos['idedt'];?>"  name="txtid" >

                  <div class="item form-group">

                    <div class="item form-group">


                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Fecha<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <input value="<?= $datos['fecha'];?>" type="text" name="txtfecha" class="form-control has-feedback-left" id="single_cal3">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required value="<?= $datos['nombre'];?>" name="txtnombre" type="data-toggle" id="txtnombre" class="form-control col-md-7 col-xs-12" >
                     </div>
                     
                     






                   </div>
                 </div>

                 <div class="item form-group">
                   <div class="item form-group">
                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Empresa<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required value="<?= $datos['empresa'];?>" name="txtempresa" id="txtempresa" class="form-control col-md-7 col-xs-12" >
                     </div>

                     <div class="item form-group">
                      <div class="item form-group">
                       <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Contacto<span class="required">*</span>
                       </label>
                       <div class="col-md-3 col-sm-3 col-xs-3">
                         <input value="<?= $datos['contacto'];?>" name="txtcontacto" id="txtcontacto" required="" class="form-control col-md-7 col-xs-12" >
                       </div>
                     </div>
                   </div>

                   <div class="item form-group">
                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Correo<span class="required">*</span>
                      </label>  
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">

                            <input  value="<?= $datos['correo'];?>" name="txtcorreo" required="" id="txtcorreo" type="email" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Telefono<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required value="<?= $datos['telefono'];?>" name="txttelefono" id="txttelefono" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>






                 </div>
                 <div class="item form-group">
                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Observaciones<span class="required">*</span>
                    </label>  
                    <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">

                          <textarea required  name="txtobservaciones" maxlength="200"  id="txtdes" class="form-control" rows="3"> <?= $datos['observaciones'];?></textarea>




                        </div>
                      </div>
                    </div>


                  </div>


                  <hr>

                  <br>
                  <h2>Asistentes</h2>



                </div>

                <div class="item form-group">
                 <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Empleados<span class="required"></span>
                 </label>
                 <div class="col-md-1 col-sm-3 col-xs-3">
                   <input  value="<?= $datos['empleados'];?>" name="txtempleados" onkeypress="return cero(event)" id="txtempleados" class="form-control col-md-7 col-xs-12" >
                 </div>
                 <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Instructores<span class="required"></span>
                  </label>  
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-1 ">

                        <input  value="<?= $datos['instructores'];?>"  name="txtinstructores" id="txtinstructores" onkeypress="return cero(event)" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  </div>

                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Aprendices<span class="required"></span>
                  </label>
                  <div class="col-md-1 col-sm-3 col-xs-3">
                   <input value="<?= $datos['aprendices'];?>" name="txtaprendices" onkeypress="return cero(event)" id="txtaprendices" class="form-control col-md-7 col-xs-12" >
                 </div>

                 <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Publico<span class="required"></span>
                  </label>  
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-1 ">

                        <input  value="<?= $datos['publico'];?>" name="txtpublico"  id="txtpublico" onkeypress="return cero(event)" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  </div>


                </div>

              </div>
 
            </div>

            <div class="item form-group">






            </div>
            <div class="form-group">
             <center><button type="button" name="modificar" id="modificar" class="btn btn-success">Modificar</button>
                 <a  id="cancelar" class="btn btn-danger" type="button">Cancelar</a>  
             </div>


           </div>
         </div>
       </div>
     </div>
     <script src="<?php echo URL; ?>js/edt.js"></script> 
<script type="text/javascript">
  var docug = $("#txtdocumento").val();
</script>
  <script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"edt/index/"+docug+"/#menu2";});</script>





    