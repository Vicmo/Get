<body style="background: #238276">
 <link href="<?php echo URL; ?>css/vendors/iCheck/skins/flat/melo.css" rel="stylesheet">
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
          <div class="x_title">
           <ul class="tab-content">
             <div id="home" class="tab-pane fade in active">

              <br>

              <br>


              <div class="clearfix" ></div>

              <div class="x_content" >
                <br />

                <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                action="<?= URL?>proyecto/modificarentregables"  method="POST">


                <input value="<?= $datos['gestor'];?>"  name="gestortxt"  id="gestortxt" type="hidden">
                <input value="<?= $datos['linea'];?>"  id="lineatxt" type="hidden">
                <input value="<?= $datos['idproyecto'];?>"  name="txtidproyecto"  type="hidden">
                <input value="<?php echo "$documento";?>" id="txtdocumento" type="hidden">
                <input value=""  id="a" type="hidden">
                <input value=""  id="b" type="hidden">
                <input value=""  id="c" type="hidden">
                <input value=""  id="d" type="hidden">
                <input value=""  id="e" type="hidden">
                <input value=""  id="f" type="hidden">
                <input value=""  id="g" type="hidden">
                <input value=""  id="h" type="hidden">
                <input value=""  id="i" type="hidden">
                <input value=""  id="j" type="hidden">
                <input value=""  id="k" type="hidden">

                <input value=""  id="campoactainicio" name="campoactainicio" type="hidden">
                <input value=""  id="campopropuesta" name="campopropuesta" type="hidden">
                <input value=""  id="campobookp" name="campobookp" type="hidden">
                <input value=""  id="campocrono" name="campocrono" type="hidden">
                <input value=""  id="campobooke" name="campobooke" type="hidden">
                <input value=""  id="campolecciones" name="campolecciones" type="hidden">
                <input value=""  id="campoficha" name="campoficha" type="hidden">
                <input value=""  id="campovideo" name="campovideo" type="hidden">
                <input value=""  id="campoacta" name="campoacta" type="hidden">
                <input value=""  id="campomanualuso" name="campomanualuso" type="hidden">
                <input value=""  id="campoavalgrupo" name="campoavalgrupo" type="hidden">
                 <input value="<?php echo date("Y"); ?>" id="txtano" type="hidden">







                <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">ID<span class="required">*</span>
                  </label>
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-3 ">

                        <input  name="txtid" required="" disabled="" value="<?= $datos['id'];?>" id="txtid"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  </div>




                  <div class="item form-group">

                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                    </label>

                    <div class="col-md-3 col-sm-3 col-xs-3">
                     <input name="txtnombre" value="<?= $datos['nombre'];?>" disabled onkeypress="return validas(event)" id="txtnombre" required class="form-control col-md-7 col-xs-12">

                   </div>
                 </div>





               </div>



               <div class="item form-group">
                <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" >Gestor<span class="required">*</span>
                  </label>


                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <select id="txtgestor" class="form-control" name="txtgestor" required disabled="">


                    </select>
                  </div>


                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Linea<span class="required">*</span>
                  </label>

                  <div class="col-md-3 col-sm-3 col-xs-3">

                   <input  name="" id="txtlinea" disabled="" class="form-control col-md-7 col-xs-12" >
                 </div>


               </div>
             </div>


             <div class="item form-group">
               <div class="item form-group">
                 <div class="item form-group">
                  <div class="item form-group">

                  </div>
                </div>
              </div>






              <hr>
              <h4>Entregables Fase Inicio</h4>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3" >Acta de confidencialidad <div class="icheckbox_flat-green"><input type="checkbox"  value="" name="inicioacta" id="inicioacta" class="flat"></div> </label>
                <label class="control-label col-md-2 col-sm-3 col-xs-3" >Estado del arte del proyecto <div class="icheckbox_flat-green"><input type="checkbox" value="" id="tecnicap" name="tecnicap" class="flat"></div> </label>
                <label class="control-label col-md-2 col-sm-3 col-xs-3" >Acuerdo inicial de confidencialidad de idea ó Aval por parte de la empresa (o grupo de investigación) <div class="icheckbox_flat-green disabled"><input type="checkbox"  id="avalgrupo" name="avalgrupo" class="flat"></div> </label>
                <label class="control-label col-md-2 col-sm-3 col-xs-3" >Manual de uso de Infraestructura <div class="icheckbox_flat-green disabled"><input type="checkbox"  id="manualuso" name="manualuso"  class="flat"></div> </label>

              </div>
              <hr>
              <h4>Entregables Fase Planeación</h4>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3" >Canvas de planeación <div class="icheckbox_flat-green"><input type="checkbox" value="" id="bookp" name="bookp" class="flat"></div> </label>
                <label class="control-label col-md-2 col-sm-4 col-xs-3" >Alcance y actividades(Cronograma) <div class="icheckbox_flat-green"><input type="checkbox" id="crono" value="" name="crono" class="flat"></div> </label></div>
                <hr>
                <h4>Entregables Fase de Ejecución</h4>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3" >Plan de acción <div class="icheckbox_flat-green"><input type="checkbox" value="" id="booke" name="booke" class="flat"></div> </label>
                  <label class="control-label col-md-2 col-sm-4 col-xs-3" >Video Tutorial <div class="icheckbox_flat-green"><input type="checkbox" value="" id="lec" name="lec" class="flat"></div> </label>
                </div>
                <hr>
                <h4>Entregables Fase de Cierre</h4>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3" >Ficha de caracterización <div class="icheckbox_flat-green"><input id="fi" value="" type="checkbox" name="fi" class="flat"></div> </label>
                  <label class="control-label col-md-2 col-sm-4 col-xs-3" >Lecciones Aprendidas <div class="icheckbox_flat-green"><input type="checkbox" id="vidio" value="" name="vidio" class="flat"></div> </label>
                  <label class="control-label col-md-2 col-sm-4 col-xs-3" >Acta de Cierre <div class="icheckbox_flat-green"><input id="cierreacta" value="" type="checkbox" name="cierreacta" class="flat"></div> </label>
                </div>
                <hr>
                <br>



                      <input type="hidden" name="txtlink" required="" value="<?= $datos['link'];?>" id="txtlink"  class="form-control col-md-8 col-xs-12">


                <h4>Revisado Final</h4>
                <div class="item form-group">
                  <input type="radio" class="flat disabled" disabled=""  name="txtrevisado"  id="txtrevisadoa" value="Por evaluar"  />
                  Por evaluar
                  <input type="radio" class="flat" name="txtrevisado" disabled id="txtrevisadob" value="Aprobado"  />
                  Aprobado
                  <input type="radio" class="flat" name="txtrevisado" disabled id="txtrevisadoc" value="No aprobado"  />
                  No aprobado

                </div>
                <hr>
                <br>

                   <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Link Drive<span class="required">*</span>
                    </label>
                    <div class="control-group">

                      <a type="button"  target="_blank" href="https://goo.gl/xQL476" class="btn btn-warning">Ir</a>
                    </div>
                  </div>

                <div class="form-group">



                 <center><button type="button" id="modificar" class="btn btn-success">Modificar</button>

                   <a  id="cancelar" class="btn btn-danger" type="button">Cancelar</a>

                 </div>

               </div>
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
</div>
</div>


