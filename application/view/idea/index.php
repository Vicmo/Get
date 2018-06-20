<link href="<?php echo URL; ?>css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/vendors/nprogress/nprogress.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/alertas/dist/sweetalert.css">
<link href="<?php echo URL; ?>css/build/css/custom.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/datatable/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/datatable/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/datatable/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/datatable/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/datatable/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/calendario/daterangepicker.css" rel="stylesheet">
<link href="<?php echo URL; ?>css/select/css.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>img/web.jpg">
<body style="background: #ededed">
  <title>Tecnoparque  | Idea</title>
  <div class="right_col" role="main" style="background: #ededed">



    <div class="clearfix"></div>


    <div class="x_panel"  >
      <div class="x_title">


        <div class="col-md-12">
          <div class="col-md-6">
            <h3 >Datos del contacto</h3>
          </div>
          <div class="col-md-6">

            <h1 ><a href="<?php echo URL; ?>home"  style=" margin-left: 80%"> Volver</a><h1>

            </div>
          </div>
          <br>

          <h2><small>Los elementos con (*) son obligatorios</small></h2>

          <div class="clearfix" ></div>

          <div class="x_content" >
            <br />

       <form name="idea" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
            action="<?= URL?>idea/registrar"  method="POST">

<?php

$fecha = date("Y/m/d"); //formato solo fecha
 ?>

            <input type="hidden" value="<?php echo $fecha ?>" name="txtfecha">

            <div class="item form-group">
             <div class="item form-group">
               <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombres <span class="required">*</span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                 <input required name="txtnombres" id="txtnombres" class="form-control col-md-7 col-xs-12" >
               </div>

               <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Apellidos<span class="required">*</span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                 <input required name="txtapellidos" id="txtapellidos" class="form-control col-md-7 col-xs-12" >
               </div>
             </div>
           </div>

           <div class="item form-group">
             <div class="item form-group">
               <label class="control-label col-md-2 col-sm-5 col-xs-12" for="email">Correo Electrónico<span class="required">*</span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                 <input  onchange="validac()" type="email" required="" name="txtcorreo" id="txtcorreo" class="form-control col-md-7 col-xs-12" >
               </div>


               <label class="control-label col-md-2 col-sm-5 col-xs-12" for="email">Teléfono Fijo<span class="required">*</span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                 <input required name="txttelefono" id="txttelefono" class="form-control col-md-7 col-xs-12" >
               </div>
             </div>
           </div>

           <div class="item form-group">
            <div class="item form-group">
             <label class="control-label col-md-2 col-sm-5 col-xs-12" for="email">Escriba a continuación el nombre de su proyecto o propuesta<span class="required">*</span>
             </label>
             <div class="col-md-3 col-sm-3 col-xs-3">
               <input required name="txtnombreproyecto" id="txtnombreproyecto" class="form-control col-md-7 col-xs-12" >
             </div>



             <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Es Aprendiz SENA?<span class="required">*</span>
             </label>

             <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px ; color: black" >

              Si: <input type="radio" class="flat" id="txtaprendizsena1" name="txtaprendizsena"  value="Si" />
              No: <input  type="radio" class="flat" id="txtaprendizsena2" name="txtaprendizsena" value="No" />
            </div>
          </div>
        </div>
        <br>


        <hr>
        <h3>Preguntas de clasificación</h3>
        <h2><small>Por favor lea detenidamente las opciones de repuesta y elija la que más se asemeje a su situación actual.
        Al finalizar por favor haga clic sobre el botón de "Registrar" para enviar sus respuestas a nuestra base de datos.</small></h2>

        <br>
        <div class="item form-group">
          <div class="item form-group">
            <br>
            <br>
            <label class="col-md-5 col-sm-5 col-xs-12" for="email">¿En qué estado se encuentra su propuesta?<span class="required">*</span>
            </label>
            <br>
            <br>

            <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1"  id="txtpregunta1A" value="Tengo el problema identificado, pero no tengo claro que producto debo desarrollar para resolverlo"  />
             1. Tengo el problema identificado, pero no tengo claro que producto debo desarrollar para resolverlo.
           </div>
           <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1" id="txtpregunta1B"  value="Tengo la idea del producto que quiero desarrollar pero no sé cómo hacerlo"  />
             2. Tengo la idea del producto que quiero desarrollar pero no sé cómo hacerlo.
           </div>
           <br>
           <br>

           <br>

           <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1" id="txtpregunta1C" value="Tengo la idea del producto que quiero desarrollar, tengo los conocimientos para hacerlo, pero no se qué pasos seguir para formular el proyecto"  />
             3. Tengo la idea del producto que quiero desarrollar, tengo los conocimientos para hacerlo, pero no se qué pasos seguir para formular el proyecto.
           </div>
           <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1" id="txtpregunta1D" value="Tengo formulado el proyecto para desarrollar mi producto: tengo claros los objetivos, el alcance, los recursos y las actividades que debo realizar para conseguirlo, entre otros"  />
             4. Tengo formulado el proyecto para desarrollar mi producto: tengo claros los objetivos, el alcance, los recursos y las actividades que debo realizar para conseguirlo, entre otros.
           </div>
           <br>
           <br>
           <br>
           <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1"  id="txtpregunta1E" value="Mi proyecto está formulado y ya comencé la ejecución, pero necesito gestionar algunos recursos para poder avanzar"  />
             5. Mi proyecto está formulado y ya comencé la ejecución, pero necesito gestionar algunos recursos para poder avanzar.
           </div>
           <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1" id="txtpregunta1F" value="Ya tengo un prototipo avanzado de mi producto y requiero gestionar algunos recursos para concluir mi proyecto"  />
             6. Ya tengo un prototipo avanzado de mi producto y requiero gestionar algunos recursos para concluir mi proyecto.
           </div>
           <br>
           <br>
           <br>
           <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1" id="txtpregunta1G" value="Ya tengo un prototipo final, he realizado pruebas y ajustes, tengo planteada la idea de negocio y requiero gestionar algunos recursos para implementarla"  />
             7. Ya tengo un prototipo final, he realizado pruebas y ajustes, tengo planteada la idea de negocio y requiero gestionar algunos recursos para implementarla.
           </div>
           <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1" id="txtpregunta1H" value="No voy a desarrollar un producto, voy a comercializar un producto de otro fabricante"  />
             8. No voy a desarrollar un producto, voy a comercializar un producto de otro fabricante.
           </div>
           <br>
           <br>
           <br>
           <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

             <input type="radio" class="flat" name="txtpregunta1" id="txtpregunta1I" value="Quiero desarrollar una página web para promocionar mi negocio actual"  />
             9. Quiero desarrollar una página web para promocionar mi negocio actual.
           </div>

         </div>
       </div>
       <br>
       <br>

     </hr>
     <hr>





     <div class="item form-group">
      <div class="item form-group">

        <label class="col-md-5 col-sm-5 col-xs-12" for="email">¿Cómo está conformado su equipo de trabajo? <span class="required">*</span>
        </label>
        <br>
        <br>
        <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

         <input type="radio" class="flat" id="txtpregunta2A" name="txtpregunta2"  value="No tengo equipo de trabajo, yo solo me encargaré de desarrollar el producto" />
         1. No tengo equipo de trabajo, yo solo me encargaré de desarrollar el producto.
       </div>

       <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

         <input type="radio" class="flat" name="txtpregunta2"  id="txtpregunta2B" value="Tengo un equipo de trabajo que cuenta con los conocimientos técnicos mínimos para el desarrollo del producto, pero no contamos con los conocimientos de mercadeo para la implementación de la idea de negocio"  />
         2. Tengo un equipo de trabajo que cuenta con los conocimientos técnicos mínimos para el desarrollo del producto, pero no contamos con los conocimientos de mercadeo para la implementación de la idea de negocio.
       </div>
       <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">
        <br>

        <input type="radio" class="flat" name="txtpregunta2" id="txtpregunta2C" value="Tengo un equipo de trabajo que cuenta con los conocimientos de mercadeo mínimos para la implementación de la idea de negocio, pero no contamos con los conocimientos técnicos para desarrollar el producto"  />
        3. Tengo un equipo de trabajo que cuenta con los conocimientos de mercadeo mínimos para la implementación de la idea de negocio, pero no contamos con los conocimientos técnicos para desarrollar el producto.
      </div>

      <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">
        <br>

        <input type="radio" class="flat" name="txtpregunta2" id="txtpregunta2D" value="Tengo un equipo de trabajo que cuenta con los conocimientos técnicos mínimos para el desarrollo del producto, pero no contamos con los conocimientos de mercadeo para la implementación de la idea de negocio" />
        4. Tengo un equipo de trabajo multidisciplinar, que cuenta con los conocimientos técnicos, conocimientos de gestión y conocimientos de mercadeo necesarios para el desarrollo del producto y la implementación de la idea de negocio.
      </div>
    </div>
  </div>

