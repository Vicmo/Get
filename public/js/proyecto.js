function ver(id){
 $.ajax({
   dataType:'json',
   type:'post',
   url:uri+"proyecto/verp/"+id
}).done(function(respuesta){
  $("#tablap").empty();
  if (respuesta.id_pate == null) {
    var pate = ""
  }else{
    var pate = respuesta.id_pate;
  }

    if (respuesta.fechacierre == "0000-00-00") {
    var fechacierre = "No aplica";
  }else{
    var fechacierre = respuesta.fechacierre;
  }
  
   $("#tablap").append(
   	"<tr><td>"+'<b>ID proyecto:</b>'+" "+respuesta.id +"<tr><td>"+
   	"<tr><td>"+'<b>Nombre proyecto: </b>'+" "+respuesta.nombre +"<tr><td>" +
   	"<tr><td>"+'<b>Descripción proyecto: </b>'+" "+respuesta.descripcion+"<tr><td>"+ 
   	"<tr><td>"+'<b>Fecha de creación: </b>'+" "+respuesta.fechacreacion +"<tr><td>"+
   	"<tr><td>"+'<b>Nit: </b>'+" "+respuesta.nit +"<tr><td>"+
   	"<tr><td>"+'<b>Razón social:</b>'+" "+respuesta.razonsocial +"<tr><td>"+
   	"<tr><td>"+'<b>Sector: </b>'+" "+respuesta.nombrese +"<tr><td>"+
   	"<tr><td>"+'<b>Gestor:</b>'+" "+respuesta.nombresg +" "+respuesta.apellidosg+"<tr><td>"+
   	"<tr><td>"+'<b>Foco:</b>'+" "+respuesta.foco +"<tr><td>"+
      "<tr><td>"+'<b>Estado del proyecto: </b>'+" "+respuesta.estadoproyecto +"<tr><td>"+
       "<tr><td>"+'<b>Tipo de proyecto: </b>'+" "+respuesta.tipoproyecto +"<tr><td>"+
   	"<tr><td>"+'<b>Talento Lider:</b>'+" "+respuesta.nombres +" "+respuesta.apellidos+"<tr><td>"+
   	"<tr><td>"+'<b>Observaciones: </b>'+" "+respuesta.observaciones +"<tr><td>"+
   	"<tr><td>"+'<b>Proyecto articulado con Tecnoacademia:</b>'+" "+respuesta.pro_art_tecnoaca +"<tr><td>"+
   	"<tr><td>"+'<b>Aprendiz con apoyo de sostenimiento: </b>'+" "+respuesta.apre_apoyo +"<tr><td>"+
   	"<tr><td>"+'<b>Aprendiz SIN apoyo de sostenimiento: </b>'+" "+respuesta.apre_sinapoyo +"<tr><td>"+
   	"<tr><td>"+'<b>Articulado con CT+i: </b>'+" "+respuesta.arti_cti +"<tr><td>"+
   	"<tr><td>"+'<b>Nombre del actor CT+i</b>'+" "+respuesta.nom_act_cti +"<tr><td>"+
   	"<tr><td>"+'<b>Dirigido a área de emprendimiento SENA: </b>'+" "+respuesta.diri_ar_emp +"<tr><td>"+
   	"<tr><td>"+'<b>Recibido a través del área de emprendimiento SENA: </b>'+" "+respuesta.reci_ar_emp +"<tr><td>"+
   	"<tr><td>"+'<b>Dinero de regalías: </b>'+" "+respuesta.dine_rega +"<tr><td>"+
   	"<tr><td>"+'<b>Acompañamiento proceso de patente:</b>'+" "+respuesta.aco_pro_pate +"<tr><td>"+
   	"<tr><td>"+'<b>Patente publicada: </b>'+" "+respuesta.pata_publi +"<tr><td>"+
 "<tr><td>"+'<b>ID patente: </b>'+" "+pate +"<tr><td>"+
 "<tr><td>"+'<b>Fecha de cierre: </b>'+" "+fechacierre +"<tr><td>"+
  "<tr><td>"+'<b>Acta de Inicio: </b>'+" "+respuesta.actainicio +"<tr><td>"+
   "<tr><td>"+'<b>Propuesta Técnica: </b>'+" "+respuesta.propuesta +"<tr><td>"+
    "<tr><td>"+'<b>Book de planeación: </b>'+" "+respuesta.bookplaneacion +"<tr><td>"+
     "<tr><td>"+'<b>Cronograma: </b>'+" "+respuesta.cronograma +"<tr><td>"+
      "<tr><td>"+'<b>Book de ejecución: </b>'+" "+respuesta.bookejecucion +"<tr><td>"+
       "<tr><td>"+'<b>Lecciones aprendidas: </b>'+" "+respuesta.lecciones +"<tr><td>"+
        "<tr><td>"+'<b>Ficha de caracterización: </b>'+" "+respuesta.ficha +"<tr><td>"+
         "<tr><td>"+'<b>Video: </b>'+" "+respuesta.video +"<tr><td>"+
          "<tr><td>"+'<b>Acta de cierre: </b>'+" "+respuesta.actacierre +"<tr><td>"+
           "<tr><td>"+'<b>Revisado final: </b>'+" "+respuesta.revisadofinal +"<tr><td>"
 );
    $("#ver").modal();

});

}



  function validaid(){
    var id = $("#txtid").val();
    $.ajax({
     dataType:'json',
     type:'post',
     url:uri+"proyecto/consultaidp/"+id
   }).done(function(respuesta){
    if (respuesta.id != null) {
     document.getElementById("txtid").focus();
     swal("Ups!!", "El ID ingresado ya existe", "warning");
     $("#txtid").val("");
   }
 });

 }

 function  limpiar(){
  document.getElementById("txtfoco").options.length = 0;
  $("#txtfoco").append('<option value="">'+"Seleccione"+'</option>')
}

  var x = $("#gestor").val();
  $("#txtgestor").val(x);
  var g = $("#txtgestor").val();
  $.ajax({
    dataType:'json',  
    type:'post',
    url:uri+"gestor/consultalinea/"+g
  }).done(function(respons) {
    $("#txtlinea").val(respons.nombre);
    $("#txtlineaa").val(respons.id);
    var id = respons.id;
   
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"proyecto/consultafocoo/"+id
        }).done(function(respon) {
          $.each(respon, function(i, item) {
            $("#txtfoco").append('<option value="'+item.idfoco+'">'+item.nombre+'</option>')
          });

        });
        
      });
   $("#txtfoco").prop("disabled", false);


 function quitar(elemento) {
    var e = $(elemento).parent().parent();
    $(e).remove();
  }

  function  limpiarl(){
    document.getElementById("txttalento").options.length = 0;
    $("#txttalento").append('<option value="">'+"Seleccione"+'</option>')
  }

   function  limpiarl2(){
    document.getElementById("txtcedulalider").options.length = 0;
    $("#txtcedulalider").append('<option value="">'+"Seleccione"+'</option>')
  }
  function agregar(){

    var idt = $("#txttalento").val();
    var nombrec = $("#txttalento [value='"+idt+"']").text();
    var res = nombrec.split("/");
    var nombre = res[0];
    var documento = res[1];

       if ($("#txttalento").val()){

      var html =   '<div class="row"><div class="col-md-9 cta-contents">';
    html +=  '<div class="cta-desc">';
    html +=  '<p><b>Documento: </b>'+documento+'</p>';
    html +=  '<p><b>Nombre: </b>'+nombre+'</p>';
    html +=  '</div>';
    html += '<input type="hidden" id="abc" name="txttalento[]" value="'+idt+'">';
    html +=  '</div>';
    html +=  '<div class="col-md-3 cta-button">';
    html +=   '<a href="#" onclick="quitar(this)" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
    html +=    '</div>';
    html +=    '</div>';
    $("#detallet").append(html);

        $.ajax({
          dataType:'json',  
          type:'post',
          url:uri+"talento/slctpro"
        }).done(function(respon) {
          limpiarl()
          $.each(respon, function(i, item) {
       
           $("#txttalento").append('<option value="'+item.documento+'">'+item.nombres+" "+item.apellidos+" / "+item.documento+'</option>')
          });

        });
     }else{

       swal("Ups!!", "Debe seleccionar un talento", "warning");
     }
  }

 function unico(){
    var slt = $("#txttalento").val();
    var a = document.getElementsByName("txttalento[]");
    for (x=0;x<a.length;x++){
      if(slt == a[x].value){
     
        swal("Ups!!", "El talento seleccionado ya esta registrado", "warning");
           $.ajax({
          dataType:'json',  
          type:'post',
          url:uri+"talento/slctpro"
        }).done(function(respon) {
          limpiarl()
          $.each(respon, function(i, item) {
     
           $("#txttalento").append('<option value="'+item.documento+'">'+item.nombres+" "+item.apellidos+" / "+item.documento+'</option>')
          });

        });
      } else{

      }
    }
     var tl = $("#txtcedulalider").val();            
    if (slt == tl) {
      swal("Ups!!", "El talento seleccionado ya esta registrado como talento líder", "warning");
           $.ajax({
          dataType:'json',  
          type:'post',
          url:uri+"talento/slctpro"
        }).done(function(respon) {
          limpiarl()
          $.each(respon, function(i, item) {
       
           $("#txttalento").append('<option value="'+item.documento+'">'+item.nombres+" "+item.apellidos+" / "+item.documento+'</option>')
          });

        });
    }

  }

  function unicoo(){
    var tl = $("#txtcedulalider").val(); 
    var a = document.getElementsByName("txttalento[]");
    for (x=0;x<a.length;x++){
      if(tl == a[x].value){
        swal("Ups!!", "El talento lider seleccionado ya esta registrado", "warning");
        $.ajax({
          dataType:'json',  
          type:'post',
          url:uri+"talento/slctpro"
        }).done(function(respon) {
          limpiarl2()
          $.each(respon, function(i, item) {
           $("#txtcedulalider").append('<option value="'+item.documento+'">'+item.nombres+" "+item.apellidos+" / "+item.documento+'</option>')
          });

        });
      } else{

      }
    }
  }

  var a = document.getElementById("btn");
  var b = document.getElementsByName("aulas");
  var c = document.getElementById("registrar");
  $(a).click(function(){
    $(b).attr('id', '');
  });
  $(c).click(function(){
    $(b).attr('id', 'demo-form2');
  });



       function idp(){
    var id = $("#txtidpatente").val();
    $.ajax({
     dataType:'json',
     type:'post',
     url:uri+"proyecto/consultapatente/"+id
   }).done(function(respuesta){
    if (respuesta.id_pate != null) {
     document.getElementById("txtidpatente").focus();
     swal("Ups!!", "El ID Patente ingresado ya existe", "warning");
     $("#txtidpatente").val("");
   }
 });

 }

   