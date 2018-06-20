  function validarclave () {

                  var correo = $("#txtcorreo").val();
                  var clave = $("#txtclaveactual").val();
                  $.ajax({
                    dataType:'json',  
                    type:'post',
                    url:uri+"cuentas/cambio/"+correo
                  }).done(function(response) {
                    cla = md5(clave);
                    if (response.clave != cla) {
                     document.getElementById("txtclaveactual").focus();
                     swal("Ups!!", "La clave actual es incorrecta", "warning");
                     $("#txtclaveactual").val("");
                   }

                 });

                }


                 $('#modificarclave').on('click',function(e){
    e.preventDefault();
    var form = $(this).parents('form');
     var a = $("#clave1").val();
      var b = $("#txtclavenuevaa").val();

 if (a == b) {
      
      if ($("#txtclaveactual").val() && $("#clave1").val() && $("#txtclavenuevaa").val() ) {
        
  swal({
  title: "¿Desea modificar su clave?",
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
        swal("Modificada", "Su clave ha sido modificada correctamente", "success");
     }else{



     }

   });

      }

    }

      else {  
         
      }

  });