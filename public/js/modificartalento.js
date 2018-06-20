var c = $("#txtcorreo").val();
$.ajax({
  dataType:'json',  
  type:'post',
  url:uri+"cuentas/cambio/"+c
}).done(function(response) {

  $("#idc").val(response.idcuentas);

});


$('#modificar').on('click',function(e){
  e.preventDefault();
  var form = $(this).parents('form');
  var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
  var d = document.getElementById("txtnum_cel").value;
  var email = document.getElementById("txtcorreo").value;

  if ($("#txttipodocumento").val() && $("#txtdocumeto").val() && $("#txtnombre").val() && $("#txtapellidos").val()
    && $("#txtcorreo").val() && $("#txttipotalento").val() && $("#txtocupacion").val() && $("#txtnum_cel").val() && $("#txtciudad").val()
    && $("#txtestrato").val() && $("#txtinstucion").val() && $("#txtnivel_aca").val() && $("#txttitu_obte").val() 
    && $("#txtaño_termi").val()) {

    if(d.length == 10){

      if (caract.test(email) == true){

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

   }
 }

});

  function validac(){
    
     var c = $("#txtcorreo").val();
     var d = $("#txtdocumeto").val();
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"talento/correo/"+c
}).done(function(respuesta){
   if (respuesta.correo == c && respuesta.documento != d) {
    document.getElementById("txtcorreo").focus();
    swal("Ups!!", "El correo ingresado ya existe", "warning");
       $("#txtcorreo").val("");
   }
});
}