</hr>
<hr>
<div class="item form-group">
  <div class="item form-group">
    <label class="col-md-5 col-sm-5 col-xs-12" for="email">Marque en cuál de las siguientes categorías clasificaría su propuesta<span class="required">*</span>
    </label>
    <br>
    <br>
    <br>

    <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

     <input type="radio" class="flat" name="txtpregunta3" id="txtpregunta3A" value="Tecnologías virtuales: desarrollo de software para diferentes dispositivos, animaciones 2D y 3D, creación de contenidos para aplicaciones, animaciones y videojuegos"  />
     1. Tecnologías Virtuales: desarrollo de software para diferentes dispositivos, animaciones 2D y 3D, creación de contenidos para aplicaciones, animaciones y videojuegos.
   </div>
   <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

     <input type="radio" class="flat" name="txtpregunta3"  id="txtpregunta3B" value="Biotecnología: utilización de organismos vivos o sus derivados para el desarrollo de productos y/o procesos en las áreas de ambiente, alimentos y nanotecnología"  />
     2. Biotecnología: utilización de organismos vivos o sus derivados para el desarrollo de productos y/o procesos en las áreas de ambiente, alimentos y nanotecnología.
   </div>
   <br>
   <br>

   <br>

   <div class=" col-md-6 col-sm-9 col-xs-12"  style="margin-top: 7px ; color: black">

     <input type="radio" class="flat" name="txtpregunta3" id="txtpregunta3C" value="Si"  />
     3. Electrónica y Telecomunicaciones: Control de procesos, telecomunicaciones, automatización, robótica aplicada, sistemas embebidos, prototipado electrónico y televisión digital.
   </div>
   <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

     <input type="radio" class="flat" name="txtpregunta3" id="txtpregunta3D" value="Ingeniería y Diseño: diseño de productos en las áreas afines a la mecánica y el diseño industrial, como aprovechamiento de energías renovables, máquinas,mobiliario, consumo masivo y empaques"  />
     4. Ingeniería y Diseño: diseño de productos en las áreas afines a la mecánica y el diseño industrial, como aprovechamiento de energías renovables, máquinas,mobiliario, consumo masivo y empaques.
   </div>
   <br>
   <br>
   <br>
   <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

     <input type="radio" class="flat" name="txtpregunta3" id="txtpregunta3N" value="Nanotecnología y nuevos materiales: Modificación de superficies a escala nanométrica, síntesis de nanopartículas, evaluación a escala nanométrica, desarrollo y evaluación de nuevos materiales como materiales compuestos, materiales biodegradables y biopolímeros obtenidos a través de biotecnología"  />
     5. Nanotecnología y nuevos materiales: Modificación de superficies a escala nanométrica, síntesis de nanopartículas, evaluación a escala nanométrica, desarrollo y evaluación de nuevos materiales como materiales compuestos, materiales biodegradables y biopolímeros obtenidos a través de biotecnología.
   </div>
   <div class=" col-md-6 col-sm-9 col-xs-12" style="margin-top: 7px ; color: black">

     <input type="radio" class="flat" name="txtpregunta3" id="txtpregunta3E" value="Otros Productos: personalización de productos, productos de moda, alimentos no tradicionales o exóticos, productos artesanales, construcción de infraestructura"  />
     6. Otros Productos: personalización de productos, productos de moda, alimentos no tradicionales o exóticos, productos artesanales, construcción de infraestructura.
   </div>
 </div>
