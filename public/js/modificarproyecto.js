  function quitar(elemento) {
    var e = $(elemento).parent().parent();
    $(e).remove();
  }

  var lider = $("#liderr").val();
  var id = $("#txtidproyecto").val();
  var da = $("#txtcedulalider").val();
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"proyecto/detalletalen/"+id
  }).done(function(respuesta){

    $.each(respuesta, function(i, item) {

      $("#txtcedulalider").append('<option value="'+item.documento+'">'+item.nombres+" "+item.apellidos+" / "+item.documento+'</option>');
      var aaa = $("#txtcedulalider").val();

      if (lider != item.documento) {
        var nombre = item.nombres+" "+item.apellidos;
        var html =   '<div class="row"><div class="col-md-9 cta-contents">';
        html +=  '<div class="cta-desc">';
        html +=  '<p><b>Documento: </b>'+item.documento+'</p>';
        html +=  '<p><b>Nombre: </b>'+nombre+'</p>';
        html +=  '</div>';
        html += '<input type="hidden" id="abc" name="txttalento[]" value="'+item.documento+'">';
        html +=  '</div>';
        html +=  '<div class="col-md-3 cta-button">';
        html +=   '<a href="#" onclick="quitar(this)" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>';
        html +=    '</div>';
        html +=    '</div>';
        $("#detallet").append(html);
      }

    });

    $("#txtcedulalider").val(lider);

  });


 $('#modificar').on('click',function(e){

  e.preventDefault();
  var form = $(this).parents('form');
  var tl = $("#txtcedulalider").val();
  var a = document.getElementsByName("txttalento[]");
  
  if ($("#txtnombre").val() && $("#txtdes").val()) {  


    if(a.length != 0){
       var tl = $("#txtcedulalider").val(); 
  for (x=0;x<a.length;x++){
    if(tl == a[x].value){
      swal("Ups!!", "El talento lider esta siendo registrado dos veces", "warning");
    }else{
  

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
  } 

    }else{

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

   

}

});

 function  limpiarrr(){
    document.getElementById("txttalento").options.length = 0;
    $("#txttalento").append('<option value="">'+"Seleccione"+'</option>')
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
          limpiarrr()
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
        limpiarrr()
        $.each(respon, function(i, item) {

         $("#txttalento").append('<option value="'+item.documento+'">'+item.nombres+" "+item.apellidos+" / "+item.documento+'</option>')
       });

      });
    }

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
        limpiarrr()
        $.each(respon, function(i, item) {

         $("#txttalento").append('<option value="'+item.documento+'">'+item.nombres+" "+item.apellidos+" / "+item.documento+'</option>')
       });

      });
    }else{

     swal("Ups!!", "Debe seleccionar un talento", "warning");
   }
 }



  function labo(){

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
        limpiarl()
        $.each(respon, function(i, item) {
          $("#txtfoco").append('<option value="'+item.idfoco+'">'+item.nombre+'</option>')
        });

      });

    });
    $("#txtfoco").prop("disabled", false);
  }
