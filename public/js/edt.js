$('#registrar').on('click',function(e){
  e.preventDefault();
  var form = $(this).parents('form');
     var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    var email = document.getElementById("txtcorreo").value;

   if ($("#txtnombre").val() &&
   $("#txtempresa").val() && 
   $("#txtcontacto").val()
   && 
   $("#txtcorreo").val()
   && 
   $("#txttelefono").val()
   && 
   $("#txtdes").val() ) 
 

   {
 if (caract.test(email) == true){

  if ($("#txtempleados").val() || $("#txtinstructores").val() || $("#txtaprendices").val() 
    || $("#txtpublico").val()) {

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
  }else{


 swal("Ups!!", "Debe registrar como mínimo un asistente", "warning");



  }
}

}


});


$('#modificar').on('click',function(e){
  e.preventDefault();
  var form = $(this).parents('form');
     var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    var email = document.getElementById("txtcorreo").value;

   if ($("#txtnombre").val() &&
   $("#txtempresa").val() && 
   $("#txtcontacto").val()
   && 
   $("#txtcorreo").val()
   && 
   $("#txttelefono").val()
   && 
   $("#txtdes").val() ) 
 

   {
 if (caract.test(email) == true){

  if ($("#txtempleados").val() || $("#txtinstructores").val() || $("#txtaprendices").val() 
    || $("#txtpublico").val()) {

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
  }else{


 swal("Ups!!", "Debe registrar como mínimo un asistente", "warning");



  }
}

}


});


function ver(id){
 $.ajax({
   dataType:'json',
   type:'post',
   url:uri+"edt/ver/"+id
}).done(function(respuesta){

  
  $("#tablaedt").empty();

  
   $("#tablaedt").append(
    "<tr><td>"+'<b>Fecha:</b>'+" "+respuesta.fecha +"<tr><td>"+
    "<tr><td>"+'<b>Nombre: </b>'+" "+respuesta.nombre +"<tr><td>" +
    "<tr><td>"+'<b>Empresa: </b>'+" "+respuesta.empresa+"<tr><td>"+ 
    "<tr><td>"+'<b>Contacto: </b>'+" "+respuesta.contacto +"<tr><td>"+
    "<tr><td>"+'<b>Correo: </b>'+" "+respuesta.correo +"<tr><td>"+
    "<tr><td>"+'<b>Telefono:</b>'+" "+respuesta.telefono +"<tr><td>"+
    "<tr><td>"+'<b>Observaciones: </b>'+" "+respuesta.observaciones +"<tr><td>"+
    "<tr><td>"+'<b>Asistentes</b>'+" <tr><td>"+
      "<tr><td>"+'<b>Empleados: </b>'+" "+respuesta.empleados +"<tr><td>"+
       "<tr><td>"+'<b>Instructores: </b>'+" "+respuesta.instructores +"<tr><td>"+
    "<tr><td>"+'<b>Aprendices:</b>'+" "+respuesta.aprendices+"<tr><td>"+
    "<tr><td>"+'<b>Publico: </b>'+" "+respuesta.publico +"<tr><td>"

 );
    $("#ver").modal();

});

}
