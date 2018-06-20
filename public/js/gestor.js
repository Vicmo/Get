

function validad(){
    var d = $("#txtdocumento").val();
 $.ajax({
   dataType:'json',
   type:'post',
   url:uri+"gestor/ver/"+d
}).done(function(respuesta){
  if (respuesta.documento == d) {
   document.getElementById("txtdocumento").focus();
   swal("Ups!!", "El documento ingresado ya existe", "warning");
      $("#txtdocumento").val("");
  }
});
}

function validac(){
    var d = $("#txtcorreo").val();
    console.log(d);
 $.ajax({
   dataType:'json',
   type:'post',
   url:uri+"gestor/vergc/"+d
}).done(function(respuesta){
  if (respuesta.correo == d) {
   document.getElementById("txtcorreo").focus();
   swal("Ups!!", "El correo ingresado ya existe", "warning");
      $("#txtcorreo").val("");
  }
});
}
$('#registrar').on('click',function(e){
   e.preventDefault();
   var form = $(this).parents('form');
   var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
   var email = document.getElementById("txtcorreo").value; 
    if ($("#txtdocumento").val() && 
    $("#txtnombres").val() && 
    $("#txtapellidos").val() && 
    $("#txtcorreo").val() && 
    $("#txtlinea").val() &&
    $("#txtsalario").val() 

    

     ) 
       if (caract.test(email) == true){


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
 }


 });