</div>
</hr>

<br>
<br>
<hr>
<div class="item form-group">
 <div class="item form-group">
   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Descripción del proyecto <span class="required">*</span>
   </label>
   <div class="col-md-3 col-sm-3 col-xs-3">
     <textarea required rows="6" maxlength="200" name="txtdescripcion" id="txtdescripcion" class="form-control col-md-7 col-xs-12" ></textarea>
   </div>

   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Objetivo General del proyecto
     <span class="required">*</span>
   </label>
   <div class="col-md-3 col-sm-3 col-xs-3">
     <textarea  required rows="6"  name="txtobjetivo" id="txtobjetivo" class="form-control col-md-7 col-xs-12" > </textarea>
   </div>
 </div>
</div>
<br>

<div class="item form-group">
 <div class="item form-group">
   <label class="control-label col-md-4 col-sm-3 col-xs-12" for="email">Alcance del Proyecto <span class="required">*</span>
   </label>
   <div  class="col-md-5 col-sm-3 col-xs-12">
     <textarea required rows="6" name="txtalcance" id="txtalcance" class="form-control col-md-7 col-xs-12" ></textarea>
   </div>
 </div>
</div>


</hr>

<div class="form-group">
 <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
 </div>

</form>

</div>


</div>
</div>




</div>

