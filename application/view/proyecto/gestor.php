  <link href="<?php echo URL; ?>css/reportes/r.min.css" rel="stylesheet">
  <title>Tecnoparque  | Proyecto</title>
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
             <ul class="nav nav-tabs">
              <li  id="registro" class="active"><a data-toggle="tab" href="#home">Registrar Proyecto</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Proyecto</a></li>
            </ul>
            <div class="tab-content">
              <hr>
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>
                <div class="clearfix" ></div>
                <div class="x_content" >
                  <br />
                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>proyecto/registrar"  method="POST">
                  <input value="<?php echo "$persona";?>" id="gestor" name="gestortxt" type="hidden">
                  <input value="" id="txtultima" name="txtultima" type="hidden">
                  <input value="" id="txtultimoid" name="txtultimoid" type="hidden">
                  <div class="item form-group">
                      <div class="item form-group">
                          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                          </label>
                          <div class="col-md-3 col-sm-3 col-xs-3">
                           <input name="txtnombre"  id="txtnombre" required class="form-control col-md-7 col-xs-12">
                         </div>
                         <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Fecha de Creación<span class="required">*</span>
                         </label>
                         <div class="control-group">
                          <div class="controls">
                            <div class="col-md-3 ">
                              <input type="text" name="fecha_crea" class="form-control has-feedback-left" id="single_cal3">
                              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                          </div>
                        </div>
                    </div>
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Talento Líder<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <select id="txtcedulalider" class="form-control select2" name="txtcedulalider" onchange="unicoo()">
                       <option value="">Seleccione</option>
                       <?php foreach ($talentolider as $key => $value): ?>
                         <option value="<?= $value['documento'] ?>"><?= $value['nombres'] ?> <?= $value['apellidos'] ?> / <?= $value['documento'] ?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
               </div>
               <hr>
               <h2><small>Para registrar los talentos dar click en el boton <b style="font-size:20px">  '+'</b></small></h2>
               <br>
               <br>
               <br>
                <div class="item form-group">
                 <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Talentos<span class="required"></span>
                 </label>
                 <div class="col-md-3 col-sm-3 col-xs-3">
                  <select id="txttalento" class="form-control select2" name="txttalento" onchange="unico()">
                   <option value="">Seleccione</option>
                   <?php foreach ($talentolider as $key => $value): ?>
                     <option value="<?= $value['documento'] ?>"><?= $value['nombres'] ?> <?= $value['apellidos'] ?> / <?= $value['documento'] ?></option>
                   <?php endforeach; ?>
                 </select>
               </div>
               <div class="col-md-1" >
                <a class="btn btn-primary" id="btn" onclick="agregar()"><i class="glyphicon glyphicon-plus"></i></a>
              </div>
              <label class="control-label col-md-1 col-sm-3 col-xs-12" for="email"><span class="required"></span>
              </label>
              <div class="col-md-3 col-sm-3 col-xs-3">
               <div class="panel panel-info" style="width: 100%; margin-left: 1%">
                <div class="panel-heading">
                  <h3 class="panel-title">  <h3 class="panel-title"><span class="glyphicon glyphicon-log-in" ></span> Talentos:</h3></h3>
                </div>
                <div class="panel-body" id="detallet">
                </div>
              </div>
            </div>
          </div>
        <hr>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-3" >Gestor<span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <input type="text" name="txtgestor" class="form-control col-md-7" value="<?php echo "$nombres $apellidos" ?>" disabled>
           </div>
           <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Linea<span class="required">*</span>
           </label>
           <div class="col-md-3 col-sm-3 col-xs-3">
             <input  name="txtlinea" id="txtlinea" disabled="" value="<?= $linea["nombre"] ?>" class="form-control col-md-7 col-xs-12" >
           </div>
         </div>
       <div class="item form-group">
           <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Foco<span class="required">*</span>
           </label>
           <div class="col-md-3 col-sm-3 col-xs-3">
            <select id="txtfoco" class="form-control" name="txtfoco" required>
             <option value="">Seleccione el Foco</option>
             <?php foreach ($foco as $key => $valuefoco):  ?>
               <option value="<?= $valuefoco['idfoco'] ?>"><?=$valuefoco['nombre'] ?></option>
            <?php endforeach; ?>
           </select>
         </div>
           <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Sector<span class="required">*</span>
           </label>
           <div class="col-md-3 col-sm-3 col-xs-3">
            <select id="txtsector" class="form-control" name="txtsector" required>
             <option value="">Seleccione el Sector</option>
             <?php foreach ($sector as $key => $value): ?>
               <option value="<?= $value['idsector'] ?>"><?=$value['nombre'] ?></option>
             <?php endforeach; ?>
           </select>
         </div>
       </div>
 <div class="item form-group">
   <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Tipo de proyecto<span class="required">*</span>
   </label>
   <div class="col-md-3 col-sm-3 col-xs-3">
    <select id="txttipoproyecto" class="form-control" name="txttipoproyecto" required>
     <option value="">Seleccione</option>
     <?php foreach ($tipoproyecto as $key => $value): ?>
       <option value="<?= $value['idtipoproyecto'] ?>"><?=$value['nombre'] ?></option>
     <?php endforeach; ?>
   </select>
 </div>
 <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Estado del proyecto<span class="required">*</span>
 </label>

 <div class="col-md-3 col-sm-3 col-xs-3">
  <select id="txtestadoproyecto" class="form-control" name="txtestadoproyecto" required>
   <option value="">Seleccione</option>
   <?php foreach ($estadopro as $key => $value): ?>
     <option value="<?= $value['idestadoproyecto'] ?>"><?=$value['nombre'] ?></option>
   <?php endforeach; ?>
 </select>
