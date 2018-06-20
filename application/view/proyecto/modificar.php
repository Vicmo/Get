<body style="background: #238276">
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
                <h2><small>Los elementos con (*) son obligatorios</small> </h2>
                <br>


                <div class="clearfix" ></div>
                
                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                  action="<?= URL?>proyecto/modificar"  method="POST">

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
                  <input value="<?= $datos['cedulalider'];?>"  id="liderr" type="hidden">
                  <input value="<?= $datos['fechacierre'];?>"  id="txtfechacierre" type="hidden">
                  <input value="<?= $datos['idproyecto'];?>"  name="txtidproyecto"  id="txtidproyecto" type="hidden">
                  <input value="<?= $datos['id'];?>"  name="idproyectotxt"  id="txtidproyecto" type="hidden">
                  <input value="<?= $datos['gestor'];?>"  name="gestortxt"  id="txtidproyecto" type="hidden">
                  <input value="<?php echo "$documento";?>" id="txtdocumento" type="hidden">
                  <input value="<?php echo date("Y"); ?>" id="txtano" type="hidden">




                  <div class="item form-group">

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

                        <div class="item form-group">

                          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                          </label>

                          <div class="col-md-3 col-sm-3 col-xs-3">
                           <input name="txtnombre" value="<?= $datos['nombre'];?>" onkeypress="return validas(event)" id="txtnombre" required class="form-control col-md-7 col-xs-12">

                         </div>
                       </div>
                     </div>


                     
                     <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Fecha de Creación<span class="required">*</span>
                     </label>  
                     <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">
                          <input type="text" value="<?= $datos['fechacreacion'];?>" name="fecha_crea" class="form-control has-feedback-left" id="single_cal3">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                      </div>
                    </div>


                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Talento Lider<span class="required">*</span>
                    </label>

                    <div class="col-md-3 col-sm-3 col-xs-3">

                      <select id="txtcedulalider" class="form-control" name="txtcedulalider" >
                      </select>
                    </div>
                  </div>
                </div>

                <hr>
                <h2><small>Para registrar los talentos dar click en el boton <b style="font-size:20px">  '+'</b></small></h2>
                <br>
                <br>
                <br>
                <div class="item form-group">
                  <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Talentos<span class="required"></span>
                   </label>

                   <div class="col-md-3 col-sm-3 col-xs-3">

                    <select id="txttalento" class="form-control" name="txttalento" onchange="unico()">
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
          </div>

          <div class="item form-group">
            <div class="item form-group">
              <label class="control-label col-md-2 col-sm-3 col-xs-3" >Gestor<span class="required">*</span>
              </label>


              <div class="col-md-3 col-sm-3 col-xs-3">
                <select id="txtgestor" class="form-control" name="txtgestor" required disabled="" onchange="labo()">
                 <option value="">Seleccione</option>
                 <?php foreach ($gestor as $key => $value): ?>
                   <option value="<?= $value['documento'] ?>"><?=$value['nombres']," ", $value['apellidos'] ?></option>
                 <?php endforeach; ?>
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

             <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Foco<span class="required">*</span>
             </label>

             <div class="col-md-3 col-sm-3 col-xs-3">
              <select id="txtfoco" class="form-control" name="txtfoco" required disabled="">
               
              </select>
            </div>

            <div class="item form-group">
              <div class="item form-group"> 
               <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Sector<span class="required">*</span>
               </label>

               <div class="col-md-3 col-sm-3 col-xs-3">

                <select id="txtsector" class="form-control" name="txtsector" required>
                 
                 <?php foreach ($sector as $key => $value): ?>
                   <option value="<?= $value['idsector'] ?>"><?=$value['nombre'] ?></option>
                 <?php endforeach; ?>
               </select>
             </div>
           </div>
         </div>


         <div class="item form-group">
          <div class="item form-group">
           <label class="control-label col-md-2 col-sm-3 col-xs-3" >Nit<span class="required"></span>
           </label>
           <div class="col-md-3 ">
            <input  name="txtnit"  value="<?= $datos['nit'] ?>" id="" class="form-control col-md-7 col-xs-12">
          </div>


          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Razón Social<span class="required"></span>
          </label>
          <div class="col-md-3 col-sm-3 col-xs-3">
           <input  name="txtrazonsocial" value="<?= $datos['razonsocial'] ?>" id="txtrazon_social" class="form-control col-md-7 col-xs-12" >
         </div>

       </div> 
     </div>
     <div class="item form-group">
      <div class="item form-group">
       <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Tipo de proyecto<span class="required">*</span>
       </label>

       <div class="col-md-3 col-sm-3 col-xs-3">

        <select id="txttipoproyecto" class="form-control" name="txttipoproyecto" required>

         <?php foreach ($tipoproyecto as $key => $value): ?>
           <option value="<?= $value['idtipoproyecto'] ?>"><?=$value['nombre'] ?></option>
         <?php endforeach; ?>
       </select>
     </div>
     <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Estado del proyecto<span class="required">*</span>
     </label>

     <div class="col-md-3 col-sm-3 col-xs-3">

      <select id="txtestadoproyecto" class="form-control" name="txtestadoproyecto" required onchange="fecha()">
        
       <?php foreach ($estadopro as $key => $value): ?>
         <option value="<?= $value['idestadoproyecto'] ?>"><?=$value['nombre'] ?></option>
       <?php endforeach; ?>
     </select>
   </div>

 </div> 