<script type="text/javascript">


  var g = $("#gestortxt").val();
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"gestor/consultalinea/"+g
  }).done(function(respons) {
    $("#txtlinea").val(respons.nombre);
  });


  var l = $("#lineatxt").val();
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"proyecto/consultagestorl/"+l
  }).done(function(response) {
    $.each(response, function(i, item) {
      $("#txtgestor").append('<option value="'+item.documento+'">'+item.nombres+" "+item.apellidos+'</option>')
    });
    $("#txtgestor").val("<?= $datos['gestor'];?>");
  });


</script>

<script type="text/javascript">
  var docug = $("#txtdocumento").val();
  var ano = $("#txtano").val();
</script>
<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"proyecto/gestor/"+docug+"/"+ano+"#menu2";});</script>
<script type="text/javascript">
 $("#a").val("<?= $datos['actainicio'];?>");
 var a = $("#a").val();
 if (a == "Si") {
  $('#inicioacta').prop('checked',true);
}

$("#b").val("<?= $datos['propuesta'];?>");
var b = $("#b").val();
if (b == "Si") {
  $('#tecnicap').prop('checked',true);
}

$("#c").val("<?= $datos['bookplaneacion'];?>");
var c = $("#c").val();
if (c == "Si") {
  $('#bookp').prop('checked',true);
}

