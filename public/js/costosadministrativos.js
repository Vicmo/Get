  $('#modificar').on('click',function(e){
    e.preventDefault();
    var form = $(this).parents('form');

    if ($("#txtvalor").val()) {

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