</div>
<hr>
<div class="item form-group">
  <div class="item form-group">
    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Descripción del proyecto<span class="required">*</span>
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <textarea required name="txtdescripcion" maxlength="400"  id="txtdes" class="form-control" rows="5"><?= $datos['descripcion'];?></textarea>
    </div>
    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Observaciones<span class="required"></span>
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <textarea  name="txtobservaciones" maxlength="400"  id="txtddases" class="form-control" rows="5"><?= $datos['observaciones'];?></textarea>
    </div>
  </div>
</div>
</hr>
<hr>
<div class="item form-group">
  <div class="item form-group">
   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Proyecto articulado con Tecnoacademia<span class="required">*</span> </label> 
   <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> 
     No: <input type="radio" id="a1" class="flat" name="txtpro_art_tecnoaca" value="No" /> 
     Si: <input type="radio" id="a2" class="flat" name="txtpro_art_tecnoaca" id="s" value="Si" /> 

   </div>

   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Tiene aprendiz con apoyo de sostenimiento<span class="required">*</span> </label> 
   <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
    <input type="radio" id="b1" class="flat" name="txtapre_apoyo" value="No" /> Si: 
    <input type="radio" id="b2" class="flat" name="txtapre_apoyo" value="Si" />
  </div>
</div>

</div>
<div class="item form-group">
  <div class="item form-group">
    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Tiene aprendiz SIN apoyo de sostenimiento<span class="required">*</span> </label> 
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
      <input type="radio" id="c1" class="flat" name="txtapre_sinapoyo" value="No" /> Si: 
      <input type="radio" id="c2" class="flat" name="txtapre_sinapoyo" value="Si" />
    </div>

    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Articulado con CT+i<span class="required">*</span> </label> 
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
     <input type="radio" id="d1" class="flat" name="txtarti_cti" value="No" /> Si: 
     <input type="radio" id="d2" class="flat" name="txtarti_cti" value="Si" /> 
   </div>

 </div>
</div>
<div class="item form-group">
  <div class="item form-group">
   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre del actor CT+i<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
     <input type="radio" id="e1" class="flat" name="txtnom_act_cti" value="No" /> Si: 
     <input type="radio" id="e2" class="flat" name="txtnom_act_cti" value="Si" /> 
   </div>

   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Dirigido a área de emprendimiento SENA 
    <span class="required">*</span> </label> 
    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
      <input type="radio" id="f1" class="flat" name="txtdiri_ar_emp" value="No" /> Si: 
      <input type="radio" id="f2" class="flat" name="txtdiri_ar_emp" value="Si" /> 
    </div>
  </div>

  <div class="item form-group">
    <div class="item form-group">
     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Recibido a través del área de emprendimiento SENA<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
       <input type="radio" id="g1" class="flat" name="txtreci_ar_emp" value="No" /> Si: 
       <input type="radio" id="g2"  class="flat" name="txtreci_ar_emp" value="Si" /> 
     </div>

     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Dinero de regalías<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
      <input type="radio" id="h1" class="flat" name="txtdine_rega" value="No" /> Si: 
      <input type="radio" id="h2" class="flat" name="txtdine_rega" value="Si" /> 
    </div>
  </div>
</div>

<div class="item form-group">
  <div class="item form-group">
   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Acompañamiento proceso de patente<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
     <input type="radio" id="i1" class="flat" name="txtaco_pro_pate" value="No" /> Si: 
     <input type="radio" id="i2" class="flat" name="txtaco_pro_pate" value="Si" /> 
   </div>

   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Patente publicada<span class="required">*</span> </label> <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px"> No: 
    <input type="radio" id="j1" class="flat" name="txtpata_publi" value="No" /> Si: 
    <input type="radio" id="j2" class="flat" name="txtpata_publi" value="Si" /> 
  </div>
</div>
</div>

<div class="item form-group">
  <div class="item form-group">
    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">ID patente<span class="required"></span>
    </label>

    <div class="col-md-3 col-sm-3 col-xs-3">
     <input name="txtidpatente"  value="<?= $datos['id_pate'];?>" id="txtnombre"  class="form-control col-md-7 col-xs-12">
   </div>

   <div id="divfecha" style="visibility: hidden;">
     <label   id="labelfecha" class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Fecha de Cierre<span class="required">*</span>
     </label>  
     <div  class="control-group">
      <div class="controls">
        <div class="col-md-3 ">
          <input type="text"  name="fechacierre" class="form-control has-feedback-left" id="single_cal4">
          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
    </div>
  </div>
  


  

