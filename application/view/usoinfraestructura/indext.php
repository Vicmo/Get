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

              <div class="tab-content" >
                <div id="home" class="tab-pane fade in active">
                  <br>
                  <h2><small>Los elementos con (*) son obligatorios</small></h2>
                  <div class="clearfix" ></div>

                  <div class="x_content" >
                    <br />

                    <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                    action="<?= URL?>usoinfraestructura/registrart"  method="POST">


                    <input value="<?php echo "$documento";?>"  id="txtdocumento"  type="hidden">
                    <input value=""  id="txtdocumentoo" name="txtdocumentoo" type="hidden">
                    <input value=""  id="txtidlinea" type="hidden">
                    <input value=""  id="txtuso" name="txtuso" type="hidden">
                    
                    <div class="item form-group">

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-3" >Fecha<span class="required">*</span>
                        </label>  
                        <div class="control-group">
                          <div class="controls">
                            <div class="col-md-3 ">
                              <input name="txtfecha" class="form-control has-feedback-left"  id="single_cal3">
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




                  
                  <input name="txtad" onkeypress="return cero(event)" hidden id="txtad" >
                  

                  
                  <input name="txtai" onkeypress="return cero(event)" hidden id="txtai"  >
                  

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
                     <select id="txtlabo" class="form-control" name="txtlabo" disabled="" onchange="unicol()">
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

<script src="<?php echo URL; ?>js/usoinfraestructurat.js"></script>

<script type="text/javascript">
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
  
  function talentos(){
    var p = $("#txtproyecto").val();
    $("#txttalento").prop("disabled", false);
    $("#txtlabo").prop("disabled", false);
    $.ajax({
      dataType:'json',  
      type:'post',
      url:uri+"usoinfraestructura/consultaselect/"+p
    }).done(function(response) {
      limpiart()
      $.each(response, function(i, item) {
        $("#txttalento").append('<option value="'+item.talento+'">'+item.nombres+" "+item.apellidos+" / "+item.talento+'</option>')

      });

    });


    $.ajax({
      dataType:'json',  
      type:'post',
      url:uri+"gestor/consultauso/"+p
    }).done(function(respons) {
      $("#txtlinea").val(respons.linea);
      $("#txtfoco").val(respons.foco);
      var gestor = respons.nombres+" "+respons.apellidos;
      $("#txtgestor").val(gestor);
      $("#txtidlinea").val(respons.idlinea);
      var id = $("#txtidlinea").val();
      

      $.ajax({
        dataType:'json',  
        type:'post',
        url:uri+"gestor/consultauso/"+p
      }).done(function(respons) {
        $("#txtlinea").val(respons.linea);
        $("#txtfoco").val(respons.foco);
        var gestor = respons.nombres+" "+respons.apellidos;
        $("#txtgestor").val(gestor);
        $("#txtidlinea").val(respons.idlinea);
        $("#txtdocumentoo").val(respons.documento);
        var id = $("#txtidlinea").val();
        $.ajax({
          dataType:'json',  
          type:'post',
          url:uri+"usoinfraestructura/consultalabo/"+id
        }).done(function(respon) {
          limpiarl()
          $.each(respon, function(i, item) {
            $("#txtlabo").append('<option value="'+item.idlaboratorio+'">'+item.nombre+'</option>')

          });

        });
        
      });

    });
  }
</script>
