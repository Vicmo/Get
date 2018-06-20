   var d = $("#txtdocumento").val();
   $.ajax({
    dataType:'json',  
    type:'post',
    url:uri+"usoinfraestructura/consultaselectp/"+d
  }).done(function(response) {
   $.each(response, function(i, item) {
    $("#txtproyecto").append('<option value="'+item.idproyecto+'">'+item.id+" / "+item.nombre+'</option>')
  });

 });


   var g = $("#txtdocumento").val();
  $.ajax({
    dataType:'json',  
    type:'post',
    url:uri+"gestor/consultalinea/"+g
  }).done(function(respons) {
    $("#txtgestor").val(respons.nombres +" "+ respons.apellidos);
    $("#txtlinea").val(respons.nombre);
    $("#txtidlinea").val(respons.id);
     var id = $("#txtidlinea").val();
        $.ajax({
          dataType:'json',  
          type:'post',
          url:uri+"usoinfraestructura/consultalabo/"+id
        }).done(function(respon) {
          limpiarl()
          $.each(respon, function(i, item) {
            $("#txtlabo").append('<option value="'+item.idlaboratorio+'">'+item.nombre+'</option>')

          });

        });

  });

       
        
 function talentos(){
    var p = $("#txtproyecto").val();
    $("#txttalento").prop("disabled", false);
    $("#txtlabo").prop("disabled", false);
    $.ajax({
      dataType:'json',  
      type:'post',
      url:uri+"usoinfraestructura/consultaselect/"+p
    }).done(function(response) {
      limpiart()
      $.each(response, function(i, item) {
        $("#txttalento").append('<option value="'+item.talento+'">'+item.nombres+" "+item.apellidos+" / "+item.talento+'</option>')

      });

    }); 

  }

    function agregart(){


    var uso = $("#txtuso").val();
    var idt = $("#txttalento").val();
    var nombrec = $("#txttalento [value='"+idt+"']").text();
    var res = nombrec.split("/");
    var nombre = res[0];
    var documento = res[1];

    if ($("#txtproyecto").val() && $("#txtdes").val()) {
       if ($("#txttalento").val()){

      var html =   '<div class="row"><div class="col-md-9 cta-contents">';
    html +=  '<div class="cta-desc">';
    html +=  '<p><b>Documento: </b>'+documento+'</p>';
    html +=  '<p><b>Nombre: </b>'+nombre+'</p>';
    html +=  '</div>';
    html += '<input type="hidden" name="txtuso[]" value="'+uso+'">';
    html += '<input type="hidden" id="abc" name="txttalento[]" value="'+idt+'">';
    html +=  '</div>';
    html +=  '<div class="col-md-3 cta-button">';
    html +=   '<a href="#" onclick="quitarr(this)" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
    html +=    '</div>';
    html +=    '</div>';
    $("#detallet").append(html);

    $("#txttalento").val("");
    $("#txtproyecto").prop("disabled",true);


     }else{

       swal("Ups!!", "Debe seleccionar un talento", "warning");
     }


    }
 
  }
    function quitarr(elemento) {
    var e = $(elemento).parent().parent();
    $(e).remove();
    if ($("#abc").val() == null) {
    $("#txtproyecto").prop("disabled",false);
    }
  }


  function  limpiart(){
    document.getElementById("txttalento").options.length = 0;
    $("#txttalento").append('<option value="">'+"Seleccione"+'</option>')
  }

  function  limpiarl(){
    document.getElementById("txtlabo").options.length = 0;
    $("#txtlabo").append('<option value="">'+"Seleccione"+'</option>')
  }




  function quitar(elemento) {
    var e = $(elemento).parent().parent();
    $(e).remove();
  }
  
  function agregar(){
    var uso = $("#txtuso").val();
    var idlabo = $("#txtlabo").val();
    var tiempo = $("#txtiempo").val();
    var laboratorio = $("#txtlabo [value='"+idlabo+"']").text();
  

     if ($("#txtproyecto").val() && $("#txtdes").val()) {

       if ($("#txtlabo").val() == ""){
       swal("Ups!!", "Debe seleccionar un laboratorio", "warning");
       }else  if ($("#txtiempo").val() == ""){
         swal("Ups!!", "Debe ingresa el tiempo de uso", "warning");
       }else{
        var html =   '<div class="row"><div class="col-md-9 cta-contents">';
    html +=  '<div class="cta-desc">';
    html +=  '<p><b>Laboratorio: </b>'+laboratorio+'</p>';
    html +=  '<p><b>Tiempo de uso: </b>'+tiempo+ " Horas"+'</p>';
    html +=  '</div>';
    html += '<input type="hidden" name="txtuso[]" value="'+uso+'">';
    html += '<input type="hidden" name="txtidlabo[]" value="'+idlabo+'">';
    html += '<input type="hidden" name="txtiempo[]" value="'+tiempo+'">';
    html +=  '</div>';
    html +=  '<div class="col-md-3 cta-button">';
    html +=   '<a href="#" onclick="quitar(this)" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
    html +=    '</div>';
    html +=    '</div>';
    $("#detalleuso").append(html);

    $("#txtiempo").val("");
    $("#txtlabo").val("");
       }
    
      }

    
  }




    
  function verlabo(uso){
    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"usoinfraestructura/detallelabo/"+uso
    }).done(function(respuesta){

     $("#tablalabo").empty()

     if(respuesta[0] == null){
      swal("Ups!!", "No se registro uso de laboratorios", "warning");
    }

    if(respuesta[0] != null){
     $.each(respuesta, function(i, item) {
      $("#tablalabo").append("<tr><td>"+item.nombre+
        "</td><td>"+item.tiempo+" Horas"+"</td></tr>");
    });
     $("#modalabo").modal();
   }

 });

  }

  function vertalen(uso){
    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"usoinfraestructura/detalletalen/"+uso
    }).done(function(respuesta){

      $("#tablatalen").empty()

      if (respuesta != null ) {
        $.each(respuesta, function(i, item) {
          $("#tablatalen").append("<tr><td>"+item.documento+
            "</td><td>"+item.nombres+" "+item.apellidos+"</td></tr>");
        });
        $("#modaltalen").modal();
      }
    });

  }

 