</body>





<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/fastclick/lib/fastclick.js"></script>
<script src="<?php echo URL; ?>css/vendors/nprogress/nprogress.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/iCheck/icheck.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/switchery/dist/switchery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/parsley.js"></script>
<script src="<?php echo URL; ?>css/alertas/dist/sweetalert-dev.js"></script>
<script src="<?php echo URL; ?>css/build/js/custom.min.js"></script>
<script src="<?php echo URL; ?>js/tabla.min.js"></script>
<script src="<?php echo URL; ?>js/campos.js"></script>
<!-- <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script> -->
<script src="<?php echo URL; ?>css/datatable/tabla2.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-buttons/js/buttons.html5.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo URL; ?>css/datatable/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo URL; ?>js/md5.min.js"></script>
<script src="<?php echo URL; ?>css/calendario/moment.js"></script>
<script src="<?php echo URL; ?>css/calendario/daterangepicker.js"></script>
<script src="<?php echo URL; ?>css/select/js.js"></script>


<script>var uri = "<?php echo URL; ?>";</script>
<!-- <script src="<?php echo URL; ?>js/idea.js"></script> -->



<script type="text/javascript">
  $('#registrar').on('click',function(e){

    e.preventDefault();
    var x = 0;
    var form = $(this).parents('form');
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    var email = document.getElementById("txtcorreo").value;

    if ($("#txtnombres").val() &&
      $("#txtapellidos").val() &&
      $("#txtcorreo").val() &&
      $("#txttelefono").val()&&
      $("#txtnombreproyecto").val() &&
      $("#txtdescripcion").val()&&
      $("#txtobjetivo").val() &&
      $("#txtalcance").val()
      ) {



      if (caract.test(email) == true){


        if ( $('#txtaprendizsena1').prop('checked') || $('#txtaprendizsena2').prop('checked') ) {



          if ($('#txtpregunta1A').prop('checked') || $('#txtpregunta1B').prop('checked')||
            $('#txtpregunta1C').prop('checked') || $('#txtpregunta1D').prop('checked')||
            $('#txtpregunta1E').prop('checked') || $('#txtpregunta1F').prop('checked')||
            $('#txtpregunta1G').prop('checked') || $('#txtpregunta1H').prop('checked')||
            $('#txtpregunta1I').prop('checked')) {



            if ($('#txtpregunta2A').prop('checked') || $('#txtpregunta2B').prop('checked')||
             $('#txtpregunta2C').prop('checked') || $('#txtpregunta2D').prop('checked')) {

             if ($('#txtpregunta3A').prop('checked') || $('#txtpregunta3B').prop('checked')||
              $('#txtpregunta3C').prop('checked') || $('#txtpregunta3D').prop('checked')||
              $('#txtpregunta3E').prop('checked') || $('#txtpregunta3N').prop('checked') ) {

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

                  form.submit();

                },1500 );
                swal("Registrado", "El registro ha sido guardado correctamente", "success");

              }

            });

           }  else{
             swal("Ups!!", "Debe responder todas las preguntas", "warning");

           }

         }  else{
           swal("Ups!!", "Debe responder todas las preguntas", "warning");

         }





       }  else{
         swal("Ups!!", "Debe responder todas las preguntas", "warning");

       }


     }else{
       swal("Ups!!", "Debe responder todas las preguntas", "warning");

     }



   }

 }

});


  function validac(){
   var d = $("#txtcorreo").val();
   console.log(d);
   $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"idea/veric/"+d
  }).done(function(respuesta){

   if (respuesta.correo == d)
   {

    document.getElementById("txtcorreo").focus();
    swal("Ups!!", "El correo ingresado ya existe", "warning");
    $("#txtcorreo").val("");
  }
});
}




</script>
