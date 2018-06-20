$('#registrar').on('click',function(e){
   e.preventDefault();
   var form = $(this).parents('form');
     var a = document.getElementById("txtano").value;


   if ($("#txtlaboratorio").val() == "") {
          swal("Ups!!", "Debe seleccionar un laboratorio", "warning");
   }else if ($("#txtlaboratorio").val() && 
      $("#txtequipo").val() &&
      $("#txtmarca").val() &&
      $("#txtreferencia").val() &&
      $("#txtcosto").val() &&
      $("#txtvidautil").val() &&
      $("#txtano").val() &&
    $("#txthorauso").val() &&
    (a.length == 4)) 
  

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

    }

  });

   }


    
 });


$('#modificar').on('click',function(e){
   e.preventDefault();
   var form = $(this).parents('form');
     var a = document.getElementById("txtano").value;


   if ($("#txtlaboratorio").val() == "") {
          swal("Ups!!", "Debe seleccionar un laboratorio", "warning");
   }else if ($("#txtlaboratorio").val() && 
      $("#txtequipo").val() &&
      $("#txtmarca").val() &&
      $("#txtreferencia").val() &&
      $("#txtcosto").val() &&
      $("#txtvidautil").val() &&
      $("#txtano").val() &&
    $("#txthorauso").val() &&
    (a.length == 4)) 
  

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
      swal("Registrado", "El registro ha sido guardado correctamente", "success");

    }

  });

   }


    
 });