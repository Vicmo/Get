<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #238276">
  <title>Tecnoparque  | Talentos</title>
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
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <br>
                  <h2><small>Los elementos con (*) son obligatorios</small></h2>
                  <br>

                  <div class="clearfix" ></div>
                  <h3 ><small>Datos Personales</small></h2>
                    <div class="x_content" >
                      <br />

                      <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                      action="<?= URL?>talento/modificar"  method="POST">

                       <input value="<?php echo "$documento";?>" id="gestorrrr" name="gestortxt" type="hidden">
                      <input value=""  id="txtgen" type="hidden">
                      <input value=""  name="idc" id="idc" type="hidden">
                      <input value="<?= $datos['documento'];?>"  name="txtd" type="hidden">
                      <input value="<?php echo date("Y"); ?>" id="txtano" type="hidden">

                      <div class="item form-group">

                        <div class="item form-group">
                          <label class="control-label col-md-2 col-sm-3 col-xs-3" >Tipo Documento<span class="required">*</span>
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-3">
                            <select id="txttipodocumento"   class="form-control" name="txttipodocumento" required="">
                              <?php foreach ($tipodoc as $key => $value): ?>
                               <option value="<?= $value['idtipodocumento'] ?>"><?=$value['nombre'] ?></option>
                             <?php endforeach; ?>
                           </select>
                         </div>




                         <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Documento<span class="required">*</span>
                         </label>  
                         <div class="control-group">
                          <div class="controls">
                           <div class="col-md-3 col-sm-3 col-xs-3">

                             <input disabled="" name="txtdocumento" required="" value="<?= $datos['documento'];?>" id="txtdocumeto"  onkeypress="return valida(event)" class="form-control col-md-7 col-xs-12">
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>

                   <div class="item form-group">

                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                      </label>

                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input name="txtnombre" value="<?= $datos['nombres'];?>" id="txtnombre" required class="form-control col-md-7 col-xs-12">

                     </div>


                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Apellidos<span class="required">*</span>
                     </label>

                     <div class="col-md-3 col-sm-3 col-xs-3">
                      <input name="txtapellido"  value="<?= $datos['apellidos'];?>"  id="txtapellidos" required class="form-control col-md-7 col-xs-12">

                    </div>
                  </div>
                </div>



                <div class="item form-group">
                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Fecha de Nacimiento<span class="required">*</span>
                    </label>  
                    <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">
                          <input type="text" value="<?= $datos['fechanacimiento'];?>"  name="fecha_naci" class="form-control has-feedback-left" id="single_cal3">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Correo<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                         <input type="email" required id="txtcorreo" value="<?= $datos['correo'];?>" onchange="validac()" class="form-control col-md-7 col-xs-12" name="txtcorreo">
                       </div>

                     </div>
                   </div>
                 </div>
               </div>


               <div class="item form-group">
                 <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Genero<span class="required">*</span>
                   </label>

                   <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px">

                    Masculino: <input type="radio" class="flat" name="txtgenero"  id="m" value="Masculino"/> 
                    Femenino: <input type="radio" class="flat" name="txtgenero" id="f" value="Femenino" />


                  </div>

                  <div class="item form-group">
                    <div class="item form-group">
                     <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Tipo Talento<span class="required">*</span>
                     </label>

                     <div class="col-md-3 col-sm-3 col-xs-3">

                      <select id="txttipotalento" class="form-control" name="txttipotaleto" required>

                       <?php foreach ($tipotale as $key => $value): ?>
                         <option value="<?= $value['idtipotalento'] ?>"><?=$value['nombre'] ?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                 </div>
               </div>


               <div class="item form-group">
                <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" >Ocupación<span class="required">*</span>
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <select id="txtocupacion" class="form-control" required name="txtocupacion">

                      <?php foreach ($ocu as $key => $value): ?>
                       <option value="<?= $value['idocupacion'] ?>"><?=$value['nombre'] ?></option>
                     <?php endforeach; ?>
                   </select>
                 </div>

                 <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Descripción Ocupación<span class="required"></span>
                 </label>
                 <div class="col-md-3 col-sm-3 col-xs-3">
                  <input name="txtdes_ocu"  id="txtnum_fijo" value="<?= $datos['des_ocu'];?>" class="form-control col-md-7 col-xs-12" >
                </div>

              </div> 
            </div>


            <div class="item form-group">
              <div class="item form-group">
               <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Numero Celular<span class="required">*</span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                 <input  id="txtnum_cel" onkeypress="return valida(event)" value="<?= $datos['numerocelular'];?>" minlength="10" maxlength="10" required class="form-control col-md-7 col-xs-12" name="txtnum_cel">
               </div>
               <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Numero Fijo<span class="required"></span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                <input name="txtnum_fijo"  id="txtnum_fijo"  value="<?= $datos['numerofijo'];?>" class="form-control col-md-7 col-xs-12" >
              </div>
            </div>
          </div>
          <div class="item form-group">
            <div class="item form-group">
              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Ciudad de Residencia<span class="required">*</span>
              </label>
              <div class="col-md-3 col-sm-3 col-xs-3">
               <select id="txtciudad" class="form-control" name="txtciudad" required>

                 <?php foreach ($ciudad as $key => $value): ?>
                   <option value="<?= $value['idciudad'] ?>"><?=$value['nombre'] ?></option>
                 <?php endforeach; ?>
               </select>
             </div>


             <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Dirección de Residencia<span class="required"></span>
             </label>
             <div class="col-md-3 col-sm-3 col-xs-3">
               <input name="txtdireccion"  id="txtdireccion" value="<?= $datos['direccion'];?>"  class="form-control col-md-7 col-xs-12" >
             </div>
           </div>
         </div>


         <div class="item form-group">
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Estrato<span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <input required name="txtestrato" maxlength="1" value="<?= $datos['estrato'];?>" onkeypress="return valida(event)" id="txtestrato" class="form-control col-md-7 col-xs-12" >
            </div>
          </div>
        </div>

        <hr>
        <h3 ><small>Estudios</small></h2>
          <div>
           <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Institución<span class="required">*</span>
           </label>
           <div class="col-md-3 col-sm-3 col-xs-3">
            <input name="txtinstitucion"  value="<?= $datos['institucion'];?>" required 
            id="txtinstucion" class="form-control col-md-7 col-xs-12" >
          </div>

          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nivel académico<span class="required">*</span>
          </label>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <select id="txtnivel_aca" class="form-control" name="txtnivel_aca" required>

             <?php foreach ($nivelaca as $key => $value): ?>
               <option value="<?= $value['idnivelacademico'] ?>"><?=$value['nombre'] ?></option>
             <?php endforeach; ?>
           </select>
         </div>
       </div> 

     </div>


     <div class="item form-group">
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Título Obtenido<span class="required">*</span>
        </label>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <input name="txttitu_obte"  id="txttitu_obte" required value="<?= $datos['titulobtenido'];?>" class="form-control col-md-7 col-xs-12" >

        </div>

        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Año terminación<span class="required">*</span>
        </label>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <input name="txtaño_termi" maxlength="4" value="<?= $datos['anoterminacion'];?>" onkeypress="return valida(event)" minlength="4" maxlength="4" id="txtaño_termi" required class="form-control col-md-7 col-xs-12" >
        </div>
      </div>
    </hr>
    <br>
    <center><button type="button" id="modificar"  class="btn btn-success">Modificar</button>

      <a id="cancelar" class="btn btn-danger" type="button">Cancelar</a>  


    </div>
  </div>
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

<script src="<?php echo URL; ?>js/modificartalento.js"></script>
<script type="text/javascript">
 $("#txttipodocumento").val("<?= $datos['idtipodoc'];?>");
 $("#txttipotalento").val("<?= $datos['idtptal'];?>");
 $("#txtocupacion").val("<?= $datos['ocu'];?>");
 $("#txtciudad").val("<?= $datos['ciu'];?>");
 $("#txtnivel_aca").val("<?= $datos['lvl'];?>");
 $("#txtgen").val("<?= $datos['genero'];?>");
 var g = $("#txtgen").val();
 if (g == "Masculino") {
  $('#m').prop('checked',true);
}else{
  $('#f').prop('checked',true);
}

</script>
<script type="text/javascript">
    var g = $("#gestorrrr").val();
  var ano = $("#txtano").val();
</script>

<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"talento/index/"+ano+"/"+g+"#menu2";});</script>
