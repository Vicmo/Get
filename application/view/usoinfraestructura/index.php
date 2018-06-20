<body style="background: #238276">
  <title>Tecnoparque  | Uso de infraestructúra</title>
  <div class="right_col" role="main">
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
              <li id="registro" class="active" ><a data-toggle="tab" href="#home">Registrar Uso</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Uso</a></li>
            </ul>
            <div class="tab-content" >
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>


                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                  action="<?= URL?>usoinfraestructura/registrar"  method="POST">


                  <input value="<?php echo "$documento";?>" name="txtdocumento" id="txtdocumento" type="hidden">
                  <input value=""  id="txtidlinea" type="hidden">
                  <input value="" id="txtuso" name="usotxt" type="hidden">
                  <input value="" id="temporal" type="hidden">



                  <div class="item form-group">

                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" >Fecha<span class="required">*</span>
                      </label>  
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">
                            <input type="text" name="txtfecha" class="form-control has-feedback-left"  id="single_cal3">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                      </div>



                      <label class="control-label col-md-2 col-sm-3 col-xs-3" >Proyecto<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <select id="txtproyecto"   class="form-control" name="txtproyecto"  required="" onchange="talentos()">
                          <option value="">Seleccione</option>
                        </select>
                      </div>


                    </div>
                  </div>
                  <div class="item form-group">

                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Gestor<span class="required">*</span>
                   </label>

                   <div class="col-md-3 col-sm-3 col-xs-3">
                     <input  id="txtgestor" class="form-control col-md-7 col-xs-12" disabled="">

                   </div>

                   <div class="item form-group">

                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Linea<span class="required">*</span>
                     </label>

                     <div class="col-md-3 col-sm-3 col-xs-3">
                      <input  id="txtlinea" class="form-control col-md-7 col-xs-12" disabled="">

                    </div>
                  </div>
                </div>



                <hr>
                <h2><small>Si no se van a registrar horas de asesorias dejar el campo vacío</small></h2>
                <br>
                <br>
                <br>

                <div class="item form-group">
                 <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Asesoria Directa  <span class="required">(Horas)</span>
                 </label>
                 <div class="col-md-3 col-sm-3 col-xs-3">
                  <input name="txtad" onkeypress="return cero(event)" id="txtad" class="form-control col-md-7 col-xs-12" >
                </div>

                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Asesoria Indirecta  <span class="required">(Horas)</span>
                </label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input name="txtai" onkeypress="return cero(event)" id="txtai" class="form-control col-md-7 col-xs-12" >
                </div>


                
              </div>

              <div class="item form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Descripción <span class="required">*</span>
                </label>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <textarea required name="txtdes" maxlength="200"  id="txtdes" class="form-control" rows="5"></textarea>
                </div>
                <br>
              </div>
              <hr>
              <h2><small>Para registrar el uso de un laboratorio o la asistencia de un talento dar click en el boton <b style="font-size:20px">  '+'</b></small></h2>
              <br>
              <br>
              <br>
              <div class="item form-group">
               <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Laboratorio<span class="required"></span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                 <select id="txtlabo" class="form-control" name="txtlabo"  onchange="unicol()">
                  <option value="">Seleccione</option>
                </select>
              </div>

              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Tiempo de uso<span class="required"> (Horas)</span>
              </label>
              <div class="col-md-3 col-sm-3 col-xs-3">
                <input name="txtiempo" onkeypress="return cero(event)" id="txtiempo" class="form-control col-md-7 col-xs-12" >
              </div>


              <div class="col-md-1" >
                <a class="btn btn-primary" onclick="agregar()"><i class="glyphicon glyphicon-plus"></i></a>
              </div>
            </div>
            <hr>
            <div class="item form-group">


              <label class="control-label col-md-2 col-sm-3 col-xs-3" >Talentos<span class="required">*</span>
              </label>
              <div class="col-md-3 col-sm-3 col-xs-3">
                <select id="txttalento" class="form-control" name="" disabled="" onchange="unico()">
                  <option value="">Seleccione</option>
                </select>
              </div>

              <div class="col-md-1" >

                <a class="btn btn-primary" onclick="agregart()"><i class="glyphicon glyphicon-plus"></i></a>

              </div>
            </div>

            <div class="item form-group">
             <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email"><span class="required"></span>
             </label>
             <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="panel panel-info" style="width: 100%; margin-top: 40px; margin-left: 1%">
                <div class="panel-heading">
                  <h3 class="panel-title">  <h3 class="panel-title"><span class="glyphicon glyphicon-log-in" ></span> Detalle de uso:</h3></h3>
                </div>
                <div class="panel-body" id="detalleuso">

                </div>

              </div>
            </div>

            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email"><span class="required"></span>
            </label>
            <div class="col-md-3 col-sm-3 col-xs-3">
             <div class="panel panel-info" style="width: 100%; margin-top: 40px; margin-left: 1%">
              <div class="panel-heading">
                <h3 class="panel-title">  <h3 class="panel-title"><span class="glyphicon glyphicon-log-in" ></span> Talentos:</h3></h3>
              </div>
              <div class="panel-body" id="detallet">

              </div>

            </div>
          </div>

        </div>


        <div class="form-group">
         <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
         </div>

       </div>

     </div>

     <div id="menu2" class="tab-pane fade ">
      <br>
      <table class="table table-striped jambo_table bulk_action" id="tabla" >


        <thead>
          <tr>
            <th >Fecha</th>
            <th>Proyecto</th>
            <th>Asesoria Directa</th>
            <th>Asesoria Indirecta</th>
            <th>Descripción</th>
            <th>Laboratorios</th>
            <th>Talentos</th>
            <th>Editar</th>
            <th>Anular</th>
          </tr>
        </thead>
        <tbody>
         <?php foreach ($consulta as $value) { ?>
         <tr>
          <div class="item form-group">
          </div>
          <td><?= $value["fecha"] ?></td>
          <td style="width: 15%"><?= $value["nombre"] ?></td>
          <td><?= $value["asesoriad"] == null?"No aplica":$value["asesoriad"]?><?= $value["asesoriad"] == null?"":" Horas"?></td>
          <td><?= $value["asesoriai"] == null?"No aplica":$value["asesoriai"]?><?= $value["asesoriai"] == null?"":" Horas"?></td>
          <td style="width: 15%"><?= $value["descripcion"] ?></td>
          <td><a class="btn btn-primary btn-xs" onclick="verlabo(<?= $value['id']?>)"><i class="fa fa-flask"></i> Laboratorios</a></td>
          <td><a class="btn btn-primary btn-xs"  onclick="vertalen(<?= $value['id']?>)"><i class="fa fa-users"></i> Talentos</a></td>
          <td>
            <a href="<?php echo URL ;?>usoinfraestructura/edit/<?= $value["id"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
          </td>
          <td>
            <a  onclick="cambiarestado(<?= $value["id"] ?>, 0)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Anular</a>

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


 <div id="modalabo" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm" style="width: 500px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <center><h4 class="modal-title">Laboratorios</h4></center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table id="tabla" class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">
                <th class="column-title">Laboratorio</th>
                <th class="column-title">Tiempo de Uso</th>
              </tr>
            </thead>            
            <tbody id="tablalabo">
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>
</div>


<div id="modaltalen" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm" style="width: 500px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <center><h4 class="modal-title">Talentos</h4></center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table id="tabla" class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">
                <th class="column-title">Documento</th>
                <th class="column-title">Nombre</th>
              </tr>
            </thead>            
            <tbody id="tablatalen">
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
</div>
</div>

<script src="<?php echo URL; ?>js/usoinfraestructura.js"></script>
<script type="text/javascript">
 var x = location.hash;
 if (x != "") {
  $("#home").removeClass("tab-pane fade in active").addClass("tab-pane fade");
  $(x).addClass('tab-pane fade in active');
  $("#registro").removeClass();
  $("#consulta").addClass('active');
  location.hash = '';
}


$('#registrar').on('click',function(e){

 $.ajax({
  dataType:'json',  
  type:'post',
  url:uri+"usoinfraestructura/ultima"
}).done(function(respon) {
  $("#txtuso").val(respon.ultima);
  console.log(respon.ultima);
});
e.preventDefault();
var form = $(this).parents('form');
var a = $("#abc").val();

if ($("#txtproyecto").val() && $("#txtdes").val()) {

  if ($("#abc").val() == null) {
   swal("Ups!!", "Debe registrar mínimo un talento", "warning");

 }else if ($("#txtproyecto").val() && $("#txtdes").val()) {

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
      $("#txtproyecto").prop("disabled",false);
      form.submit();

    },1500 );
    swal("Registrado", "El registro ha sido guardado correctamente", "success");

  }else{
  }

});

 }

}
});
</script>