</div>
</div>
<!-- <input type="text" id="prueba" name="prueba" value="" class="form-control col-md-7 col-xs-12"> -->
<div id="divNit">
<div class="item form-group">
 <label class="control-label col-md-2 col-sm-3 col-xs-3" >Nit<span class="required"></span>
 </label>
 <div class="col-md-3 ">
  <input type="text" name="txtnit"  id="nit" value="" class="form-control col-md-7 col-xs-12">
</div>
<label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Razón Social<span class="required"></span>
</label>
<div class="col-md-3 col-sm-3 col-xs-3">
 <input type="text" name="txtrazonsocial" id="txtrazon_social" value="" class="form-control col-md-7 col-xs-12" >
</div>
</div>
</div>
<hr>
<div class="item form-group">
  <div class="item form-group">
    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Descripción del proyecto<span class="required">*</span>
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <textarea required name="txtdescripcion" maxlength="400"  id="txtdes" class="form-control" rows="5"></textarea>
    </div>
    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Observaciones<span class="required"></span>
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <textarea  name="txtobservaciones" maxlength="400"  id="txtob" class="form-control" rows="5"></textarea>
    </div>
  </div>
</div>
</hr>
<hr>

</hr>
<hr>
<div class="item form-group">
  <div class="item form-group">
   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Proyecto articulado con Tecnoacademia<span class="required">*</span> </label>
   <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
     <input type="radio" class="flat" name="txtpro_art_tecnoaca" value="0" checked=""/> Si:
     <input type="radio" class="flat" name="txtpro_art_tecnoaca" value="1" />
   </div>

   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Tiene aprendiz con apoyo de sostenimiento<span class="required">*</span> </label>
   <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
    <input type="radio" class="flat" name="txtapre_apoyo" value="0" checked=""/> Si:
    <input type="radio" class="flat" name="txtapre_apoyo" value="1" />
  </div>
</div>

</div>
<div class="item form-group">
  <div class="item form-group">
    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Tiene aprendiz SIN apoyo de sostenimiento<span class="required">*</span> </label>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
      <input type="radio" class="flat" name="txtapre_sinapoyo" value="0" checked=""/> Si:
      <input type="radio" class="flat" name="txtapre_sinapoyo" value="1" />
    </div>

    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Articulado con CT+i<span class="required">*</span> </label>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
     <input type="radio" class="flat" name="txtarti_cti" value="0" checked=""/> Si:
     <input type="radio" class="flat" name="txtarti_cti" value="1" />
   </div>

 </div>
</div>
<div class="item form-group">
  <div class="item form-group">
   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre del actor CT+i<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
     <input type="radio" class="flat" name="txtnom_act_cti" value="0" checked=""/> Si:
     <input type="radio" class="flat" name="txtnom_act_cti" value="1" />
   </div>

   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Dirigido a área de emprendimiento SENA
    <span class="required">*</span> </label>
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
      <input type="radio" class="flat" name="txtdiri_ar_emp" value="0" checked=""/> Si:
      <input type="radio" class="flat" name="txtdiri_ar_emp" value="1" />
    </div>
  </div>

  <div class="item form-group">
    <div class="item form-group">
     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Recibido a través del área de emprendimiento SENA<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
       <input type="radio" class="flat" name="txtreci_ar_emp" value="0" checked=""/> Si:
       <input type="radio" class="flat" name="txtreci_ar_emp" value="1" />
     </div>

     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Dinero de regalías<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
       <input type="radio" class="flat" name="txtdine_rega" value="0" checked=""/> Si:
       <input type="radio" class="flat" name="txtdine_rega" value="1" />
     </div>
   </div>
 </div>

 <div class="item form-group">
  <div class="item form-group">
   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Acompañamiento proceso de patente<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No:
     <input type="radio" class="flat" name="txtaco_pro_pate" value="0" checked=""/> Si:
     <input type="radio" class="flat" name="txtaco_pro_pate" value="1" />
   </div>

   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Patente publicada<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px">
     No:
     <input type="radio" class="flat" name="txtpata_publi" id="no" checked="checked" value="0">
     Si:
     <input type="radio" class="flat" name="txtpata_publi" id="si" value="1">
   </div>
 </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">ID patente<span class="required"></span>
    </label>
    <div class="col-md-3 col-sm-3 col-xs-3">
     <input name="txtidpatente"  id="txtidpatente" onchange="idp()" class="form-control col-md-7 col-xs-12">
   </div>
