  <title>Tecnoparque  | Mantenimiento</title>
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
             <ul class="nav nav-tabs bar_tabs">
              <li id="registro" class="active"><a data-toggle="tab" href="#home">Registrar Mantenimiento</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Mantenimiento</a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>
                <div class="clearfix" ></div>
                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>mantenimiento/registrar"  method="POST">
                  <input type="hidden" name="txtidnodo" value="<?= $idnodo ?>">
                  <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Item<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtitem"  id="txtitem" class="form-control col-md-7 col-xs-12" >
                     </div>
                     <label class="control-label col-md-2 col-sm-3 col-xs-3" >Laboratorio<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                      <select id="txtlaboratorio" class="form-control select2" name="txtlaboratorio">
                       <option value="">Seleccione</option>
                       <?php foreach ($laboratorio as $key => $value): ?>
                         <option value="<?= $value['idlaboratorio'] ?>"><?=$value['nombre']?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
               </div>
                 <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Precio<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                     <input required onkeypress="return horas(event)" name="txtprecio" id="txtprecio" class="form-control col-md-7 col-xs-12" >
                   </div>
                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Vida util<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input  name="txtvidautil" onkeypress="return horas(event)" id="txtvidautil" required="" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>
                 <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Año ultimo mantenimiento <span class="required">*</span>
                    </label>
                    <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">
                          <input  name="txtanoum" maxlength="4" minlength="4" required="" id="txtanoum" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    </div>
                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Horas uso<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                     <input required name="txthorasuso" onkeypress="return cero(event)" id="txthorasuso" class="form-control col-md-7 col-xs-12" >
                   </div>
               </div>
               <div class="form-group">
                 <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
                 </div>
               <div class="clearfix"></div>
             </div>
         <div id="menu2" class="tab-pane fade">
           <br>
           <table class="table table-striped jambo_table bulk_action" id="tabla">
            <thead>
              <tr>
                <th>Item</th>
                <th>Laboratorio</th>
                <th>Precio</th>
                <th>Vida util</th>
                <th>Año ultimo mantenimiento</th>
                <th>Horas uso</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($consultamantenimiento as $value) { ?>
             <tr>
              <div class="item form-group">
              </div>
              <td><?= $value["item"] ?></td>
              <td><?= $value["nombre"] ?></td>
              <td><?= $value["precio"] ?></td>
              <td><?= $value["vidautil"] ?> </td>
              <td><?= $value["anoum"] ?></td>
              <td><?= $value["horasuso"] ?></td>
              <td>
                <a href="<?php echo URL ;?>mantenimiento/edit/<?= $value["idmantenimiento"] ?>/<?= $idnodo ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div id="ver" class="modal fade" role="dialog" >
     <div class="modal-dialog modal-sm" >
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">X</button>
           <center><h4 class="modal-title">Detalles del Proyecto</h4></center>
         </div>
         <div class="modal-body">
           <div class="table-responsive">
             <table id="tabla" >
               <thead>
               </thead>
               <tbody id="tablap">
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
</div>
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<script src="<?php echo URL; ?>js/mantenimiento.js"></script>
<!-- <script type="text/javascript"> $('#txtlaboratorio').select2();</script> -->
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