</div>


</div>




</hr>

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

<script type="text/javascript"> $('#txttalento').select2();</script>
<script type="text/javascript">
  $("#txtgestor").val("<?= $datos['gestor'];?>");
  $("#txtsector").val("<?= $datos['sector'];?>");
  $("#txtestadoproyecto").val("<?= $datos['estpr'];?>");
  $("#txttipoproyecto").val("<?= $datos['tpr'];?>");

  function  limpiarl(){
    document.getElementById("txtfoco").options.length = 0;

  }
  var g = $("#txtgestor").val();
  $.ajax({
    dataType:'json',  
    type:'post',
    url:uri+"gestor/consultalinea/"+g
  }).done(function(respons) {
    $("#txtlinea").val(respons.nombre);
    $("#txtlineaa").val(respons.id);
    var id = respons.id;

    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"proyecto/consultafocoo/"+id
    }).done(function(respon) {
      limpiarl()
      $.each(respon, function(i, item) {
        $("#txtfoco").append('<option value="'+item.idfoco+'">'+item.nombre+'</option>')
      });
      $("#txtfoco").val("<?= $datos['idfoco'];?>");
    });

  });
  $("#txtfoco").prop("disabled", false);


  $("#a").val("<?= $datos['pro_art_tecnoaca'];?>");
  var a = $("#a").val();
  if (a == "No") {
    $('#a1').prop('checked',true);
  }else{
    $('#a2').prop('checked',true);
  }

  $("#b").val("<?= $datos['apre_apoyo'];?>");
  var b = $("#b").val();
  if (b == "No") {
    $('#b1').prop('checked',true);
  }else{
    $('#b2').prop('checked',true);
  }

  $("#c").val("<?= $datos['apre_sinapoyo'];?>");
  var c = $("#c").val();
  if (c == "No") {
    $('#c1').prop('checked',true);
  }else{
    $('#c2').prop('checked',true);
  }

  $("#d").val("<?= $datos['arti_cti'];?>");
  var d = $("#d").val();
  if (d == "No") {
    $('#d1').prop('checked',true);
  }else{
    $('#d2').prop('checked',true);
  }

  $("#e").val("<?= $datos['nom_act_cti'];?>");
  var e = $("#e").val();
  if (e == "No") {
    $('#e1').prop('checked',true);
  }else{
    $('#e2').prop('checked',true);
  }

  $("#f").val("<?= $datos['diri_ar_emp'];?>");
  var f = $("#f").val();
  if (f == "No") {
    $('#f1').prop('checked',true);
  }else{
    $('#f2').prop('checked',true);
  }

  $("#g").val("<?= $datos['reci_ar_emp'];?>");
  var g = $("#g").val();
  if (g == "No") {
    $('#g1').prop('checked',true);
  }else{
    $('#g2').prop('checked',true);
  }

  $("#h").val("<?= $datos['dine_rega'];?>");
  var h = $("#h").val();
  if (h == "No") {
    $('#h1').prop('checked',true);
  }else{
    $('#h2').prop('checked',true);
  }



  $("#i").val("<?= $datos['aco_pro_pate'];?>");
  var i = $("#i").val();
  if (i == "No") {
    $('#i1').prop('checked',true);
  }else{
    $('#i2').prop('checked',true);
  }

  $("#j").val("<?= $datos['pata_publi'];?>");
  var j = $("#j").val();
  if (j == "No") {
    $('#j1').prop('checked',true);
  }else{
    $('#j2').prop('checked',true);
  }

  function fecha(){
    var e = $("#txtestadoproyecto").val();
    if (e == 4 || e == 5 || e == 6 || e == 7) {
      document.getElementById("divfecha").style.visibility="visible"; 
      document.getElementById('single_cal4').disabled = false;
      
    }

    if (e == 1 || e == 2 || e == 3) {
      document.getElementById("divfecha").style.visibility="hidden"; 
      document.getElementById('single_cal4').disabled = true;
      
    }
  }

  var fc = $("#txtfechacierre").val();
  console.log(fc);
  if (fc != "0000-00-00") {
   document.getElementById("divfecha").style.visibility="visible"; 
   $("#single_cal4").val(fc);
   document.getElementById('single_cal4').disabled = false;
   
 }
 
</script>

<script src="<?php echo URL; ?>js/modificarproyecto.js"></script>
<script type="text/javascript">
  var docug = $("#txtdocumento").val();
  var ano = $("#txtano").val();
</script>
<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"proyecto/gestor/"+docug+"/"+ano+"#menu2";});</script>