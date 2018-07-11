<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dinamizador <?= $dinamizador['nombres'] ?> <?= $dinamizador['apellidos'] ?> - <?= $dinamizador['nombrenodo'] ?> </h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <!-- Add content to the page ... -->

                    <div class="tab-content">

                        <br>
                        <div class="bs-example" data-example-id="glyphicons-accessibility">
                          <div class="alert alert-info" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span> Los elementos con (*) son obligatorios
                          </div>
                        </div>
                        <br>
                        <div class="clearfix"></div>
                        <br>
                        <div class="row">
                          <div class="col-lg-12">
                            <form name="aulas" id="demo-form2"  class="form-horizontal form-label-left" action="<?= URL?>usuario/Update"  method="POST">
                              <input type="hidden" value="<?= $dinamizador['idpersona'];?>"  id="txtidpersona" name="txtidpersona" >
                              <input value="2" id="txtrol" name="txtrol" type="hidden">
                              <div class="item form-group">
                              <div class="row ">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="first-name">Tipo Documento<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <select id="txttipodocumento"   class="form-control col-md-9 col-xs-12" name="txttipodocumento" required="">
                                        <option value="">Seleccione</option>
                                        <?php foreach ($tipodocumento as $key => $value): ?>
                                          <option value="<?= $value['idtipodocumento'] ?>"><?=$value['nombre'] ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtdocumeto">Documento<span class="required">*</span></label>
                                    <div id="docAjax" class="col-md-9 col-sm-8 col-xs-12">
                                      <input name="txtdocumento" value="<?= $dinamizador['documento'];?>"  id="txtdocumento"  class="form-control col-md-9 col-xs-12">
                                      <span class="help-block-1"></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row topinput">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtnombre">Nombres<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="text" name="txtnombres" value="<?= $dinamizador['nombres'];?>"  id="txtnombres" required="required" class="form-control col-md-9 col-xs-12">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtapellidos">Apellidos<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="text" name="txtapellidos" value="<?= $dinamizador['apellidos'];?>"   id="txtapellidos" required class="form-control col-md-9 col-xs-12">
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row topinput">

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtcorreo">Correo<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="text" required id="txtcorreo" value="<?= $dinamizador['correo'];?>" name="txtcorreo" class="form-control col-md-9 col-xs-12">
                                      <span class="help-block-2"></span>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="">Contacto</label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="text" id="txtnum_cel" name="txtcontacto" value="<?= $dinamizador['contacto'];?>"  class="form-control col-md-9 col-xs-12">
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="row topinput">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="nodo">Nodo<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <select id="txtnodo" class="form-control col-md-9 col-xs-12" name="txtnodo" required="">
                                        <option value="">Seleccione nodo</option>
                                        <?php foreach ($nodos as $key => $value): ?>
                                          <option value="<?= $value['idnodo'] ?>"><?=$value['nodo']?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtestado">Estado <span class="required">*</span> </label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                     <div class="input-group2">
                                        <div class="btn-group radio-group">
                                           <label class="btn btn-primary <?= $dinamizador['estado'] == 1 ?'active':'not-active';?>">Activo <input  <?= $dinamizador['estado'] == 1 ? 'checked':'';?> type="radio" value="1" name="txtestado" required=""></label>
                                           <label class="btn btn-primary <?= $dinamizador['estado'] != 1 ?'active':'not-active';?>">Inactivo <input  <?= $dinamizador['estado'] != 1 ? 'checked':'';?> type="radio" value="0" name="txtestado"></label>
                                        </div>
                                     </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <div class="row topinput">
                              <br>
                                <div class="form-group">
                                  <center><button type="button" id="modificar" class="btn btn-success">Modificar</button>
                                  <a  id="cancelar" class="btn btn-danger" type="button">Cancelar</a></center>
                                </div>
                              </div>
                            </div>
                            </form>
                          </div>
                        </div>

                  </div>
                    <!-- fin content to the page ... -->


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- /page content -->

      </div>
    </div>
 <!-- footer content -->


<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="<?php echo URL; ?>js/dinamizadorajax.js"></script>
 <script>
  $('#cancelar').on('click',function(){location.href = uri+"usuario/index/#menu2";});
   $("#txttipodocumento").val("<?= $dinamizador['tipodocumento'];?>");
   $("#txtnodo").val("<?= $dinamizador['nodo'];?>");



    $('#modificar').on('click',function(e){
    e.preventDefault();
   var form = $(this).parents('form');
   // var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
   // var email = document.getElementById("txtcorreo").value;
   if ($("#txttipodocumento").val() && $("#txtdocumento").val()){
        swal({
     title: "¿Desea modificar el registro?",
     type: "warning",
     showCancelButton: true,
     confirmButtonColor: "#57D9D2",
     confirmButtonText: "Si",
     closeOnConfirm: false
   },
   function(isConfirm){

    if (isConfirm) {
     setTimeout(function(){
     form.submit();

     },1500 );

      swal("Modificado", "El registro ha sido modificado correctamente", "success");

    }else{
    }

  });

   }
 });

 </script>


 <!--ponga aca sus script -->
