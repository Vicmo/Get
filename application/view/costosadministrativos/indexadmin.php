<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Costos Administrativos</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <div class="tab-content">


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
                            <center><button type="button" id="btnconsulta" class="btn btn-success">Consultar Costos administrativos</button>
                        <br><br>
                        <table class="table table-striped jambo_table bulk_action dt-responsive no-wrap" id="tblcostosadministrativosnodo"  width="100%" style="visibility: hidden;">
                          <thead>
                            <tr>
                              <th>Nodo</th>
                              <th>Nombre Costo</th>
                              <th>Valor</th>
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
 <script src="<?php echo URL; ?>js/costosadministrativosajax.js"></script>
