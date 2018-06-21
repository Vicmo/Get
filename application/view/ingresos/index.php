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
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" >
          <div class="x_title">
           <ul class="nav nav-tabs">
            <li class="active" id="registro"><a data-toggle="tab" href="#home">Registrar Ingreso</a></li>
            <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Ingresos</a></li>
          </ul>
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <br>
              <div class="clearfix" ></div>
              <h2><small>Los elementos con (*) son obligatorios</small></h2>
              <div class="x_content" ></div>
              <div class="row">
                <div class="col-lg-12">
                  <form class="form-horizontal form-label-left" method="POST" id="demo-form2">
                    <div data-parsley-check-children="2" data-parsley-validate-if-empty="">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="numeroIdentificacion">Documento<span class="required">*</span></label>
                          <div class="col-md-10 col-sm-6 col-xs-12">
                            <div class="col-sm-11">
                              <div class="input-group">
                                <input class="form-control col-md-12 col-xs-12" placeholder="Ingrese número de identificación" name="numeroIdentificacion"  id="numeroIdentificacion" >
                                <span class="input-group-btn">
                                  <a id="btnNumeroIdentificacion" class="btn btn-success">Verificar</a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="col-md-10 col-sm-8 col-xs-12  col-sm-offset-1">
                        <div class="first">
                        <div id="divRegistrarPersona" class="x_panel ">
                          <div class="x_title">
                            <h2>Registrar nueva persona </h2>

                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                          <br />

                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="hidden" id="idPersona" name="idPersona" class="form-control col-md-7 col-xs-12">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres<span class="required">*</span></label>
                                  <div class="col-md-8 col-sm-6 col-xs-12">
                                    <input  type="text" id="nombres" name="nombres" class="form-control col-md-7 col-xs-12" data-parsley-trigger="keyup" data-parsley-maxlength="50" data-parsley-group="block-1">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos<span class="required">*</span></label>
                                  <div class="col-md-8 col-sm-6 col-xs-12">
                                    <input type="text" id="apellidos" name="apellidos" class="form-control col-md-7 col-xs-12"  data-parsley-group="block-1">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br />
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idTipoDocumento">Tipo de documento<span class="required">*</span></label>
                                  <div class="col-md-8 col-sm-6 col-xs-12">
                                    <select id="idTipoDocumento" name="idTipoDocumento" class="form-control"  data-parsley-group="block-1">
                                       <option value="" selected="">Seleccione Tipo de Documento</option>
                                      <?php foreach ($tipodoc as $key => $value): ?>
                                        <option value="<?= $value['idtipodocumento'] ?>"><?=$value['nombre']?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idTipoPersona">Tipo de persona<span class="required">*</span></label>
                                  <div class="col-md-8 col-sm-6 col-xs-12">
                                    <select id="idTipoPersona" name="idTipoPersona" class="form-control"  data-parsley-group="block-1">
                                      <option value="" >Seleccione Tipo Persona</option>
                                      <?php foreach ($tipoper as $key => $value): ?>
                                        <option value="<?= $value['idTipoPersona'] ?>"><?=$value['nombre']?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contacto">Contacto</label>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                  <input type="text" id="contacto" name="contacto" class="form-control col-md-7 col-xs-12"  data-parsley-group="block-1">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo">Correo Electrónico<span class="required">*</span></label>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                  <input type="text" id="correo" name="correo" class="form-control col-md-7 col-xs-12" data-parsley-type="email"  data-parsley-group="block-1">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10 col-sm-8 col-xs-12  col-sm-offset-1">
                        <div id="divPersona" class="x_panel ">
                          <div class="x_title">
                            <h2>Persona Registrada </h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                          <br />
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Completo</label>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                  <input type="text" id="nombrePersona" disabled class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                            </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipo de persona</label>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                  <input type="text" id="tipoPersona" disabled class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              </div>
                            </div>
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contacto</label>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                  <input type="number" id="contacto" disabled class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Correo Electrónico</label>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                  <input type="email" id="correo" disabled class="form-control col-md-7 col-xs-12" >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="second">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha">Fecha</label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <input type="text" name="fecha" id="single_cal3" value="<?php echo date("Y-m-d");?>" class="form-control col-md-7 col-xs-12" required data-parsley-group="block-2">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaIngreso">Hora Ingreso</label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <input type="time" id="horaIngreso" name="horaIngreso" value="<?php ini_set('date.timezone','America/Bogota'); echo date("h:i");?>"  class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="servicios_idServicio">Servicio<span class="required">*</span></label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <select id="idServicio" name="servicios_idServicio" class="form-control" data-parsley-group="block-2">
                              <option value="">Seleccione Servicio</option>
                                <?php foreach ($servicio as $key => $value): ?>
                                  <option value="<?= $value['idServicio'] ?>"><?=$value['nombre']?></option>
                                <?php endforeach; ?>
                              </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaSalida">Hora Salida</label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <input   type="time" id="horaSalida" name="horaSalida"  class="form-control col-md-7 col-xs-12" required="" data-parsley-group="block-2">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="descripcion">Descripción</label>
                          <div class="col-md-10 col-sm-6 col-xs-12">
                            <div class="col-sm-11">
                              <textarea id="descripcion"  class="form-control" name="descripcion" rows="4" data-parsley-group="block-2"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <br>

                  <center><button type="button" id="btnregistrar" onclick="registrarIngreso(); reload_ingresos()" class="btn btn-success">Registrar</button> </center>
                  </div>
                  </form>
                  </div>
              </div>
           </div>



           <div id="menu2" class="tab-pane fade ">

               <table class="table table-striped jambo_table bulk_action" id="tabla">


            <thead>
              <tr>
                <th>Día/Hora Ingreso</th>
                <th>Hora de Salida</th>
                <th>Nombres</th>
                <th>Tipo de Persona</th>
                <th>Correo Eletrónico</th>
                <th>Servicio</th>
                <th>Descripcion</th>
                <!-- <th>Editar</th>
                <th>Eliminar</th> -->
              </tr>
            </thead>


            <tbody>
             <?php foreach ($ingresos as $value) { ?>
             <tr>

              <div class="item form-group">

              </div>


              <td style="width: 12%"><?= $value["fecha"] ?></td>
              <?php if ($value["horaSalida"]==null) {
                echo '<td>No hay información disponible</td>';
              } else {
                echo '<td>'.$value["horaSalida"].'</td>';
              }?>
              <td><?= $value["persona"] ?></td>
              <td><?= $value["tipoper"] ?></td>
              <td><?= $value["correo"] ?></td>
              <td><?= $value["Servicio"] ?></td>
              <td><?= $value["descripcion"] ?></td>




            </tr>
            <?php } ?>
          </tbody>


        </table>
           </div>
         </div>


<script src="<?php echo URL; ?>js/gestor.js"></script>
<script src="<?php echo URL; ?>js/ingreso.js"></script>