$("#d").val("<?= $datos['cronograma'];?>");
var d = $("#d").val();
if (d == "Si") {
  $('#crono').prop('checked',true);
}

$("#e").val("<?= $datos['bookejecucion'];?>");
var e = $("#e").val();
if (e == "Si") {
  $('#booke').prop('checked',true);
}

$("#f").val("<?= $datos['lecciones'];?>");
var f = $("#f").val();
if (f == "Si") {
  $('#lec').prop('checked',true);
}

$("#g").val("<?= $datos['ficha'];?>");
var g = $("#g").val();
if (g == "Si") {
  $('#fi').prop('checked',true);
}

$("#h").val("<?= $datos['video'];?>");
var h = $("#h").val();
if (h == "Si") {
  $('#vidio').prop('checked',true);
}

$("#i").val("<?= $datos['actacierre'];?>");
var i = $("#i").val();
if (i == "Si") {
  $('#cierreacta').prop('checked',true);
}
$("#j").val("<?= $datos['manualuso'];?>");
var i = $("#i").val();
if (i == "Si") {
  $('#manualuso').prop('checked',true);
}
$("#k").val("<?= $datos['avalgrupo'];?>");
var i = $("#i").val();
if (i == "Si") {
  $('#avalgrupo').prop('checked',true);
}

$('#modificar').on('click',function(e){
 e.preventDefault();
 var form = $(this).parents('form');

 if ($("#txtlink").val()) {


   if ($('#inicioacta').prop('checked') == true) {
    $("#campoactainicio").val("Si");
  }else{
    $("#campoactainicio").val("No");
  }

   if ($('#avalgrupo').prop('checked') == true) {
    $("#campoavalgrupo").val("Si");
  }else{
    $("#campoavalgrupo").val("No");
  }
   if ($('#manualuso').prop('checked') == true) {
    $("#campomanualuso").val("Si");
  }else{
    $("#campomanualuso").val("No");
  }

  if ($('#tecnicap').prop('checked') == true) {
    $("#campopropuesta").val("Si");
  }else{
    $("#campopropuesta").val("No");
  }
  if ($('#bookp').prop('checked') == true) {
    $("#campobookp").val("Si");
  }else{
    $("#campobookp").val("No");
  }
  if ($('#crono').prop('checked') == true) {
    $("#campocrono").val("Si");
  }else{
    $("#campocrono").val("No");
  }

  if ($('#booke').prop('checked') == true) {
    $("#campobooke").val("Si");
  }else{
    $("#campobooke").val("No");
  }
  if ($('#lec').prop('checked') == true) {
    $("#campolecciones").val("Si");
  }else{
    $("#campolecciones").val("No");
  }
  if ($('#fi').prop('checked') == true) {
    $("#campoficha").val("Si");
  }else{
    $("#campoficha").val("No");
  }
  if ($('#vidio').prop('checked') == true) {
    $("#campovideo").val("Si");
  }else{
    $("#campovideo").val("No");
  }
  if ($('#cierreacta').prop('checked') == true) {
    $("#campoacta").val("Si");
  }else{
    $("#campoacta").val("No");
  }

  swal({
    title: "¿Desea modificar el registro?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#57D9D2",
    confirmButtonText: "Si",
    closeOnConfirm: false


  },
  function(isConfirm){

   if (isConfirm) {


    setTimeout(function(){

      form.submit();

    },1500 );
    swal("Modificado", "El registro ha sido modificado correctamente", "success");

  }

});
}

});

if ("<?= $datos['revisadofinal'];?>" == "Por evaluar") {
  $('#txtrevisadoa').prop('checked',true);
}

if ("<?= $datos['revisadofinal'];?>" == "Aprobado") {
  $('#txtrevisadob').prop('checked',true);
}

if ("<?= $datos['revisadofinal'];?>" == "No aprobado") {
  $('#txtrevisadoc').prop('checked',true);
}

</script>
