<link href="<?php echo URL; ?>css/reportes/r.min.css" rel="stylesheet">
<script src="<?php echo URL; ?>js/graficos.js"></script>
<script src="<?php echo URL; ?>js/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<title>Tecnoparque | Indicadores</title>
<input type="hidden" id="demo-form2" name="">
<input type="hidden" id="inputestadotodo" value="">
<input type="hidden" id="inputtipotodo" value="">
<input type="hidden" id="inputempresas" value="">
<input type="hidden" id="inputlinea" value="">
<input type="hidden" id="inputgestor" value="">
<input type="hidden" id="inputano" value="<?php echo date("Y"); ?>">
<body class="footer_fixed nav-sm" style="">
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="clearfix" ></div>
            <ul class="nav nav-tabs bar_tabs">
             <li class="active"><a data-toggle="tab" href="#menu2">Tecnoparque</a></li>
             <li ><a data-toggle="tab" href="#home">Línea</a></li>
             <li ><a data-toggle="tab" href="#menu">Gestor</a></li>
             <li ><a data-toggle="tab" href="#menu3">Proyectos</a></li>
             <li ><a data-toggle="tab" href="#menu4">EDT's</a></li>
           </ul>
           <div class="tab-content">
             <div id="menu4" class="tab-pane fade">
                          <div class="panel-body">
                            <div class="clearfix" ></div>
                            <ul class="nav nav-tabs bar_tabs">
                             <li class="active"><a data-toggle="tab" href="#graf_edt">Gráfico</a></li>
                             <li ><a data-toggle="tab" href="#tab_edt">Tabla (Excel)</a></li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane fade in active" id="graf_edt">
                                <div class="col-md-8" id="idgrafico_edt">
                                  <canvas id="grafico_edt"></canvas>
                                </div>
                                <div class="col-md-4">
                                  <br>
                                  <br>
                                  <div class="item form-group">
                                    <label class="control-label col-md-2">Año<span class="required"></span></label>
                                    <div class="col-md-8">
                                     <select id="txtanoedt" class="form-control">
                                       <option value="2017">2017</option>
                                       <option value="2018">2018</option>
                                       <option value="2019">2019</option>
                                       <option value="2020">2020</option>
                                     </select>
                                   </div>
                                 </div>
                                 <br><br><br>
                                 <div class="form-group">
                                   <center><button type="button" id="consultaedt" class="btn btn-success">Consultar</button>
                                   </center>
                                  </div>
                                  <br>
                                  <br>
                                  <br>
                                </div>
                            </div>
                              <div class="tab-pane fade" id="tab_edt">
                                <div class="item form-group">
                                  </center>
                                </div>
                                <table class="table table-striped jambo_table bulk_action" id="reporteedt">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Mes</th>
                                      <th>Cantidad de EDT's realizadas</th>
                                      <th>Empleados (Empresarios)</th>
                                      <th>SENA (Aprendices/Instructores)</th>
                                      <th>Total de Asistentes</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>


                  <div class="clearfix"></div>
               </div>
             <div id="menu3" class="tab-pane fade">
               <div class="x_content">
               <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                 <div class="panel">
                <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                  <h4 class="panel-title">Proyectos Inscritos por Mes</h4>
                    </a>
                      <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <div class="clearfix" ></div>
                          <ul class="nav nav-tabs bar_tabs">
                           <li class="active"><a data-toggle="tab" href="#graf_inscritos">Gráfico</a></li>
                           <li ><a data-toggle="tab" href="#tab_inscritos">Tabla (Excel)</a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane fade in active" id="graf_inscritos">
                              <div class="col-md-8" id="idgrafico_inscritos">
                                <canvas id="grafico_inscritos"></canvas>
                              </div>
                              <div class="col-md-4">
                                <br>
                                <br>
                                <div class="item form-group">
                                  <label class="control-label col-md-2">Año<span class="required"></span></label>
                                  <div class="col-md-8">
                                   <select id="txtanopi" class="form-control">
                                     <option value="2017">2017</option>
                                     <option value="2018">2018</option>
                                     <option value="2019">2019</option>
                                     <option value="2020">2020</option>
                                   </select>
                                 </div>
                               </div>
                               <br><br><br>
                               <div class="form-group">
                                 <center><button type="button" id="consultapinscritos" class="btn btn-success">Consultar</button>
                                 </center>
                                </div>


                                <br>
                                <br>
                                <br>

                              </div>
                          </div>
                            <div class="tab-pane fade" id="tab_inscritos">
                              <div class="item form-group">
                                </center>
                              </div>
                              <table class="table table-striped jambo_table bulk_action" id="reportepinscritos">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Mes</th>
                                    <th>Cantidad de Proyectos Inscritos</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                <div class="panel">
                <a class="panel-heading collapse" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
                  <h4 class="panel-title">Prototipos funcionales finalizados por mes (Cierre PF)</h4>
                    </a>
                      <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <ul class="nav nav-tabs bar_tabs">
                           <li class="active"><a data-toggle="tab" href="#graf_protofinalizado">Gráfico</a></li>
                           <li ><a data-toggle="tab" href="#tab_protofinalizado">Tabla (Excel)</a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane fade in active" id="graf_protofinalizado">
                              <div class="col-md-8" id="idgrafico_protofinalizado">
                                <canvas id="grafico_protofinalizado"></canvas>
                              </div>
                              <div class="col-md-4">
                                <br>
                                <br>
                                <div class="item form-group">
                                  <label class="control-label col-md-2">Año<span class="required"></span></label>
                                  <div class="col-md-8">
                                   <select id="txtanopf" class="form-control">
                                     <option value="2017">2017</option>
                                     <option value="2018">2018</option>
                                     <option value="2019">2019</option>
                                     <option value="2020">2020</option>
                                   </select>
                                 </div>
                               </div>
                               <br><br><br>
                               <div class="form-group">
                                 <center><button type="button" id="consultapfinalizados" class="btn btn-success">Consultar</button>
                                 </center>
                                </div>
                                <br><br><br>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="tab_protofinalizado">
                              <table class="table table-striped jambo_table bulk_action" id="reportepfinalizado">
                                <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Mes</th>
                                  <th>Cantidad de Prototipos Finalizados</th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <a class="panel-heading collapse" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="true" aria-controls="collapseThree">
                        <h4 class="panel-title">Productos Mínimos Viables puestos en el mercado por mes (Cierre PMV)</h4>
                      </a>
                      <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <ul class="nav nav-tabs bar_tabs">
                           <li class="active"><a data-toggle="tab" href="#graf_protopmv">Gráfico</a></li>
                           <li ><a data-toggle="tab" href="#tab_protopmv">Tabla (Excel)</a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane fade in active" id="graf_protopmv">
                              <div class="col-md-8" id="idgrafico_protopmv">
                                <canvas id="grafico_protopmv"></canvas>
                              </div>
                              <div class="col-md-4">
                                <br>
                                <br>
                                <div class="item form-group">
                                  <label class="control-label col-md-2">Año<span class="required"></span></label>
                                  <div class="col-md-8">
                                   <select id="txtanoppm" class="form-control">
                                     <option value="2017">2017</option>
                                     <option value="2018">2018</option>
                                     <option value="2019">2019</option>
                                     <option value="2020">2020</option>
                                   </select>
                                 </div>
                               </div>
                               <br><br><br>
                               <div class="form-group">
                                 <center><button type="button" id="consultappm" class="btn btn-success">Consultar</button>
                                 </center>
                                </div>
                                <br><br><br>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="tab_protopmv">
                              <table class="table table-striped jambo_table bulk_action" id="reporteppm">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Mes</th>
                                    <th>Cantidad de prototipos puestos en el mercado</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <a class="panel-heading collapse" role="tab" id="headingFour1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1" aria-expanded="true" aria-controls="collapseFour">
                        <h4 class="panel-title">Proyectos articulados con empresas inscritos por mes</h4>
                      </a>
                      <div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <ul class="nav nav-tabs bar_tabs">
                           <li class="active"><a data-toggle="tab" href="#graf_empart">Gráfico</a></li>
                           <li ><a data-toggle="tab" href="#tab_empart">Tabla (Excel)</a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane fade in active" id="graf_empart">
                              <div class="col-md-8" id="idgrafico_empart">
                                <canvas id="grafico_empart"></canvas>
                              </div>
                              <div class="col-md-4">
                                <br>
                                <br>
                                <div class="item form-group">
                                  <label class="control-label col-md-2">Año<span class="required"></span></label>
                                  <div class="col-md-8">
                                    <select id="txtanoarteins" class="form-control" name="">
                                      <option value="2016">2016</option>
                                      <option value="2017">2017</option>
                                      <option value="2018">2018</option>
                                      <option value="2019">2019</option>
                                      <option value="2020">2020</option>
                                    </select>
                                  </div>
                               </div>
                               <br><br><br>
                               <div class="form-group">
                                 <center><button type="button" id="consultaparteins" class="btn btn-success">Consultar</button>
                                 </center>
                                </div>
                                <br><br><br>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="tab_empart">
                              <table class="table table-striped jambo_table bulk_action" id="reporteparteins">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Mes</th>
                                    <th>Cantidad de proyectos articulados con empresas inscritos</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <a class="panel-heading collapse" role="tab" id="headingFive1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1" aria-expanded="true" aria-controls="collapseFive">
                        <h4 class="panel-title">Proyectos articulados con empresas en ejecucción en el presente mes</h4>
                      </a>
                      <div id="collapseFive1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                          <p>Se mostrarán los proyectos articulados con empresas que estan en estado de Ejecucción en este momento.</p>
                            </center>
                            <div class="col-md-8" id="idgrafico_empeje">
                              <canvas id="grafico_empeje"></canvas>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <br><br><br>
                                <center><button type="button" id="consultaartempeje" class="btn btn-success">Consultar</button>
                                </center>
                               </div>
                               <br><br><br>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapse" role="tab" id="headingSix1" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1" aria-expanded="true" aria-controls="collapseSix">
                          <h4 class="panel-title">Proyectos articulados con empresas finalizados por mes</h4>
                        </a>
                        <div id="collapseSix1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                          <div class="panel-body">
                            <ul class="nav nav-tabs bar_tabs">
                             <li class="active"><a data-toggle="tab" href="#graf_empfin">Gráfico</a></li>
                             <li ><a data-toggle="tab" href="#tab_empfin">Tabla (Excel)</a></li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane fade in active" id="graf_empfin">
                                <div class="col-md-8" id="idgrafico_empfin">
                                  <canvas id="grafico_empfin"></canvas>
                                </div>
                                <div class="col-md-4">
                                  <br>
                                  <br>
                                  <div class="item form-group">
                                    <label class="control-label col-md-2">Año<span class="required"></span></label>
                                    <div class="col-md-8">
                                      <select id="txtanoaef" class="form-control" name="">
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                      </select>
                                    </div>
                              </div>
                              <br><br><br>
                            </div>
                            <div class="form-group">
                              <center><button type="button" id="consultaartempfin" class="btn btn-success">Consultar</button>
                              </center>
                            </div>
                          </div>
                              <div class="tab-pane fade" id="tab_empfin">
                                <table class="table table-striped jambo_table bulk_action" id="reporteartempfin">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Mes</th>
                                      <th>Cantidad de proyectos articulados con empresas que finalizaron (Cierre PF + Cierre PMV)</th>
                                      <!-- <th>Gestor</th>
                                      <th>Linea</th> -->
                                    </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="panel">
                        <a class="panel-heading collapse" role="tab" id="headingSeven1" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven1" aria-expanded="true" aria-controls="collapseSeven">
                          <h4 class="panel-title">Proyectos articulados con SENA finalizados por mes</h4>
                        </a>
                        <div id="collapseSeven1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                          <div class="panel-body">
                            <ul class="nav nav-tabs bar_tabs">
                             <li class="active"><a data-toggle="tab" href="#graf_senafin">Gráfico</a></li>
                             <li ><a data-toggle="tab" href="#tab_senafin">Tabla (Excel)</a></li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane fade in active" id="graf_senafin">
                                <div class="col-md-8" id="idgrafico_senafin">
                                  <canvas id="grafico_senafin"></canvas>
                                </div>
                                <div class="col-md-4">
                                  <br>
                                  <br>
                                  <div class="item form-group">
                                    <label class="control-label col-md-2">Año<span class="required"></span></label>
                                    <div class="col-md-8">
                                      <select id="txtanosenafin" class="form-control" name="">
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                      </select>
                                    </div>
                              </div>
                              <br><br><br>
                            </div>
                            <div class="form-group">
                              <center><button type="button" id="consultaartsenafin" class="btn btn-success">Consultar</button>
                              </center>
                            </div>
                          </div>
                              <div class="tab-pane fade" id="tab_senafin">
                                <table class="table table-striped jambo_table bulk_action" id="reporteartsenafin">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Mes</th>
                                      <th>Cantidad de proyectos articulados con SENA que finalizaron.</th>
                                      <!-- <th>Gestor</th>
                                      <th>Linea</th> -->
                                    </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="panel">
                        <a class="panel-heading collapse" role="tab" id="headingEight1" data-toggle="collapse" data-parent="#accordion1" href="#collapseEight1" aria-expanded="true" aria-controls="collapseEight">
                          <h4 class="panel-title">Proyectos con público general finalizados por mes</h4>
                        </a>
                        <div id="collapseEight1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                          <div class="panel-body">
                            <ul class="nav nav-tabs bar_tabs">
                             <li class="active"><a data-toggle="tab" href="#graf_gnrfin">Gráfico</a></li>
                             <li ><a data-toggle="tab" href="#tab_gnrfin">Tabla (Excel)</a></li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane fade in active" id="graf_gnrfin">
                                <div class="col-md-8" id="idgrafico_gnrfin">
                                  <canvas id="grafico_gnrfin"></canvas>
                                </div>
                                <div class="col-md-4">
                                  <br>
                                  <br>
                                  <div class="item form-group">
                                    <label class="control-label col-md-2">Año<span class="required"></span></label>
                                    <div class="col-md-8">
                                      <select id="txtanognrfin" class="form-control" name="">
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                      </select>
                                    </div>
                              </div>
                              <br><br><br>
                            </div>
                            <div class="form-group">
                              <center><button type="button" id="consultaartgnrfin" class="btn btn-success">Consultar</button>
                              </center>
                            </div>
                          </div>
                              <div class="tab-pane fade" id="tab_gnrfin">
                                <table class="table table-striped jambo_table bulk_action" id="reporteartgnrfin">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Mes</th>
                                      <th>Cantidad de proyectos con público general que finalizaron (Cierre PF + Cierre PMV)</th>
                                      <!-- <th>Gestor</th>
                                      <th>Linea</th> -->
                                    </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="clearfix"></div>
               </div>
            <div id="menu2" class="tab-pane fade in active">
              <hr>
              <div class="col-md-8">
                <div class="x_panel" id="idgraficoestadotodo">
                  <canvas id="graficoestadotodo"></canvas>
                </div>
                </div>
                <div class="col-md-4">
                  <br>
                  <br>
                  <div class="item form-group">
                    <label class="control-label col-md-2">Año<span class="required"></span></label>
                    <div class="col-md-8">
                     <select id="txtano" class="form-control" name="txtlinea" >
                       <option value="2017">2017</option>
                       <option value="2018">2018</option>
                       <option value="2019">2019</option>
                       <option value="2020">2020</option>
                     </select>
                   </div>
                 </div>
                 <br><br><br>
                 <div class="form-group">
                  <center><button type="button" id="btngraficoestadotodo" class="btn btn-success">Generar grafico</button>
                    <button type="button" id="pdfestadotodo" class="btn btn-danger">PDF</button>
                    <!--   <button type="button" id="excelestadotodo" class="btn btn-warning">Excel</button></center> -->
                  </div>


                  <br>
                  <br>
                  <br>

                </div>

              </div>

              <div id="home" class="tab-pane fade">
                <hr>

                <div class="col-md-8" >
                  <div class="x_panel" id="idgraficolinea">
                    <canvas id="graficolinea"></canvas>
                  </div>
                </div>

                <div class="col-md-4">

                  <div class="item form-group">
                    <label class="control-label col-md-2">Linea<span class="required"></span></label>
                    <div class="col-md-8">
                     <select id="txtlinea" class="form-control" name="txtlinea" >
                       <option value="">Seleccione</option>
                       <?php foreach ($linea as $key => $value): ?>
                         <option value="<?= $value['idlinea'] ?>"><?=$value['nombre']?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                 </div>
                 <br><br>
                 <div class="item form-group">
                  <label class="control-label col-md-2">Año<span class="required"></span></label>
                  <div class="col-md-8">
                   <select id="txtanol" class="form-control" name="txtlineal" >
                     <option value="2017">2017</option>
                     <option value="2018">2018</option>
                         <option value="2019">2019</option>
                       <option value="2020">2020</option>
                   </select>
                 </div>
               </div>
               <br><br><br>
               <div class="col-md-11">
                <center><button type="button" id="estadolinea" class="btn btn-success">Generar grafico</button>
                  <button type="button" id="pdflinea" class="btn btn-danger">PDF</button></center>
                </div>
                <br>
                <br>
                <br>
              </div>
                </div>

                <div id="menu" class="tab-pane fade">


                  <hr>
                  <div class="col-md-8" >
                    <div class="x_panel" id="idgraficogestor">
                      <canvas id="graficogestor"></canvas>
                    </div>
                  </div>
                  <div class="col-md-4">
                   <div class="item form-group" >
                    <label class="control-label col-md-2">Gestor<span class="required"></span></label>
                    <div class="col-md-8">
                     <select id="txtgestor" class="form-control" name="txtgestor" >
                       <option value="">Seleccione</option>
                       <?php foreach ($gestor as $key => $value): ?>
                        <option value="<?= $value['documento'] ?>"><?=$value['nombres']?> <?=$value['apellidos']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <br><br>
                <div class="item form-group">
                  <label class="control-label col-md-2">Año<span class="required"></span></label>
                  <div class="col-md-8">
                   <select id="txtanog" class="form-control" name="txtlineag" >
                     <option value="2017">2017</option>
                     <option value="2018">2018</option>
                         <option value="2019">2019</option>
                       <option value="2020">2020</option>
                   </select>
                 </div>
               </div>
               <br><br><br>
               <div class="col-md-11">
                <center><button type="button" id="estadogestor" class="btn btn-success">Generar grafico</button>
                 <button type="button" id="pdfgestor" class="btn btn-danger">PDF</button></center>
               </div>
               <br>
               <br>
               <br>
             </div>
            </div>
            <div id="empresas" class="tab-pane fade">
              <hr>
              <div class="col-md-7" style="margin-left: 20%">
                <h4>Proyectos articulados con empresas</h4>
                <div class="x_panel" id="idgraficoempresa">
                  <canvas id="graficoempresa"></canvas>
                </div>
                <hr>
                <div class="form-group">
                  <center><button type="button" id="btngraficoempresas" class="btn btn-success">Generar grafico</button>
                    <button type="button" id="pdfempresas" class="btn btn-danger">PDF</button>
                    <button type="button" id="excelempresas" class="btn btn-warning">Excel</button></center>
                  </div>
                  <div class="col-md-12" style="visibility: hidden ;">
                    <table  id="tablaempresas" >
                      <thead>
                        <tr>
                          <th>Inicio</th>
                          <th>Planeacion</th>
                          <th>Ejecucion</th>
                          <th>Cierre - PF</th>
                          <th>Cierre - PMV</th>
                          <th>Suspendido</th>
                          <th>Cancelado</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-8">
                  <h4>Tipo proyecto</h4>
                  <div class="x_panel" id="idgraficotipotodo">
                    <canvas id="graficotipotodo"></canvas>
                  </div>
                  <hr>
                  <div class="form-group">
                    <center><button type="button" id="btngraficotipotodo" class="btn btn-success">Generar grafico</button>
                      <button type="button" id="pdftipotodo" class="btn btn-danger">PDF</button>
                      <button type="button" id="exceltipotodo" class="btn btn-warning">Excel</button></center>
                    </div>
                    <div class="col-md-12" style="visibility: hidden;">
                      <table  id="tablatipotodo" >
                        <thead>
                          <tr>
                            <th>Proyecto de emprendedor</th>
                            <th>Proyecto acompanamiento a empresa ya constituida</th>
                            <th>Proyecto acompanamiento a grupo de investigacion GIGAT - SENA</th>
                            <th>Proyecto acompanamiento a grupo de investigacion SENA (otros centros)</th>
                            <th>Proyecto acompanamiento a grupo de investigacion externo</th>
                            <th>Proyecto tecnoparque financiado por SENNOVA</th>
                            <th>Proyecto con otro Centro de Formacion (que no sea de grupo de investigacion)</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>


    <script type="text/javascript">

      new Chart(document.getElementById("grafico_edt"), {
      type: 'bar',
      data: {
        labels: [],
        datasets: [
          {
            label: "EDT's",
            backgroundColor: "#1F3A27",
            data: [0,0,0,0,0,0,0,0,0,0,0,0]
          },
          {
            label: "Instructores/Aprendices",
            backgroundColor: "#5C6F61",
            data: [0,0,0,0,0,0,0,0,0,0,0,0]
          },
          {
            label: "Empleados/Empresarios",
            backgroundColor: "#3B6B48",
            data: [0,0,0,0,0,0,0,0,0,0,0,0]
          },
          {
            label: "Total",
            backgroundColor: "#006200",
            data: [0,0,0,0,0,0,0,0,0,0,0,0]
          }
        ]
      },
      options: { }
    });

     new Chart(document.getElementById("graficoestadotodo"),
      {"type":"bar",
      "data":{"labels":["Inico","Planeación","Ejecución","Cierre - PF","Cierre - PMV","Suspendido","Cancelado","P.F. Empresas","EDT","G. Investigación"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("graficogestor"),
      {"type":"bar",
      "data":{"labels":["Inico","Planeación","Ejecución","Cierre - PF","Cierre - PMV","Suspendido","Cancelado","P.F. Empresas","EDT","G. Investigación"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});


     new Chart(document.getElementById("graficolinea"),
      {"type":"bar",
      "data":{"labels":["Inico","Planeación","Ejecución","Cierre - PF","Cierre - PMV","Suspendido","Cancelado","P.F. Empresas","EDT","G. Investigación"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("graficotipotodo"),
      {"type":"bar",
      "data":{"labels":["P.emprendedor","P.A. empresa","P.A. GIGAT-SENA","P.A. Otros centros","P.A. externo","P.F. SENNOVA","P. otro centro"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("graficoempresa"),
      {"type":"bar",
      "data":{"labels":["Inico","Planeación","Ejecución","Cierre - PF","Cierre - PMV","Suspendido","Cancelado"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("grafico_inscritos"),
      {"type":"bar",
      "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("grafico_protofinalizado"),
      {"type":"bar",
      "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("grafico_protopmv"),
      {"type":"bar",
      "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("grafico_empart"),
      {"type":"bar",
      "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("grafico_empfin"),
      {"type":"bar",
      "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("grafico_senafin"),
      {"type":"bar",
      "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("grafico_gnrfin"),
      {"type":"bar",
      "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     new Chart(document.getElementById("grafico_empeje"),
      {"type":"bar",
      "data":{"labels":["Inicio","Planeación","Ejecucción","Cierre - PF","Cierre - PMV","Suspendido","Cancelado"],
      "datasets":[{"label":"Indicadores","data":[0,0,0,0,0,0,0,0,0,0,0,0],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)","rgba(201, 203, 207, 0.2)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

      $('#consultaedt').click (function(){
              let prueba = $("#txtanoedt").val();
              var totalp = 0;
              $.ajax({
                dataType:'json',
                type:'post',
                url:uri+"indicadores/edt/"+prueba,
              }).done(function(response){
                      var datos = {
                        data1: [],
                        data2: [],
                        data3: [],
                        data4: [],
                        data5: []
                    };
                    var tamaño = response.length;
                    // console.log(tamaño);

                    for (var i = 0; i < tamaño; i++) {
                        if (response[i].edt != null) {
                            datos.data1.push(response[i].edt);
                        }

                        if (response[i].empresario != null) {
                            datos.data2.push(response[i].empresario);
                        }

                        if (response[i].sena != null) {
                            datos.data3.push(response[i].sena);
                        }

                        if (response[i].total != null) {
                            datos.data4.push(response[i].total);
                        }
                        if (response[i].mes != null) {
                            datos.data5.push(response[i].mes);
                        }
                    }
                  var pi = $('#reporteedt').DataTable();
                  pi.clear();
                  // console.log(response);
                    if (response == 0) {
                      swal("Ups!!", "No se han encontrador EDT's este año.", "warning");
                      pi.row.add(['','','No se han encontrado resultados','','','']).draw(true);
                    } else {
                        pi.clear();
                      $.each(response, function(i, item) {
                        pi.row.add( [item.meses,item.mes,item.edt,item.empresario,item.sena,item.total] ).draw(false);
                      });
                      var grafica = $('#grafico_edt');


                          var edt = {
                            label: "EDT's",
                            data: datos.data1,
                            backgroundColor: 'rgba(31, 58, 39)',
                          };

                          var sena = {
                            label: 'Instructores/Aprendices',
                            data: datos.data3,
                            backgroundColor: 'rgba(92, 111, 97)',
                          };
                          var emp = {
                            label: 'Empresarios/Empleados',
                            data: datos.data2,
                            backgroundColor: 'rgba(59, 107, 72)',
                          };
                          var total = {
                            label: 'Total',
                            data: datos.data4,
                            backgroundColor: 'rgba(0, 98, 0)',
                          };

                          var gf = {
                            labels: datos.data5,
                            datasets: [edt, sena, emp, total]
                          };
                          var barChart = new Chart(grafica, {
                            type: 'bar',
                            data: gf,
                          });
                    }

                  });
              });

      $('#consultaartgnrfin').click (function(){
        let prueba = $("#txtanognrfin").val();
        var totalp = 0;
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/artgnrfin/"+prueba,
        }).done(function(response){
            var pi = $('#reporteartempfin').DataTable();
              if (response == 0) {
                pi.clear();
                var Enero;
                var Febrero;
                var Marzo;
                var Abril;
                var Mayo;
                var Junio;
                var Julio;
                var Agosto;
                var Septiembre;
                var Octubre;
                var Noviembre;
                var Diciembre;
                swal("Ups!!", "No hay proyectos articulados con SENA finalizados este año.", "warning");
                pi.row.add(['','','No se han encontrado resultados']).draw(true);
              } else {
                  pi.clear();
                $.each(response, function(i, item) {
                  var pi = $('#reporteartgnrfin').DataTable();
                  if (item.mes == 'January') {
                    Enero = item.proyectos;
                    pi.row.add( [item.meses,'Enero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'February') {
                    Febrero = item.proyectos;
                    pi.row.add( [item.meses,'Febrero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'March') {
                    Marzo = item.proyectos;
                    pi.row.add( [item.meses,'Marzo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'April') {
                    Abril = item.proyectos;
                    pi.row.add( [item.meses,'Abril',item.proyectos] ).draw(false);
                  } else if (item.mes == 'May') {
                    Mayo = item.proyectos;
                    pi.row.add( [item.meses,'Mayo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'June') {
                    Junio = item.proyectos;
                    pi.row.add( [item.meses,'Junio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'July') {
                    Julio = item.proyectos;
                    pi.row.add( [item.meses,'Julio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'August') {
                    Agosto = item.proyectos;
                    pi.row.add( [item.meses,'Agosto',item.proyectos] ).draw(false);
                  } else if (item.mes == 'September') {
                    Septiembre = item.proyectos;
                    pi.row.add( [item.meses,'Septiembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'October') {
                    Octubre = item.proyectos;
                    pi.row.add( [item.meses,'Octubre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'November') {
                    Noviembre = item.proyectos;
                    pi.row.add( [item.meses,'Noviembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'December') {
                    Diciembre = item.proyectos;
                    pi.row.add( [item.meses,'Diciembre',item.proyectos] ).draw(false);
                  }
                    // pi.row.add( [item.nombreproyecto,item.empresa,item.nombre,item.gestor,item.linea] ).draw(false);
                });
                $('#grafico_gnrfin').remove();
                $('#idgrafico_gnrfin').append('<canvas id="grafico_gnrfin"></canvas>');

                new Chart(document.getElementById("grafico_gnrfin"),
                {"type":"bar",
                "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", "Noviembre","Diciembre"],
                "datasets":[{"label":"Cantidad","data":[Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre],"fill":false,
                "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)","rgba(99, 158, 52, 1)","rgba(158, 101, 45, 1)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
                // console.log(totalp);
              }

            });
        });

      $('#consultaartsenafin').click (function(){
        let prueba = $("#txtanosenafin").val();
        var totalp = 0;
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/artsenafin/"+prueba,
        }).done(function(response){
            var pi = $('#reporteartempfin').DataTable();
              if (response == 0) {
                pi.clear();
                var Enero;
                var Febrero;
                var Marzo;
                var Abril;
                var Mayo;
                var Junio;
                var Julio;
                var Agosto;
                var Septiembre;
                var Octubre;
                var Noviembre;
                var Diciembre;
                swal("Ups!!", "No hay proyectos articulados con SENA finalizados este año.", "warning");
                pi.row.add(['','','No se han encontrado resultados']).draw(true);
              } else {
                  pi.clear();
                $.each(response, function(i, item) {
                  var pi = $('#reporteartsenafin').DataTable();
                  if (item.mes == 'January') {
                    Enero = item.proyectos;
                    pi.row.add( [item.meses,'Enero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'February') {
                    Febrero = item.proyectos;
                    pi.row.add( [item.meses,'Febrero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'March') {
                    Marzo = item.proyectos;
                    pi.row.add( [item.meses,'Marzo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'April') {
                    Abril = item.proyectos;
                    pi.row.add( [item.meses,'Abril',item.proyectos] ).draw(false);
                  } else if (item.mes == 'May') {
                    Mayo = item.proyectos;
                    pi.row.add( [item.meses,'Mayo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'June') {
                    Junio = item.proyectos;
                    pi.row.add( [item.meses,'Junio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'July') {
                    Julio = item.proyectos;
                    pi.row.add( [item.meses,'Julio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'August') {
                    Agosto = item.proyectos;
                    pi.row.add( [item.meses,'Agosto',item.proyectos] ).draw(false);
                  } else if (item.mes == 'September') {
                    Septiembre = item.proyectos;
                    pi.row.add( [item.meses,'Septiembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'October') {
                    Octubre = item.proyectos;
                    pi.row.add( [item.meses,'Octubre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'November') {
                    Noviembre = item.proyectos;
                    pi.row.add( [item.meses,'Noviembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'December') {
                    Diciembre = item.proyectos;
                    pi.row.add( [item.meses,'Diciembre',item.proyectos] ).draw(false);
                  }
                    // pi.row.add( [item.nombreproyecto,item.empresa,item.nombre,item.gestor,item.linea] ).draw(false);
                });
                $('#grafico_senafin').remove();
                $('#idgrafico_senafin').append('<canvas id="grafico_senafin"></canvas>');

                new Chart(document.getElementById("grafico_senafin"),
                {"type":"bar",
                "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", "Noviembre","Diciembre"],
                "datasets":[{"label":"Cantidad","data":[Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre],"fill":false,
                "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)","rgba(99, 158, 52, 1)","rgba(158, 101, 45, 1)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
                // console.log(totalp);
              }

            });
        });

      $('#consultaartempfin').click (function(){
        let prueba = $("#txtanoaef").val();
        var totalp = 0;
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/artempfin/"+prueba,
        }).done(function(response){
            var pi = $('#reporteartempfin').DataTable();
              if (response == 0) {
                pi.clear();
                var Enero;
                var Febrero;
                var Marzo;
                var Abril;
                var Mayo;
                var Junio;
                var Julio;
                var Agosto;
                var Septiembre;
                var Octubre;
                var Noviembre;
                var Diciembre;
                swal("Ups!!", "No hay proyectos articulados con empresas finalizados este año.", "warning");
                pi.row.add(['','','No se han encontrado resultados']).draw(true);
              } else {
                  pi.clear();
                $.each(response, function(i, item) {
                  var pi = $('#reporteartempfin').DataTable();
                  if (item.mes == 'January') {
                    Enero = item.proyectos;
                    pi.row.add( [item.meses,'Enero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'February') {
                    Febrero = item.proyectos;
                    pi.row.add( [item.meses,'Febrero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'March') {
                    Marzo = item.proyectos;
                    pi.row.add( [item.meses,'Marzo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'April') {
                    Abril = item.proyectos;
                    pi.row.add( [item.meses,'Abril',item.proyectos] ).draw(false);
                  } else if (item.mes == 'May') {
                    Mayo = item.proyectos;
                    pi.row.add( [item.meses,'Mayo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'June') {
                    Junio = item.proyectos;
                    pi.row.add( [item.meses,'Junio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'July') {
                    Julio = item.proyectos;
                    pi.row.add( [item.meses,'Julio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'August') {
                    Agosto = item.proyectos;
                    pi.row.add( [item.meses,'Agosto',item.proyectos] ).draw(false);
                  } else if (item.mes == 'September') {
                    Septiembre = item.proyectos;
                    pi.row.add( [item.meses,'Septiembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'October') {
                    Octubre = item.proyectos;
                    pi.row.add( [item.meses,'Octubre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'November') {
                    Noviembre = item.proyectos;
                    pi.row.add( [item.meses,'Noviembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'December') {
                    Diciembre = item.proyectos;
                    pi.row.add( [item.meses,'Diciembre',item.proyectos] ).draw(false);
                  }
                    // pi.row.add( [item.nombreproyecto,item.empresa,item.nombre,item.gestor,item.linea] ).draw(false);
                });
                $('#grafico_empfin').remove();
                $('#idgrafico_empfin').append('<canvas id="grafico_empfin"></canvas>');

                new Chart(document.getElementById("grafico_empfin"),
                {"type":"bar",
                "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", "Noviembre","Diciembre"],
                "datasets":[{"label":"Cantidad","data":[Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre],"fill":false,
                "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)","rgba(99, 158, 52, 1)","rgba(158, 101, 45, 1)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
                // console.log(totalp);
              }

            });
        });


      $('#consultaartempeje').click (function(){
        // let prueba = $("#txtanoarteins").val();
        var totalp = 0;
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/artempeje/"
        }).done(function(response){
            var pi = $('#reporteartempeje').DataTable();
              if (response == 0) {
                pi.clear();
                swal("Ups!!", "No hay proyectos articulados con empresas en ejecucción este mes.", "warning");
              } else {
                  pi.clear();
                  // console.log(response);
                  var inicio = response[4].proyectos;
                  var planeacion = response[5].proyectos;
                  var ejecuccion = response[3].proyectos;
                  var cierrepf = response[1].proyectos;
                  var cierrepmv = response[2].proyectos;
                  var suspendido = response[6].proyectos;
                  var cancelado = response[0].proyectos;
                $.each(response, function(i, item) {
                  var pi = $('#reporteartempeje').DataTable();
                    pi.row.add( [item.nombreproyecto,item.empresa,item.nombre,item.gestor,item.linea] ).draw(false);
                });
                $('#grafico_empeje').remove();
                $('#idgrafico_empeje').append('<canvas id="grafico_empeje"></canvas>');

                new Chart(document.getElementById("grafico_empeje"),
                {"type":"bar",
                "data":{"labels":["Inicio","Planeación","Ejecucción","Cierre - PF","Cierre - PMV","Suspendido","Cancelado"],
                "datasets":[{"label":"Cantidad","data":[inicio,planeacion,ejecuccion,cierrepf,cierrepmv,suspendido,cancelado],"fill":false,
                "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)","rgba(99, 158, 52, 1)","rgba(158, 101, 45, 1)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
                // console.log(totalp);
              }
        });

      });
      $('#consultaparteins').click (function(){
        let prueba = $("#txtanoarteins").val();
        var totalp = 0;
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/arteins/"+prueba
        }).done(function(response){
            var pi = $('#reporteparteins').DataTable();
              if (response == 0) {
                pi.clear();
                swal("Ups!!", "No hay proyectos articulados con empresas inscritos este año.", "warning");
                pi.row.add(['','','No se han encontrado resultados']).draw(true);
              } else {
                var Enero;
                var Febrero;
                var Marzo;
                var Abril;
                var Mayo;
                var Junio;
                var Julio;
                var Agosto;
                var Septiembre;
                var Octubre;
                var Noviembre;
                var Diciembre;
                  pi.clear();
                $.each(response, function(i, item) {
                  totalp += parseInt(item.proyectos);
                  var pi = $('#reporteparteins').DataTable();
                  if (item.mes == 'January') {
                    Enero = item.proyectos;
                    pi.row.add( [item.meses,'Enero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'February') {
                    Febrero = item.proyectos;
                    pi.row.add( [item.meses,'Febrero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'March') {
                    Marzo = item.proyectos;
                    pi.row.add( [item.meses,'Marzo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'April') {
                    Abril = item.proyectos;
                    pi.row.add( [item.meses,'Abril',item.proyectos] ).draw(false);
                  } else if (item.mes == 'May') {
                    Mayo = item.proyectos;
                    pi.row.add( [item.meses,'Mayo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'June') {
                    Junio = item.proyectos;
                    pi.row.add( [item.meses,'Junio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'July') {
                    Julio = item.proyectos;
                    pi.row.add( [item.meses,'Julio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'August') {
                    Agosto = item.proyectos;
                    pi.row.add( [item.meses,'Agosto',item.proyectos] ).draw(false);
                  } else if (item.mes == 'September') {
                    Septiembre = item.proyectos;
                    pi.row.add( [item.meses,'Septiembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'October') {
                    Octubre = item.proyectos;
                    pi.row.add( [item.meses,'Octubre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'November') {
                    Noviembre = item.proyectos;
                    pi.row.add( [item.meses,'Noviembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'December') {
                    Diciembre = item.proyectos;
                    pi.row.add( [item.meses,'Diciembre',item.proyectos] ).draw(false);
                  }

                });
                $('#grafico_empart').remove();
                $('#idgrafico_empart').append('<canvas id="grafico_empart"></canvas>');

                new Chart(document.getElementById("grafico_empart"),
                {"type":"bar",
                "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", "Noviembre","Diciembre"],
                "datasets":[{"label":"Cantidad","data":[Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre],"fill":false,
                "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)","rgba(99, 158, 52, 1)","rgba(158, 101, 45, 1)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
                // console.log(totalp);
              }
        });

      });

      $('#consultapinscritos').click (function(){
        let prueba = $("#txtanopi").val();
        var totalp = 0;
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/proyectosinscritos/"+prueba
        }).done(function(response){
            var pi = $('#reportepinscritos').DataTable();
              if (response == 0) {
                pi.clear();
                swal("Ups!!", "No hay proyectos inscritos este año.", "warning");
                pi.row.add(['','','No se han encontrado resultados']).draw(true);
              } else {
                  pi.clear();
                  var Enero;
                  var Febrero;
                  var Marzo;
                  var Abril;
                  var Mayo;
                  var Junio;
                  var Julio;
                  var Agosto;
                  var Septiembre;
                  var Octubre;
                  var Noviembre;
                  var Diciembre;
                $.each(response, function(i, item) {
                  totalp += parseInt(item.proyectos);
                  var pi = $('#reportepinscritos').DataTable();
                  if (item.mes == 'January') {
                    Enero = item.proyectos;
                    // console.log(Enero);
                    pi.row.add( [item.meses,'Enero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'February') {
                    Febrero = item.proyectos;
                    pi.row.add( [item.meses,'Febrero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'March') {
                    Marzo = item.proyectos;
                    pi.row.add( [item.meses,'Marzo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'April') {
                    Abril = item.proyectos;
                    pi.row.add( [item.meses,'Abril',item.proyectos] ).draw(false);
                  } else if (item.mes == 'May') {
                    Mayo = item.proyectos;
                    pi.row.add( [item.meses,'Mayo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'June') {
                    Junio = item.proyectos;
                    pi.row.add( [item.meses,'Junio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'July') {
                    Julio = item.proyectos;
                    pi.row.add( [item.meses,'Julio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'August') {
                    Agosto = item.proyectos;
                    pi.row.add( [item.meses,'Agosto',item.proyectos] ).draw(false);
                  } else if (item.mes == 'September') {
                    Septiembre = item.proyectos;
                    pi.row.add( [item.meses,'Septiembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'October') {
                    Octubre = item.proyectos;
                    pi.row.add( [item.meses,'Octubre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'November') {
                    Noviembre = item.proyectos;
                    pi.row.add( [item.meses,'Noviembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'December') {
                    Diciembre = item.proyectos;
                    pi.row.add( [item.meses,'Diciembre',item.proyectos] ).draw(false);
                  }
              });
            $('#grafico_inscritos').remove();
            $('#idgrafico_inscritos').append('<canvas id="grafico_inscritos"></canvas>');

            new Chart(document.getElementById("grafico_inscritos"),
            {"type":"bar",
            "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", "Noviembre","Diciembre"],
            "datasets":[{"label":"Cantidad","data":[Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre],"fill":false,
            "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)","rgba(99, 158, 52, 1)","rgba(158, 101, 45, 1)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
        };

      });
    });

      $('#consultapfinalizados').click (function(){
        let prueba = $("#txtanopf").val();
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/prototipofinalizado/"+prueba
        }).done(function(response){
            var pi = $('#reportepfinalizado').DataTable();
              if (response == 0) {
                pi.clear();
                var Enero;
                var Febrero;
                var Marzo;
                var Abril;
                var Mayo;
                var Junio;
                var Julio;
                var Agosto;
                var Septiembre;
                var Octubre;
                var Noviembre;
                var Diciembre;
                swal("Ups!!", "No hay prototipos finalizados este año.", "warning");
                pi.row.add(['','','No se han encontrado resultados']).draw(true);
              } else {
                  pi.clear();
                $.each(response, function(i, item) {
                  var pi = $('#reportepfinalizado').DataTable();
                  if (item.mes == 'January') {
                    Enero = item.proyectos;
                    pi.row.add( [item.meses,'Enero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'February') {
                    Febrero = item.proyectos;
                    pi.row.add( [item.meses,'Febrero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'March') {
                    Marzo = item.proyectos;
                    pi.row.add( [item.meses,'Marzo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'April') {
                    Abril = item.proyectos;
                    pi.row.add( [item.meses,'Abril',item.proyectos] ).draw(false);
                  } else if (item.mes == 'May') {
                    Mayo = item.proyectos;
                    pi.row.add( [item.meses,'Mayo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'June') {
                    Junio = item.proyectos;
                    pi.row.add( [item.meses,'Junio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'July') {
                    Julio = item.proyectos;
                    pi.row.add( [item.meses,'Julio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'August') {
                    Agosto = item.proyectos;
                    pi.row.add( [item.meses,'Agosto',item.proyectos] ).draw(false);
                  } else if (item.mes == 'September') {
                    Septiembre = item.proyectos;
                    pi.row.add( [item.meses,'Septiembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'October') {
                    Octubre = item.proyectos;
                    pi.row.add( [item.meses,'Octubre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'November') {
                    Noviembre = item.proyectos;
                    pi.row.add( [item.meses,'Noviembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'December') {
                    Diciembre = item.proyectos;
                    pi.row.add( [item.meses,'Diciembre',item.proyectos] ).draw(false);
                  }

                });
                $('#grafico_protofinalizado').remove();
                $('#idgrafico_protofinalizado').append('<canvas id="grafico_protofinalizado"></canvas>');

                new Chart(document.getElementById("grafico_protofinalizado"),
                {"type":"bar",
                "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", "Noviembre","Diciembre"],
                "datasets":[{"label":"Cantidad","data":[Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre],"fill":false,
                "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)","rgba(99, 158, 52, 1)","rgba(158, 101, 45, 1)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
              }
        });

      });
      $('#consultappm').click (function(){
        let prueba = $("#txtanoppm").val();
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/prototipomercado/"+prueba
        }).done(function(response){
            var pi = $('#reporteppm').DataTable();
              if (response == 0) {
                pi.clear();
                var Enero;
                var Febrero;
                var Marzo;
                var Abril;
                var Mayo;
                var Junio;
                var Julio;
                var Agosto;
                var Septiembre;
                var Octubre;
                var Noviembre;
                var Diciembre;
                swal("Ups!!", "No hay prototipos puestos en el mercado este año.", "warning");
                pi.row.add(['','','No se han encontrado resultados']).draw(true);
              } else {
                  pi.clear();
                $.each(response, function(i, item) {
                  var pi = $('#reporteppm').DataTable();
                  if (item.mes == 'January') {
                    Enero = item.proyectos;
                    pi.row.add( [item.meses,'Enero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'February') {
                    Febrero = item.proyectos;
                    pi.row.add( [item.meses,'Febrero',item.proyectos] ).draw(false);
                  } else if (item.mes == 'March') {
                    Marzo = item.proyectos;
                    pi.row.add( [item.meses,'Marzo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'April') {
                    Abril = item.proyectos;
                    pi.row.add( [item.meses,'Abril',item.proyectos] ).draw(false);
                  } else if (item.mes == 'May') {
                    Mayo = item.proyectos;
                    pi.row.add( [item.meses,'Mayo',item.proyectos] ).draw(false);
                  } else if (item.mes == 'June') {
                    Junio = item.proyectos;
                    pi.row.add( [item.meses,'Junio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'July') {
                    Julio = item.proyectos;
                    pi.row.add( [item.meses,'Julio',item.proyectos] ).draw(false);
                  } else if (item.mes == 'August') {
                    Agosto = item.proyectos;
                    pi.row.add( [item.meses,'Agosto',item.proyectos] ).draw(false);
                  } else if (item.mes == 'September') {
                    Septiembre = item.proyectos;
                    pi.row.add( [item.meses,'Septiembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'October') {
                    Octubre = item.proyectos;
                    pi.row.add( [item.meses,'Octubre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'November') {
                    Noviembre = item.proyectos;
                    pi.row.add( [item.meses,'Noviembre',item.proyectos] ).draw(false);
                  } else if (item.mes == 'December') {
                    Diciembre = item.proyectos;
                    pi.row.add( [item.meses,'Diciembre',item.proyectos] ).draw(false);
                  }

                });
                $('#grafico_protopmv').remove();
                $('#idgrafico_protopmv').append('<canvas id="grafico_protopmv"></canvas>');

                new Chart(document.getElementById("grafico_protopmv"),
                {"type":"bar",
                "data":{"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre", "Noviembre","Diciembre"],
                "datasets":[{"label":"Cantidad","data":[Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre],"fill":false,
                "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)","rgba(99, 158, 52, 1)","rgba(158, 101, 45, 1)",],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

              }
        });

      });


     $ ('#btngraficoestadotodo').click (function (){

       var a = $("#txtano").val();


       $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"indicadores/indicadoresestadoproyecto/"+a
      }).done(function(response) {

        $("#inputestadotodo").val("si");

        var inicio = 0;
        var planeacion = 0;
        var ejecucion = 0;
        var cierrepf = 0;
        var cierrepmv = 0;
        var suspendido = 0;
        var cancelado = 0;

        $.each(response, function(i, item) {
          if (item.id == 1) {
            inicio +=1;
          }

          if (item.id == 2) {
            planeacion +=1;
          }

          if (item.id == 3) {
            ejecucion +=1;
          }

          if (item.id == 4) {
            cierrepf +=1;
          }

          if (item.id == 5) {
            cierrepmv +=1;
          }

          if (item.id == 6) {
            suspendido +=1;
          }

          if (item.id == 7) {
            cancelado +=1;
          }
        });



        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/reporteempresa/"+a
        }).done(function(response) {

         $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/reportedt/"+a
        }).done(function(edt) {

          var edt = edt.cantidad;

          $.ajax({
            dataType:'json',
            type:'post',
            url:uri+"indicadores/reportegrupos/"+a
          }).done(function(grupos) {

            var empresas = response.cantidad;
            var grupos = grupos.cantidad;
            var t = $('#tablaestadotodo').DataTable();
            t.clear();
            t.row.add( [inicio,planeacion,ejecucion,cierrepf,cierrepmv,suspendido,cancelado,empresas] ).draw(true);

            $('#graficoestadotodo').remove();
            $('#idgraficoestadotodo').append('<canvas id="graficoestadotodo"></canvas>');

            new Chart(document.getElementById("graficoestadotodo"),
              {"type":"bar",
              "data":{"labels":["Inico","Planeación","Ejecución","Cierre - PF","Cierre - PMV","Suspendido","Cancelado","P.F. Empresas","EDT","G. Investigación"],
              "datasets":[{"label":"Cantidad","data":[inicio,planeacion,ejecucion,cierrepf,cierrepmv,suspendido,cancelado,empresas,edt,grupos],"fill":false,
              "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});



          });

        });


      });
      });

    });


     $ ('#btngraficotipotodo').click (function (){


      $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"indicadores/indicadorestipoproyecto"
      }).done(function(response) {

        $("#inputtipotodo").val("si");
        var  tipo1= response[0].cantidad;
        var  tipo2= response[1].cantidad;
        var  tipo3= response[2].cantidad;
        var  tipo4= response[3].cantidad;
        var  tipo5= response[4].cantidad;
        var  tipo6= response[5].cantidad;
        var  tipo7= response[6].cantidad;

        var t = $('#tablatipotodo').DataTable();
        t.clear();
        t.row.add( [tipo1,tipo2,tipo3,tipo4,tipo5,tipo6,tipo7] ).draw(true);


        $('#graficotipotodo').remove();
        $('#idgraficotipotodo').append('<canvas id="graficotipotodo"></canvas>');

        new Chart(document.getElementById("graficotipotodo"),
          {"type":"bar",
          "data":{"labels":["P.emprendedor","P.A. empresa","P.A. GIGAT-SENA","P.A. Otros centros","P.A. externo","P.F. SENNOVA","P. otro centro"],
          "datasets":[{"label":"Cantidad","data":[tipo1,tipo2,tipo3,tipo4,tipo5,tipo6,tipo7],"fill":false,
          "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86, 1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235, 1)","rgba(153, 102, 255, 1)","rgba(201, 203, 207, 1)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
      });

    });

     $ ('#pdfestadotodo').click (function () {
      var a = $("#inputestadotodo").val();
      var ano = $("#txtano").val();
      if (a != "") {
        var doc = new jsPDF ();
        doc.addHTML ($ ('#idgraficoestadotodo'), 1, 158,{
          'background': '#fff',
          'border': '2px solid white',
        }, function () {
         var logo = new Image();
         logo.src = 'data:image/png;base64,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';
         doc.addImage(logo, 'JPEG', 28, 15,148,20);
         doc.text('Indicadores Tecnoparque',80,48);
         $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/indicadoresestadoproyecto/"+ano
        }).done(function(response) {



          var inicio = 0;
          var planeacion = 0;
          var ejecucion = 0;
          var cierrepf = 0;
          var cierrepmv = 0;
          var suspendido = 0;
          var cancelado = 0;


          $.each(response, function(i, item) {

            if (item.id == 1) {
              inicio +=1;
            }

            if (item.id == 2) {
              planeacion +=1;
            }

            if (item.id == 3) {
              ejecucion +=1;
            }

            if (item.id == 4) {
              cierrepf +=1;
            }

            if (item.id == 5) {
              cierrepmv +=1;
            }

            if (item.id == 6) {
              suspendido +=1;
            }

            if (item.id == 7) {
              cancelado +=1;
            }

          });

          doc.text("Inicio"+": "+inicio+" proyectos", 20, 58);
          doc.text("Planeación"+": "+planeacion+" proyectos", 20, 68);
          doc.text("Ejecución"+": "+ejecucion+" proyectos", 20, 78);
          doc.text("Cierre - PF"+": "+cierrepf+" proyectos", 20, 88);
          doc.text("Cierre - PMV"+": "+cierrepmv+" proyectos", 20, 98);
          doc.text("Suspendido"+": "+suspendido+" proyectos", 20, 108);
          doc.text("Cancelado"+": "+cancelado+" proyectos", 20, 118);




          $.ajax({
            dataType:'json',
            type:'post',
            url:uri+"indicadores/reporteempresa/"+ano
          }).done(function(response) {

            var empresas = response.cantidad;
            doc.text("Proyectos finalizados articulados con empresas: "+empresas+" proyectos", 20, 128);


            $.ajax({
              dataType:'json',
              type:'post',
              url:uri+"indicadores/reportedt/"+ano
            }).done(function(edt) {

              var edt = edt.cantidad;

              doc.text("EDT: "+edt, 20, 138);

              $.ajax({
                dataType:'json',
                type:'post',
                url:uri+"indicadores/reportegrupos/"+ano
              }).done(function(grupos) {

                var grupos = grupos.cantidad;
                doc.text("Grupos de Investigación: "+grupos, 20, 148);

                doc.save('Indicadores_Tecnoparque.pdf');

              });
            });
          });
        });
      });

}else{
  swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");

}

});

$ ('#pdftipotodo').click (function () {
  var a = $("#inputtipotodo").val();
  if (a != "") {
    var doc = new jsPDF ();
    doc.addHTML ($ ('#idgraficotipotodo'), 1, 192,{
      'background': '#fff',
      'border': '2px solid white',
    }, function () {
     var logo = new Image();
     logo.src = 'data:image/png;base64,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';
     doc.addImage(logo, 'JPEG', 28, 15,148,20);
     doc.text('Indicadores Tecnoparque',80,48);
     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/indicadorestipoproyecto"
    }).done(function(response) {
      doc.text(response[0].nombre, 10, 58);
      doc.text("Cantidad: "+response[0].cantidad+" proyectos", 10, 68);
      doc.text(response[1].nombre, 10, 78);
      doc.text("Cantidad: "+response[1].cantidad+" proyectos", 10, 88);
      doc.text(response[2].nombre, 10, 98);
      doc.text("Cantidad: "+response[2].cantidad+" proyectos", 10, 108);
      doc.text(response[3].nombre, 10, 118);
      doc.text("Cantidad: "+response[3].cantidad+" proyectos", 10, 128);
      doc.text(response[4].nombre, 10, 138);
      doc.text("Cantidad: "+response[4].cantidad+" proyectos", 10, 148);
      doc.text(response[5].nombre, 10, 158);
      doc.text("Cantidad: "+response[5].cantidad+" proyectos", 10, 168);
      doc.text(response[6].nombre, 10, 178);
      doc.text("Cantidad: "+response[6].cantidad+" proyectos", 10, 188);
      doc.save('Indicadores_Tecnoparque.pdf');
    });
  });

}else{
  swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");

}

});

$ ('#excelestadotodo').click (function () {
  var c = $("#inputestadotodo").val();
  if (c != "") {
    var tmpElemento = document.createElement('a');
    var data_type = 'data:application/vnd.ms-excel';
    var tabla_div = document.getElementById('tablaestadotodo');
    var tabla_html = tabla_div.outerHTML.replace(/ /g, '%20');
    tmpElemento.href = data_type + ', ' + tabla_html;
    tmpElemento.download = 'Indicadores_Tecnoparque.xls';
    tmpElemento.click();
  }else{
    swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");
  }

});


$ ('#exceltipotodo').click (function () {
  var c = $("#inputtipotodo").val();
  if (c != "") {
    var tmpElemento = document.createElement('a');
    var data_type = 'data:application/vnd.ms-excel';
    var tabla_div = document.getElementById('tablatipotodo');
    var tabla_html = tabla_div.outerHTML.replace(/ /g, '%20');
    tmpElemento.href = data_type + ', ' + tabla_html;
    tmpElemento.download = 'Indicadores_Tecnoparque.xls';
    tmpElemento.click();
  }else{
   swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");
 }

});

$ ('#excelempresas').click (function () {
  var c = $("#inputempresas").val();
  if (c != "") {
    var tmpElemento = document.createElement('a');
    var data_type = 'data:application/vnd.ms-excel';
    var tabla_div = document.getElementById('tablaempresas');
    var tabla_html = tabla_div.outerHTML.replace(/ /g, '%20');
    tmpElemento.href = data_type + ', ' + tabla_html;
    tmpElemento.download = 'Indicadores_Tecnoparque.xls';
    tmpElemento.click();
  }else{
   swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");
 }

});

// $(document).ready(function() {
//   $('#tablalinea').DataTable( {
//     dom: 'Bfrtip',
//     buttons: [
//     'excel'
//     ]
//   } );
// } );


$(document).ready(function() {
  $('#tablagestor').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    'excel'
    ]
  } );
} );


$('#estadolinea').click (function () {
  var l = $("#txtlinea").val();
  var a = $("#txtanol").val();
  if (l != "") {
    // var t = $('#tablalinea').DataTable();
    // t.clear();
    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/indicadoreslinea/"+l
    }).done(function(response) {



      $.each(response, function(i, item) {
        var linea = item.linea;
        var gestor = item.gestor;
        var nombre = item.nombre;
        var estado = item.estado;
        // var t = $('#tablalinea').DataTable();
        // t.row.add( [linea,gestor,nombre,estado] ).draw(true);

      });
    });


    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/reportelineaestado/"+l+"/"+a
    }).done(function(response) {

      $("#inputlinea").val("si");

      var inicio = 0;
      var planeacion = 0;
      var ejecucion = 0;
      var cierrepf = 0;
      var cierrepmv = 0;
      var suspendido = 0;
      var cancelado = 0;

      $.each(response, function(i, item) {
        if (item.id == 1) {
          inicio +=1;
        }

        if (item.id == 2) {
          planeacion +=1;
        }

        if (item.id == 3) {
          ejecucion +=1;
        }

        if (item.id == 4) {
          cierrepf +=1;
        }

        if (item.id == 5) {
          cierrepmv +=1;
        }

        if (item.id == 6) {
          suspendido +=1;
        }

        if (item.id == 7) {
          cancelado +=1;
        }
      });

      $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"indicadores/reporteempresalinea/"+l+"/"+a
      }).done(function(response) {

        var empresas = response.cantidad;


        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/reportedtlinea/"+a+"/"+l
        }).done(function(edt) {

          var edt = edt.cantidad;

          $.ajax({
            dataType:'json',
            type:'post',
            url:uri+"indicadores/reportegruposlinea/"+a+"/"+l
          }).done(function(grupos) {
            var grupos = grupos.cantidad;

            $('#graficolinea').remove();
            $('#idgraficolinea').append('<canvas id="graficolinea"></canvas>');


            new Chart(document.getElementById("graficolinea"),
              {"type":"bar",
              "data":{"labels":["Inico","Planeación","Ejecución","Cierre - PF","Cierre - PMV","Suspendido","Cancelado","P.F. Empresas","EDT","G. Investigación"],
              "datasets":[{"label":"Cantidad","data":[inicio,planeacion,ejecucion,cierrepf,cierrepmv,suspendido,cancelado,empresas,edt,grupos],"fill":false,
              "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});



          });

        });

      });

    });




  }else{

   swal("Ups!!", "Debe seleccionar una linea", "warning");
 }


});


$('#estadogestor').click (function () {
  var g = $("#txtgestor").val();
  var a = $("#txtanog").val();
  if (g != "") {
    // var t = $('#tablagestor').DataTable();
    // t.clear();
    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/indicadoresgestor/"+g+"/"+a
    }).done(function(response) {

      $("#inputgestor").val("si");

      var inicio = 0;
      var planeacion = 0;
      var ejecucion = 0;
      var cierrepf = 0;
      var cierrepmv = 0;
      var suspendido = 0;
      var cancelado = 0;


      $.each(response, function(i, item) {

        if (item.id == 1) {
          inicio +=1;
        }

        if (item.id == 2) {
          planeacion +=1;
        }

        if (item.id == 3) {
          ejecucion +=1;
        }

        if (item.id == 4) {
          cierrepf +=1;
        }

        if (item.id == 5) {
          cierrepmv +=1;
        }

        if (item.id == 6) {
          suspendido +=1;
        }

        if (item.id == 7) {
          cancelado +=1;
        }
        var linea = item.linea;
        var gestor = item.gestor;
        var nombre = item.nombre;
        var estado = item.estado;
        // var t = $('#tablagestor').DataTable();
        // t.row.add( [linea,gestor,nombre,estado] ).draw(true);



      });

      $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"indicadores/reporteempresagestor/"+g+"/"+a
      }).done(function(response) {

        var empresas = response.cantidad;

        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/reportedtgestor/"+a+"/"+g
        }).done(function(edt) {

          var edt = edt.cantidad;

          $.ajax({
            dataType:'json',
            type:'post',
            url:uri+"indicadores/reportegruposgestor/"+a+"/"+g
          }).done(function(grupos) {
            var grupos = grupos.cantidad;

            $('#graficogestor').remove();
            $('#idgraficogestor').append('<canvas id="graficogestor"></canvas>');


            new Chart(document.getElementById("graficogestor"),
              {"type":"bar",
              "data":{"labels":["Inico","Planeación","Ejecución","Cierre - PF","Cierre - PMV","Suspendido","Cancelado","P.F. Empresas","EDT","G. Investigación"],
              "datasets":[{"label":"Cantidad","data":[inicio,planeacion,ejecucion,cierrepf,cierrepmv,suspendido,cancelado,empresas,edt,grupos],"fill":false,
              "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1 )","rgba(201, 203, 207, 1)","rgba(300, 190, 207, 1)","rgba(250, 190, 120, 1)","rgba(100, 190, 207, 1)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

          });

        });

      });

    });

  }else{

   swal("Ups!!", "Debe seleccionar un gestor", "warning");
 }


});


$ ('#btngraficoempresas').click (function (){

  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"indicadores/reporteempresa"
  }).done(function(response) {

   $("#inputempresas").val("si");

   var inicio = 0;
   var planeacion = 0;
   var ejecucion = 0;
   var cierrepf = 0;
   var cierrepmv = 0;
   var suspendido = 0;
   var cancelado = 0;


   $.each(response, function(i, item) {

    if (item.id == 1) {
      inicio +=1;
    }

    if (item.id == 2) {
      planeacion +=1;
    }

    if (item.id == 3) {
      ejecucion +=1;
    }

    if (item.id == 4) {
      cierrepf +=1;
    }

    if (item.id == 5) {
      cierrepmv +=1;
    }

    if (item.id == 6) {
      suspendido +=1;
    }

    if (item.id == 7) {
      cancelado +=1;
    }

  });

   new Chart(document.getElementById("graficoempresa"),
    {"type":"bar",
    "data":{"labels":["Inico","Planeación","Ejecución","Cierre - PF","Cierre - PMV","Suspendido","Cancelado"],
    "datasets":[{"label":"Cantidad","data":[inicio,planeacion,ejecucion,cierrepf,cierrepmv,suspendido,cancelado],"fill":false,
    "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86,1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235,1)","rgba(153, 102, 255,1  )","rgba(201, 203, 207, 1)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

   var t = $('#tablaempresas').DataTable();
   t.clear();
   t.row.add( [inicio,planeacion,ejecucion,cierrepf,cierrepmv,suspendido,cancelado] ).draw(true);
 });

});





$ ('#pdfempresas').click (function () {
  var a = $("#inputempresas").val();
  if (a != "") {
    var doc = new jsPDF ();
    doc.addHTML ($ ('#idgraficoempresa'), 1, 138,{
      'background': '#fff',
      'border': '2px solid white',
    }, function () {
     var logo = new Image();
     logo.src = 'data:image/png;base64,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';
     doc.addImage(logo, 'JPEG', 28, 15,148,20);
     doc.text('Proyectos articulados con empresas',60,48);
     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/reporteempresa"
    }).done(function(response) {



     var inicio = 0;
     var planeacion = 0;
     var ejecucion = 0;
     var cierrepf = 0;
     var cierrepmv = 0;
     var suspendido = 0;
     var cancelado = 0;


     $.each(response, function(i, item) {

      if (item.id == 1) {
        inicio +=1;
      }

      if (item.id == 2) {
        planeacion +=1;
      }

      if (item.id == 3) {
        ejecucion +=1;
      }

      if (item.id == 4) {
        cierrepf +=1;
      }

      if (item.id == 5) {
        cierrepmv +=1;
      }

      if (item.id == 6) {
        suspendido +=1;
      }

      if (item.id == 7) {
        cancelado +=1;
      }

    });


     doc.text("Inicio"+": "+inicio+" proyectos", 20, 58);
     doc.text("Planeación"+": "+planeacion+" proyectos", 20, 68);
     doc.text("Ejecución"+": "+ejecucion+" proyectos", 20, 78);
     doc.text("Cierre - PF"+": "+cierrepf+" proyectos", 20, 88);
     doc.text("Cierre - PMV"+": "+cierrepmv+" proyectos", 20, 98);
     doc.text("Suspendido"+": "+suspendido+" proyectos", 20, 108);
     doc.text("Cancelado"+": "+cancelado+" proyectos", 20, 118);
     doc.save('Indicadores_Tecnoparque.pdf');
   });
  });

}else{
  swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");

}

});




$ ('#pdflinea').click (function () {
  var l = $("#txtlinea").val();
  var a = $("#inputlinea").val();
  var ano = $("#txtanol").val();
  if (a != "") {
    var doc = new jsPDF ();
    doc.addHTML ($ ('#idgraficolinea'), 1, 168,{
      'background': '#fff',
      'border': '2px solid white',
    }, function () {
     var logo = new Image();
     logo.src = 'data:image/png;base64,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';
     doc.addImage(logo, 'JPEG', 28, 15,168,20);
     doc.text('Indicadores por Linea',80,48);
     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/reportelineaestado/"+l+"/"+ano
    }).done(function(response) {



     var inicio = 0;
     var planeacion = 0;
     var ejecucion = 0;
     var cierrepf = 0;
     var cierrepmv = 0;
     var suspendido = 0;
     var cancelado = 0;


     $.each(response, function(i, item) {

      if (item.id == 1) {
        inicio +=1;
      }

      if (item.id == 2) {
        planeacion +=1;
      }

      if (item.id == 3) {
        ejecucion +=1;
      }

      if (item.id == 4) {
        cierrepf +=1;
      }

      if (item.id == 5) {
        cierrepmv +=1;
      }

      if (item.id == 6) {
        suspendido +=1;
      }

      if (item.id == 7) {
        cancelado +=1;
      }

    });

     var nl = $("#txtlinea").val();
     var nombrel = $("#txtlinea [value='"+nl+"']").text();
     doc.text("Linea: "+nombrel, 20, 58);
     doc.text("Inicio"+": "+inicio+" proyectos", 20, 68);
     doc.text("Planeación"+": "+planeacion+" proyectos", 20, 78);
     doc.text("Ejecución"+": "+ejecucion+" proyectos", 20, 88);
     doc.text("Cierre - PF"+": "+cierrepf+" proyectos", 20, 98);
     doc.text("Cierre - PMV"+": "+cierrepmv+" proyectos", 20, 108);
     doc.text("Suspendido"+": "+suspendido+" proyectos", 20, 118);
     doc.text("Cancelado"+": "+cancelado+" proyectos", 20, 128);

     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/reporteempresalinea/"+l+"/"+ano
    }).done(function(response) {

      var empresas = response.cantidad;
      doc.text("Proyectos finalizados articulados con empresas: "+empresas+" proyectos", 20, 138);


      $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"indicadores/reportedtlinea/"+ano+"/"+l
      }).done(function(edt) {

        var edt = edt.cantidad;

        doc.text("EDT: "+edt, 20, 148);

        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/reportegruposlinea/"+ano+"/"+l
        }).done(function(grupos) {

          var grupos = grupos.cantidad;
          doc.text("Grupos de Investigación: "+grupos, 20, 158);
          doc.save('Indicadores_Tecnoparque.pdf');
        });
      });
    });
  });

  });

}else{
  swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");

}

});


$ ('#pdfgestor').click (function () {
  var l = $("#txtgestor").val();
  var a = $("#inputgestor").val();
  var ano = $("#txtanog").val();
  if (a != "") {
    var doc = new jsPDF ();
    doc.addHTML ($ ('#idgraficogestor'), 1, 168,{
      'background': '#fff',
      'border': '2px solid white',
    }, function () {
     var logo = new Image();
     logo.src = 'data:image/png;base64,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';
     doc.addImage(logo, 'JPEG', 28, 15,148,20);
     doc.text('Indicadores por Gestor',80,48);
     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/indicadoresgestor/"+l+"/"+ano
    }).done(function(response) {



     var inicio = 0;
     var planeacion = 0;
     var ejecucion = 0;
     var cierrepf = 0;
     var cierrepmv = 0;
     var suspendido = 0;
     var cancelado = 0;


     $.each(response, function(i, item) {

      if (item.id == 1) {
        inicio +=1;
      }

      if (item.id == 2) {
        planeacion +=1;
      }

      if (item.id == 3) {
        ejecucion +=1;
      }

      if (item.id == 4) {
        cierrepf +=1;
      }

      if (item.id == 5) {
        cierrepmv +=1;
      }

      if (item.id == 6) {
        suspendido +=1;
      }

      if (item.id == 7) {
        cancelado +=1;
      }

    });

     var nl = $("#txtgestor").val();
     var nombrel = $("#txtgestor [value='"+nl+"']").text();
     doc.text("Gestor: "+nombrel, 20, 58);
     doc.text("Inicio"+": "+inicio+" proyectos", 20, 68);
     doc.text("Planeación"+": "+planeacion+" proyectos", 20, 78);
     doc.text("Ejecución"+": "+ejecucion+" proyectos", 20, 88);
     doc.text("Cierre - PF"+": "+cierrepf+" proyectos", 20, 98);
     doc.text("Cierre - PMV"+": "+cierrepmv+" proyectos", 20, 108);
     doc.text("Suspendido"+": "+suspendido+" proyectos", 20, 118);
     doc.text("Cancelado"+": "+cancelado+" proyectos", 20, 128);


     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"indicadores/reporteempresagestor/"+l+"/"+ano
    }).done(function(response) {

      var empresas = response.cantidad;
      doc.text("Proyectos finalizados articulados con empresas: "+empresas+" proyectos", 20, 138);

      $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"indicadores/reportedtgestor/"+ano+"/"+l
      }).done(function(edt) {

        var edt = edt.cantidad;

        doc.text("EDT: "+edt, 20, 148);

        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"indicadores/reportegruposgestor/"+ano+"/"+l
        }).done(function(grupos) {

          var grupos = grupos.cantidad;
          doc.text("Grupos de Investigación: "+grupos, 20, 158);
          doc.save('Indicadores_Tecnoparque.pdf');
        });
      });
    });

  });
  });

}else{
  swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");

}

});


</script>


<script type="text/javascript" src="<?php echo URL; ?>css/indicadores/indicadores.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>css/indicadores/indicadores1.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>css/indicadores/indicadores2.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>css/indicadores/indicadores3.js"></script>
<script type="text/javascript">
   var anoo = $("#inputano").val();
  $("#txtano").val(anoo);
  $("#txtanol").val(anoo);
  $("#txtanog").val(anoo);
  $("#txtanopi").val(anoo);
  $("#txtanopf").val(anoo);
  $("#txtanoppm").val(anoo);
  $("#txtanoarteins").val(anoo);
  $("#txtanoaef").val(anoo);
  $("#txtanosenafin").val(anoo);
  $("#txtanognrfin").val(anoo);
  $("#txtanoedt").val(anoo);
</script>
