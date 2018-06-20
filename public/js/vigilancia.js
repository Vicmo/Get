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

    }else{
    }

  });
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
   $("#txtdes").val()
      && 
   $("#txthoras").val() ) 
 

   {
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

    }else{
    }

  });
  }

}

});

