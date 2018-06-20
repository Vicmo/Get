function ver(documento){
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"talento/ver/"+documento
}).done(function(respuesta){
    $("#tablad").empty();
    $("#tablad").append("<tr><td>"+'<b>Tipo documento: </b>'+respuesta.tipodocumento+"<tr><td> " + 
       "<tr><td>"+'<b>Documento: </b>'+respuesta.documento+"<tr><td> " +
       "<tr><td>"+'<b>Nombres: </b>'+respuesta.nombres+"<tr><td> " +
       "<tr><td>"+'<b>Apellidos: </b>'+respuesta.apellidos+"<tr><td> " +
       "<tr><td>"+'<b>Fecha de nacimiento: </b>'+respuesta.fechanacimiento+"<tr><td> " +
       "<tr><td>"+'<b>Correo: </b>'+respuesta.correo+"<tr><td> " +
       "<tr><td>"+'<b>Genero: </b>'+respuesta.genero+"<tr><td> " +
       "<tr><td>"+'<b>Tipo de talento: </b>'+respuesta.tipotalento+"<tr><td> " +
       "<tr><td>"+'<b>Ocupación: </b>'+respuesta.ocupacion+"<tr><td> " +
       "<tr><td>"+'<b>Descripción Ocupación: </b>'+respuesta.des_ocu+"<tr><td> " +
       "<tr><td>"+'<b>Numero Celular: </b>'+respuesta.numerocelular+"<tr><td> " +
       "<tr><td>"+'<b>Numero Fijo: </b>'+respuesta.numerofijo+"<tr><td> " +
       "<tr><td>"+'<b>Ciudad: </b>'+respuesta.ciudad+"<tr><td> " +
       "<tr><td>"+'<b>Dirección: </b>'+respuesta.direccion+"<tr><td> " +
       "<tr><td>"+'<b>Estrato: </b>'+respuesta.estrato+"<tr><td> " +
       "<tr><td>"+'<b>Institución: </b>'+respuesta.institucion+"<tr><td>"+
       "<tr><td>"+'<b>Nivel Académico: </b>'+respuesta.nivelacademico+"<tr><td> " +
       "<tr><td>"+'<b>Título Obtenido: </b>'+respuesta.titulobtenido+"<tr><td> " +
       "<tr><td>"+'<b>Año Terminación: </b>'+respuesta.anoterminacion+"<tr><td>");
    $("#ver").modal();

});
}

$('#registrar').on('click',function(e){
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


         }

     }
 }

});

  function validad(){
     var d = $("#txtdocumeto").val();
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"talento/ver/"+d
}).done(function(respuesta){
   if (respuesta.documento == d) {
    document.getElementById("txtdocumeto").focus();
    swal("Ups!!", "El documento ingresado ya existe", "warning");
       $("#txtdocumeto").val("");
   }
});
}

  function validac(){
     var c = $("#txtcorreo").val();
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"talento/correo/"+c
}).done(function(respuesta){
   if (respuesta.correo == c) {
    document.getElementById("txtcorreo").focus();
    swal("Ups!!", "El correo ingresado ya existe", "warning");
       $("#txtcorreo").val("");
   }
});
}