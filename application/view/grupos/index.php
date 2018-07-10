<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #EDEDED">
  <title>Tecnoparque  | Grupos de Investigación</title>
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
             <ul class="nav nav-tabs">
              <li id="registro" class="active"><a data-toggle="tab" href="#home">Registrar Grupo</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Grupo </a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>
                <div class="clearfix" ></div>
                <div class="x_content" >
                  <br />
                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>grupos/registrar"  method="POST">
                  <input value="<?php echo "$documento";?>" name="txtgestor" type="hidden">
                  <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Fecha<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                    <input type="text" name="txtfecha" class="form-control has-feedback-left" id="single_cal3">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                  </div>

                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre grupo de investigación<span class="required">*</span>
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                   <input required name="txtnombre" id="txtnombre" class="form-control col-md-7 col-xs-12" >
                 </div>
               </div>
               <div class="item form-group">
                 <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Institución a la que pertenece<span class="required">*</span>
                 </label>
                 <div class="col-md-3 col-sm-3 col-xs-3">
                   <input required="" name="txtinstitucion" id="txtinstitucion" class="form-control col-md-7 col-xs-12" >
                 </div>
                 <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Clasificación Colciencias<span class="required">*</span>
                 </label>
                 <div class="col-md-3 col-sm-3 col-xs-3">
                   <select id="txtclasificacion" class="form-control" name="txtclasificacion" required="">
                     <option value="">Seleccione</option>
                     <option value="A1">A1</option>
                     <option value="A">A</option>
                     <option value="B">B</option>
                     <option value="C">C</option>
                     <option value="Reconocido">Reconocido</option>
                     <option value="Avalado por la institución">Avalado por la institución</option>
                     <option value="Internacional">Internacional</option>
                   </select>
                 </div>
               </div>
               <div class="item form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-3" >Tipo Articulacion<span class="required">*</span>
                </label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <select id="txtipo" class="form-control" name="txtipo" required="">
                   <option value="">Seleccione</option>
                   <option value="Proyecto I+D+I formulados">Proyecto I+D+I formulados</option>
                   <option value="Publicaciones">Publicaciones</option>
                   <option value="Articulos A">Articulos A</option>
                   <option value="Articulos B">Articulos B</option>
                   <option value="Articulos C">Articulos C</option>
                   <option value="Articulos Divulgación">Articulos Divulgación</option>
                   <option value="Solicitudes de patentes">Solicitudes de patentes</option>
                   <option value="Vigilancias Tecnológicas">Vigilancias Tecnológicas</option>
                   <option value="Prototipos">Prototipos</option>
                   <option value="Eventos científicos y afines">Eventos científicos y afines</option>
                 </select>
               </div>
               <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Observaciones<span class="required">*</span>
               </label>
               <div class="control-group">
                <div class="controls">
                  <div class="col-md-3 ">
                    <textarea required name="txtobservaciones" maxlength="200"  id="txtdes" class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="form-group">
             <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
             </div>
           </div>
         </div>
         <div id="menu2" class="tab-pane fade">
           <table class="table table-striped jambo_table bulk_action" id="tabla">
            <br>
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Nombre grupo</th>
                <th>Institución</th>
                <th>Clasificación</th>
                <th>Tipo articulación</th>
                <th>Observaciones</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($consulta as $value) { ?>
             <tr>
              <td><?= $value["fecha"] ?></td>
              <td><?= $value["nombre"] ?></td>
              <td><?= $value["institucion"] ?></td>
              <td><?= $value["clasificacion"] ?> </td>
              <td><?= $value["articulacion"] ?></td>
              <td><?= $value["observaciones"] ?></td>
              <td>
                <a href="<?php echo URL ;?>grupos/edit/<?= $value["idgrupo"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
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
</div>
</div>
<script src="<?php echo URL; ?>js/grupos.js"></script>
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
