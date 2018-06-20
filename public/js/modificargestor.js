 var c = $("#txtcorreo").val();
 $.ajax({
      dataType:'json',  
      type:'post',
      url:uri+"cuentas/cambio/"+c
    }).done(function(response) {

    $("#idc").val(response.idcuentas);

    });


    function validac(){
    var d = $("#txtcorreo").val();
     var dc = $("#docutxt").val();
    console.log(d);
 $.ajax({
   dataType:'json',
   type:'post',
   url:uri+"gestor/vergc/"+d
}).done(function(respuesta){

  if (respuesta.correo == d && respuesta.documento != dc) {
   document.getElementById("txtcorreo").focus();
   swal("Ups!!", "El correo ingresado ya existe", "warning");
      $("#txtcorreo").val("");
  }
});
}


$('#modificar').on('click',function(e){
   e.preventDefault();
   var form = $(this).parents('form');
   var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
   var email = document.getElementById("txtcorreo").value; 
    if ($("#txtnombres").val() && 
    $("#txtapellidos").val() && 
    $("#txtcorreo").val() && 
    $("#txtsalario").val() 

     ) 
       if (caract.test(email) == true){


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
 }


 });