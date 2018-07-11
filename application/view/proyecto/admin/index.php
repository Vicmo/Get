<div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>Proyectos</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <!-- Add content to the page ... -->
                    <ul class="nav nav-tabs bar_tabs ">
                      <li id="registro" class="active"><a data-toggle="tab" href="#home">Consultar Proyectos</a></li>
                      <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Talentos</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <br>
                        <h2 class="text-center"><b>Proyectos</b></h2>
                        <br>
                        <div class="row topinput">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="item form-group" style="margin-left: 30%">
                              <label class="control-label col-md-1 col-sm-4 col-xs-12" for="nodo">Nodo<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-8 col-xs-12">
                              <select id="txtnodotbproyecto" class="form-control col-md-9 col-xs-12" name="txtnodotbproyecto" required="">
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
                            <center><button type="button" id="btnconsultaproyecto" class="btn btn-success">Consultar Proyectos</button>
                          </div>
                        <br><br>
                        <table class="table table-striped jambo_table bulk_action dt-responsive no-wrap " id="tblproyecto"  width="100%" style="visibility: hidden;">
                          <thead>
                            <tr>
                              <th>Código Proyecto</th>
                              <th>Nombre de Proyecto</th>
                              <th>Tipo de Proyecto</th>
                              <th>Linea</th>
                              <th>Foco</th>
                              <th>Gestor</th>
                              <th>Fecha de Creación</th>
                              <th>Estado Proyecto</th>
                              <th>Opciones</th>
                              <!-- <th>Admitido</th> -->

                            </tr>
                          </thead>

                          <tbody>

                        </tbody>
                      </table>



                      </div>
                      <div id="menu2" class="tab-pane fade">
                        <br>
                        <ul class="nav nav-tabs bar_tabs ">
                          <li id="" class="active"><a data-toggle="tab" href="#consultatalento">Consultar Talentos</a></li>
                          <li id=""><a data-toggle="tab" href="#consultatalentogestor"> Consultar Talentos por gestor</a></li>
                        </ul>
                        <div class="tab-content">
                          <div id="consultatalento" class="tab-pane fade in active">
                            <h2 class="text-center"><b>Talentos</b></h2><br><br>
                            <div class="row topinput" >
                              <div class="item form-group" style="margin-left: 30%">
                              <label class="control-label col-md-1 col-sm-4 col-xs-12" for="nodo">Nodo<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-8 col-xs-12">
                              <select id="txtnodotalento" class="form-control col-md-9 col-xs-12" name="txtnodotalento" required="">
                                <option value="">Seleccione nodo</option>
                                <?php foreach ($nodos as $key => $value): ?>
                                  <option value="<?= $value['idnodo'] ?>"><?=$value['nodo']?></option>
                                <?php endforeach; ?>
                              </select>
                              </div>
                            </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                               <center><button type="button" id="btnconsultaproyecto" class="btn btn-success">Consultar Talentos</button>
                            </div>
                            <br><br>
                            <table class="table table-striped jambo_table bulk_action dt-responsive no-wrap " id="tbltalento"  width="100%">
                              <thead>
                                <tr>
                                   <th>Código Proyecto</th>
                                   <th>Nombre de Proyecto</th>
                                   <th>Gestor</th>
                                   <th>Talento Lider</th>

                                   <th>Nodo</th>
                                   <th>Rol</th>
                                   <th>Tipo Taleto</th>
                                   <th>Estado</th>
                                   <th>Opciones</th>

                                </tr>
                              </thead>
                             <tbody>
                             <!-- -->
                             </tbody>
                          </table>

                          </div>
                          <div id="consultatalentogestor" class="tab-pane fade">
                            <h2 class="text-center"><b>Taletos por Gestor</b></h2><br><br>
                                <div class="row topinput" >
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                  <label class="control-label col-lg-1 col-md-2 col-sm-1 col-xs-12" for="nodo">Nodo<span class="required">*</span></label>
                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                  <select id="txtnodotalentogestor" class="form-control col-lg-9 col-md-12 col-xs-12" name="txtnodotalentogestor" required onchange="metodos.getGestor(this)">
                                    <option value="">Seleccione nodo</option>
                                    <?php foreach ($nodos as $key => $value): ?>
                                      <option value="<?= $value['idnodo'] ?>"><?=$value['nodo']?></option>
                                    <?php endforeach; ?>
                                  </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                  <label class="control-label col-lg-1 col-md-2 col-sm-1 col-xs-12" for="nodo" >Gestor<span class="required">*</span></label>
                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                  <select id="txtcombogestor" class="form-control col-lg-9 col-md-9 col-xs-12 gt_gestor" name="txtcombogestor" required="">
                                    <option value="">Seleccione Gestor</option>
                                  </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br><br>
                              <div class="form-group">
                                <center><button type="button" id="btnconsultatalentoporgestor" class="btn btn-success">Consultar Talentos</button>
                              </div>
                              <br><br>
                              <table class="table table-striped jambo_table bulk_action dt-responsive no-wrap " id="tbltalentogestor"  width="100%">
                                <thead>
                                  <tr>
                                    <th>Tipo Documento</th>
                                    <th>Talento</th>
                                    <th>Correo</th>
                                    <th>Contacto</th>
                                    <th>Contacto</th>
                                    <th>Nodo</th>
                                    <th>Opciones</th>

                                  </tr>
                                </thead>
                                <tbody>
                                <!-- -->
                                </tbody>
                              </table>

                          </div>

                    </div>
                  </div>
                    <!-- fin content to the page ... -->


                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- /page content -->

      </div>

<!-- modal para talentos en general -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modalproyectopornodo">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title text-center" id="tittle"></h4>
                        </div>
                        <div class="modal-body">
                          <br>
                          <table class="table table-striped jambo_table bulk_action dt-responsive no-wrap" id="tblmodalproyectonodo">

                          </table>


                      </div>
                      <div class="modal-footer">
                        <h4 class="modal-title text-center" ><b>Descripcion del Proyecto</b> </h4>
                        <p class="text-center" id="description"></p>
                      </div>
                    </div>
                  </div>
                </div>
<!-- fin modal-->
 <!-- footer content -->
 <script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
 <script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="<?php echo URL; ?>js/proyectosajax.js"></script>
