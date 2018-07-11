  <title>Tecnoparque  | Materiales</title>
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
      <div class="row" >
        <div class="col-md-12">
          <div class="x_panel" >
            <div class="x_title">
             <ul class="nav nav-tabs">
              <li id="registro" class="active"><a data-toggle="tab" href="#home">Registrar Materiales</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Materiales</a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>
                <div class="clearfix" ></div>
                <div class="x_content" >
                  <br />
                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>materiales/registrar"  method="POST">
                  <input type="hidden" name="txtidnodo" value="<?= $idnodo ?>">
                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Item<span class="required">*</span>
                      </label>
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">
                            <textarea name="txtitem" required="" id="txtitem"  rows="3" class="form-control col-md-7 col-xs-12"></textarea>
                          </div>
                        </div>
                      </div>
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Laboratorio<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <select id="txtlaboratorio" class="form-control select2" name="txtlaboratorio" required="">
                         <option value="">Seleccione</option>
                         <?php foreach ($labo as $key => $value): ?>
                           <option value="<?= $value['idlaboratorio'] ?>"><?=$value['nombre']?></option>
                         <?php endforeach; ?>
                       </select>
                     </div>
                   </div>
                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Tipo Material<span class="required">*</span>
                    </label>
                    <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">
                         <select id="txttipo" class="form-control" name="txttipo" required="">
                           <option value="">Seleccione</option>
                           <?php foreach ($tipo as $key => $value): ?>
                             <option value="<?= $value['idtipomaterial'] ?>"><?=$value['nombre']?></option>
                           <?php endforeach; ?>
                         </select>
                       </div>
                     </div>
                   </div>
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Cantidad<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                     <input required name="txtcantidad"  id="txtcantidad" onkeypress="return cero(event)" class="form-control col-md-7 col-xs-12" >
                   </div>
                 </div>
                <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Año compra<span class="required">*</span>
                  </label>
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-3 ">
                        <input required name="txtano"  id="txtano" maxlength="4" minlength="4" onkeypress="return cero(event)" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>
                  </div>
                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Horas uso<span class="required"> (Año) *</span>
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                   <input required name="txthoras"  id="txthoras"  onkeypress="return horas(event)" class="form-control col-md-7 col-xs-12" >
                 </div>
               </div>
              <div class="item form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Precio Unitario<span class="required">*</span>
                </label>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-3 ">
                      <input required name="txtprecio"  id="txtprecio"  onkeypress="return horas(event)" class="form-control col-md-7 col-xs-12" >
                    </div>
                  </div>
                </div>
              </div>
            <div class="item form-group">
             <div class="form-group">
               <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
               </div>
             </div>
           </div>
         </div>
         <div id="menu2" class="tab-pane fade">
           <table class="table table-striped jambo_table bulk_action" id="tabla">
            <thead>
              <tr>
                <th style="width:100px">Item</th>
                <th>Laboratorio</th>
                <th>Tipo Material</th>
                <th>Cantidad</th>
                <th>Año Compra</th>
                <th>Horas Uso</th>
                <th>Precio Unitario</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($consultar as $value) { ?>
             <tr>
              <div class="item form-group">
              </div>
              <td><?= $value["item"] ?></td>
              <td><?= $value["labo"] ?></td>
              <td><?= $value["tipo"] ?></td>
              <td><?= $value["cantidad"] ?></td>
              <td><?= $value["anoc"] ?></td>
              <td><?= $value["horasuso"] ?></td>
              <td><?= $value["preciouni"] ?></td>
              <td>
                <a href="<?php echo URL ;?>materiales/edit/<?= $value["idmaterial"] ?>/<?= $idnodo ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
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
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<script src="<?php echo URL; ?>js/materiales.js"></script>
<script type="text/javascript">
var x = location.hash;
if (x != "") {
  $("#home").removeClass("tab-pane fade in active").addClass("tab-pane fade");
  $(x).addClass('tab-pane fade in active');
  $("#registro").removeClass();
  $("#consulta").addClass('active');
  location.hash = '';
}
</script>