</div>
</hr>
</div>
<div class="form-group">
 <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
 </div>
</div>
</div>
<div id="menu2" class="tab-pane fade">
  <!-- <hr> -->
  <table class="table table-striped jambo_table bulk_action" id="reportesadmin">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Foco</th>
        <th>Estado</th>
        <TH>Descripción</TH>
        <th>Talentos</th>
        <th>Detalles</th>
        <th>Editar</th>
        <th>Entregables</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($proyecto as $value) { ?>
        <tr>
          <td><?= $value["id"] ?></td>
          <td style="width: 15%"><?= $value["nombre"] ?></td>
          <td><?= $value["nombref"] ?></td>
          <td><?= $value["estado"] ?></td>
          <td><?= $value["descripcion"] ?></td>
          <td>
            <a class="btn btn-primary btn-xs"  onclick="vert(<?= $value['idproyecto']?>)">
              <i class="fa fa-users "></i> Talentos</a>
            </td>
            <td>
              <a class="btn btn-primary btn-xs"  onclick="ver(<?= $value['idproyecto']?>)">
                <i class="fa fa-folder"></i> Detalles</a>
              </td>
              <td>
                <a href="<?php echo URL ;?>proyecto/edit/<?= $value["idproyecto"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
              </td>
              <td>
                <a href="<?php echo URL ;?>proyecto/entregables/<?= $value["idproyecto"]?>/<?= $persona ?>" class="btn btn-warning btn-xs"><i class="fa fa-book"></i> Entregables</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="x_content">

  <div id="ver" class="modal fade" role="dialog" >
   <div class="modal-dialog modal-ms" >
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">X</button>
         <center><h4 class="modal-title">Detalles del Proyecto</h4></center>
       </div>
       <div class="modal-body">
         <div class="table-responsive">
           <table id="tablas" >
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


 <div id="vert" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm" style="width: 700px">
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
                <th class="column-title">Correo</th>
                <th class="column-title">Celular</th>
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
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<script src="<?php echo URL; ?>js/proyecto.js"></script>
<!-- <script type="text/javascript"> $('#txtcedulalider').select2();</script> -->
<!-- <script type="text/javascript"> $('#txttalento').select2();</script> -->
<script type="text/javascript">


$('input[type=radio][name=txtpata_publi]').change(function() {
  console.log('Hi');
  alert('Cambió');
    if (this.value == 0) {
        alert("No tiene patente");
    }
    else if (this.value == 1) {
        alert("Tiene patente");
    }
});

 $('#registrar').on('click',function(e){
  e.preventDefault();
  var form = $(this).parents('form');
  var tl = $("#txtcedulalider").val();
  var a = document.getElementsByName("txttalento[]");

  if ($("#txtnombre").val() && $("#txtgestor").val() && $("#txtfoco").val() && $("#txtsector").val()
    && $("#txttipoproyecto").val() && $("#txtestadoproyecto").val() && $("#txtdes").val()) {

    if (tl == "") {
     swal("Ups!!", "Debe registrar un talento líder", "warning");
   }else if(a.length != 0){
    var tl = $("#txtcedulalider").val();
    for (x=0;x<a.length;x++){
      if(tl == a[x].value){
        swal("Ups!!", "El talento lider esta siendo registrado dos veces", "warning");
      }else{


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
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"proyecto/ultima"
        }).done(function(respon) {
          $("#txtultima").val(respon.ultima);
        });

        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"proyecto/ultimo"
        }).done(function(ultimo) {
          $("#txtultimoid").val(ultimo.ultimoid);
          console.log(ultimo.ultimoid);
        });


        setTimeout(function(){

          form.submit();

        },1500 );
        swal("Registrado", "El registro ha sido guardado correctamente", "success");

      }

    });
     }
   }
 }else{



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
     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"proyecto/ultima"
    }).done(function(respon) {
      $("#txtultima").val(respon.ultima);
    });

    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"proyecto/ultimo"
    }).done(function(ultimo) {
      $("#txtultimoid").val(ultimo.ultimoid);
    });


    setTimeout(function(){

      form.submit();

    },1500 );
    swal("Registrado", "El registro ha sido guardado correctamente", "success");

  }

});
 }

}

});
</script>

<script type="text/javascript">
 var x = location.hash;
 if (x != "") {
  $("#home").removeClass("tab-pane fade in active").addClass("tab-pane fade");
  $(x).addClass('tab-pane fade in active');
  $("#registro").removeClass();
  $("#consulta").addClass('active');
  location.hash = '';
}


function vert(id){
    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"proyecto/detalletalen/"+id
    }).done(function(respuesta){

      $("#tablatalen").empty()

      if (respuesta != null ) {
        console.log(respuesta);
        $.each(respuesta, function(i, item) {
          $("#tablatalen").append("<tr><td>"+item.documento+
            "</td><td>"+item.nombres+" "+item.apellidos+"</td><td>"+item.correo+"</td><td>"+item.numerocelular+"</td></tr>");
        });
        $("#vert").modal();
      }
    });

  }
</script>
