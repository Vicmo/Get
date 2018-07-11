<div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>Dinamizador</h3>
              </div>
            </div>
            <!-- <div class="clearfix"></div> -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <!-- <div class="x_title"> -->
                  <div class="x_content">
                    <!-- Add content to the page ... -->
                    <ul class="nav nav-tabs bar_tabs ">
                      <li id="registro" class="active"><a data-toggle="tab" href="#home">Registrar Dinamizador</a></li>
                      <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Dinamizador</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <br>
                        <div class="bs-example" data-example-id="glyphicons-accessibility">
                          <div class="alert alert-info" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span> Los elementos con (*) son obligatorios
                          </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                          <div class="col-lg-12">
                            <form name="aulas" id="demo-form2"  class="form-horizontal form-label-left" action="<?= URL?>usuario/registrar"  method="POST" data-parsley-validate>
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
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="number" name="txtdocumento"  id="txtdocumento"  class="form-control col-md-9 col-xs-12" maxlength="11" required="">
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
                                      <input type="text" name="txtnombres"  id="txtnombres" required="required" class="form-control col-md-9 col-xs-12" maxlength="45">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtapellidos">Apellidos<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="text" name="txtapellidos"   id="txtapellidos" required class="form-control col-md-9 col-xs-12" maxlength="45">
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row topinput">

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtcorreo">Correo<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="email" required id="txtcorreo" name="txtcorreo" class="form-control col-md-9 col-xs-12" maxlength="45">
                                      <span class="help-block-2"></span>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="">Contacto</label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="number" id="txtnum_cel" name="txtcontacto"  class="form-control col-md-9 col-xs-12" maxlength="45">
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
                               <label class="btn btn-primary active">Activo <input type="radio" value="1" name="txtestado" ></label>
                               <label class="btn btn-primary not-active">Inactivo <input type="radio" value="0" name="txtestado" ></label>
                            </div>
                         </div>
                    </div>
                </div>
                              </div>

                            </div>






                              <div class="row topinput">


                                <br>
                                <div class="form-group">
                                  <center><button type="button" id="registrar" class="btn btn-success">Registrar</button>

                                </div>
                              </div>
                            </div>
                            </form>
                          </div>
                        </div>

                      </div>
                      <div id="menu2" class="tab-pane fade">
                        <br>

                        <div class="row topinput">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="item form-group" style="margin-left: 30%">
                              <label class="control-label col-md-1 col-sm-4 col-xs-12" for="nodo">Nodo<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-8 col-xs-12">
                              <select id="txtnodotb" class="form-control col-md-9 col-xs-12" name="txtnodotb" required="">
                                <option value="">Seleccione nodo</option>
                                <?php foreach ($nodos as $key => $value): ?>
                                  <option value="<?= $value['idnodo'] ?>"><?=$value['nodo']?></option>
                                <?php endforeach; ?>
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br><br>
                          <div class="form-group">
                            <center><button type="button" id="btnconsulta" class="btn btn-success">Consultar Dinamizadores</button>
                          </div>

                        <br><br>

                        <table class="table table-striped jambo_table bulk_action dt-responsive no-wrap " id="tbldinamizador"  width="100%" style="visibility: hidden;">
                          <thead>
                            <tr>
                              <th>Tipo Documento</th>
                              <th>Dinamizador</th>
                              <th>Correo</th>
                              <th>Contacto</th>
                              <th>Contacto</th>
                              <th>Nodo</th>
                              <th>Estado</th>
                              <th>Editar</th>

                            </tr>
                          </thead>

                          <tbody>
                          <!-- -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                    <!-- fin content to the page ... -->

                  </div>
                <!-- </div> -->
              </div>

              </div>
            </div>
        </div>
<!-- /page content -->

 <!-- footer content -->
 <script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
 <script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/parsley.js"></script>
 <script src="<?php echo URL; ?>js/dinamizadorajax.js"></script>
 <script>


    $('#registrar').on('click',function(e){
    e.preventDefault();
   var form = $(this).parents('form');
   // var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
   // var email = document.getElementById("txtcorreo").value;
   if ($("#txttipodocumento").val() && $("#txtdocumento").val()){
        swal({
     title: "¿Desea guardar el registro?",
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
      swal("Registro Exitoso", "El registro ha sido modificado correctamente", "success");

    }

  });

   }
 });

     var x = location.hash;
  if (x != "") {
    $("#home").removeClass("tab-pane fade in active").addClass("tab-pane fade");
    $(x).addClass('tab-pane fade in active');
    $("#registro").removeClass();
    $("#consulta").addClass('active');
    location.hash = '';
  }

  var str =  window.location.pathname;
  var res = str.substr(-5);
  if (res == "index") {
    $("#home").removeClass("tab-pane fade in active").addClass("tab-pane fade");
    $("#menu2").addClass('tab-pane fade in active');
    $("#registro").removeClass();
    $("#consulta").addClass('active');

  }
 </script>
