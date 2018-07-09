//########################## Inicio del botón modificar ##########################//
//------------------------ Muestra confirmación del formaluario para modificar el laboratorio ------------------------//
$('#modificar').on('click',function(e){
  e.preventDefault();
  var form = $(this).parents('form');

   if ($("#txtnombre").val() &&
   $("#txtlinea").val() &&
   $("#txtparticipacion").val() )
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
     }
   });
  }
});
//########################## Fin del botón modificar ##########################//


//########################## Inicio del botón registrar ##########################//
//------------------------ Muestra confirmación del formaluario para registrar el laboratorio ------------------------//
$('#registrar').on('click',function(e){
  e.preventDefault();
  var form = $(this).parents('form');
   if ($("#txtnombre").val() &&
   $("#txtlinea").val() &&
   $("#txtparticipacioncostos").val() )
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
//########################## Fin del botón registrar ##########################//
