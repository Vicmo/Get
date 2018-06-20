$('#registrar').on('click',function(e){
  e.preventDefault();
  var form = $(this).parents('form');

   if ($("#txtnombre").val() &&
   $("#txtinstitucion").val() && 
   $("#txtclasificacion").val()
   && 
   $("#txtipo").val()
   && 
   $("#txtdes").val() ) 
 

   {
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



});


$('#modificar').on('click',function(e){
  e.preventDefault();
  var form = $(this).parents('form');

   if ($("#txtnombre").val() &&
   $("#txtinstitucion").val() && 
   $("#txtclasificacion").val()
   && 
   $("#txtipo").val()
   && 
   $("#txtobservacion").val() ) 
 

   {
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



});