function unico(){
    var slt = $("#txttalento").val();

    var a = document.getElementsByName("txttalento[]");
    for (x=0;x<a.length;x++){
      if(slt == a[x].value){
     
        swal("Ups!!", "El talento seleccionado ya esta registrado", "warning");
        $("#txttalento").val("");
      } else{

      }
    }

  }

    function unicol(){
    var slt = $("#txtlabo").val();
  
    var a = document.getElementsByName("txtidlabo[]");
    for (x=0;x<a.length;x++){
      if(slt == a[x].value){
       
       
        swal("Ups!!", "El laboratorio seleccionado ya esta registrado", "warning");
        $("#txtlabo").val("");
      } else{

      }
    }

  }


  function cambiarestado(cod,est){
  var d = $("#txtdocumento").val();
  swal({
    title: "¿Desea anular este registro?",

    type: "warning",  
    showCancelButton: true,
    confirmButtonColor: "#57D9D2",
    confirmButtonText: "Si",
    closeOnConfirm: false
  },
  function(isConfirm){
    if (isConfirm) {

     $.ajax({

      dataType:'json',
      type:'post',
      url:uri+"usoinfraestructura/cambiarestado",
      data:{id:cod , estado:est}
    }).done(function(respuesta){

      if (respuesta.v == "1") {

        setTimeout(function(){

          location.href = uri+"usoinfraestructura/index/"+d;


        },1500 );{

          swal("Anulado", "El registro ha sido anulado correctamente", "success");

        }

      }else{


      }

    }).fail(function(){

    })

  } else {
    
  }
});

}

