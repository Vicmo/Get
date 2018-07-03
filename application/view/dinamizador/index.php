<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dinamizador <?= $nodos['nodo'];?></h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

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
                        <div class="clearfix"></div>

                        <br>
                        <div class="row">
                          <div class="col-lg-12">
                            <form name="aulas" id="demo-form2"  class="form-horizontal form-label-left" action="<?= URL?>dinamizador/registrar/<?= $nodos['idnodo'];?>"  method="POST">
                              <input value="2" id="txtrol" name="txtrol" type="hidden">
                              <input value="<?= $nodos['idnodo'];?>" id="txtnodo" name="txtnodo" type="hidden">

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
                                      <input name="txtdocumento"  id="txtdocumento"  class="form-control col-md-9 col-xs-12">
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
                                      <input type="text" name="txtnombres"  id="txtnombres" required="required" class="form-control col-md-9 col-xs-12">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtapellidos">Apellidos<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="text" name="txtapellidos"   id="txtapellidos" required class="form-control col-md-9 col-xs-12">
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row topinput">

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtcorreo">Correo<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="text" required id="txtcorreo" name="txtcorreo" class="form-control col-md-9 col-xs-12">
                                      <span class="help-block-2"></span>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-4 col-xs-12" for="">Contacto<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <input type="text" id="txtnum_cel" name="txtcontacto"  class="form-control col-md-9 col-xs-12">
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="row topinput">


                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                      <label class="control-label col-md-3 col-sm-4 col-xs-12" for="txtestado">Estado</label>
                      <div class="col-md-9 col-sm-8 col-xs-12">
                         <div class="input-group2">
                            <div class="btn-group radio-group">
                               <label class="btn btn-primary not-active">Activo <input type="radio" value="1" name="txtestado"></label>
                               <label class="btn btn-primary not-active">Inactivo <input type="radio" value="0" name="txtestado"></label>
                            </div>
                         </div>
                    </div>
                </div>
                              </div>

                            </div>






                              <div class="row topinput">


                                <br>
                                <div class="form-group">
                                  <center><button type="submit" class="btn btn-success">Registrar</button>
                                </div>
                              </div>
                            </div>
                            </form>
                          </div>
                        </div>

                      </div>
                      <div id="menu2" class="tab-pane fade">
                        <br>

                        <table class="table table-striped jambo_table bulk_action dt-responsive no-wrap " id="tbldinamizador"  width="100%">
                          <thead>
                            <tr>
                              <th>Tipo Documento</th>
                              <th>Dinamizador</th>
                              <th>rol</th>
                              <th>Correo</th>
                              <th>Contacto</th>
                              <th>Estado</th>
                              <th>Nodo</th>
                              <th>Editar</th>
                            </tr>
                          </thead>

                          <tbody>
                          <?php foreach ($dinamizadorpornodo as $value) { ?>
                            <tr>
                              <td><?php echo  $value['tipodocumento']; ?></td>
                              <td><?= $value['dinamizador'] ?></td>
                              <td><?= $value['rol'] ?></td>
                              <td><?= $value['correo'] ?> </td>
                              <td><?= $value['contacto'] ?> </td>
                              <td><?= $value['estado'] ?></td>
                              <td><?= $value['nodo'] ?></td>
                              <td>
                                <a href="<?php echo URL ;?>grupos/edit/<?= $value['idpersona'] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
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
<!-- comienzo modal -->
<div id="ver" class="modal fade" role="dialog" >
   <div class="modal-dialog modal-sm" >
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">X</button>
         <center><h4 class="modal-title">Detalles del Talento</h4></center>
       </div>
       <div class="modal-body">
         <div class="table-responsive">
           <table id="tabla2" >
             <thead>
             </thead>
             <tbody id="tablad">
             </tbody>
           </table>
         </div>
       </div>

     </div>

   </div>
 </div>
 <!--fin modal-->
      </div>
    </div>
 <!-- footer content -->

 <!--ponga aca sus script -->


<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/fastclick/lib/fastclick.js"></script>
<script src="<?php echo URL; ?>css/vendors/nprogress/nprogress.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/iCheck/icheck.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/switchery/dist/switchery.min.js"></script> -->
<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/parsley.js"></script> -->
<script src="<?php echo URL; ?>css/alertas/dist/sweetalert-dev.js"></script>
<script src="<?php echo URL; ?>css/build/js/custom.js"></script>
<script src="<?php echo URL; ?>js/tabla.min.js"></script>
<script src="<?php echo URL; ?>js/campos.js"></script>
<script src="<?php echo URL; ?>css/datatable/tabla2.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo URL; ?>js/md5.min.js"></script>
<script src="<?php echo URL; ?>css/calendario/moment.js"></script>
<script src="<?php echo URL; ?>css/calendario/daterangepicker.js"></script>
<script src="<?php echo URL; ?>css/select/js.js"></script>

<script src="<?php echo URL; ?>css/reportes/g1.js"></script>
<script src="<?php echo URL; ?>css/reportes/g2.js"></script>
<script src="<?php echo URL; ?>css/reportes/g3.js"></script>
<script src="<?php echo URL; ?>css/reportes/g4.js"></script>

<script>var uri = "<?php echo URL; ?>";</script>
<script>$(document).ready(function(){$('#tbldinamizador').DataTable();});</script>
<script src="<?php echo URL; ?>js/dinamizadorajax.js"></script>
</script>
</body>
</html>

<script type="text/javascript">



    $(function() {
    // Input radio-group visual controls
    $('.radio-group label').on('click', function(){
        $(this).removeClass('not-active').siblings().addClass('not-active');
    });
});


  </script>
