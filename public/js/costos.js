 new Chart(document.getElementById("grafico"),
  {"type":"bar",
  "data":{"labels":["C.Asesoría","C.Equipos","C.Administrativos","Total Costo"],
  "datasets":[{"label":"Costos","data":[0,0,0,0],"fill":false,
  "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

 $('#costos').on('click',function(){

  if ($("#idproyecto").val()){
    var p = $("#idproyecto").val();

    $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"costos/consultacp/"+p
    }).done(function(response) {
      if (response != false) {
         var totaltotal = 0;
         $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"costos/costosgestor/"+p
        }).done(function(r) {
          var asesoria = 0;
           $.each(r, function(i, item) {
           asesoria +=item.asesorias*item.salario;
         });
          totaltotal +=asesoria;
         var asesorias =  asesoria.toFixed(2);
        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"costos/costosadmin/"
        }).done(function(v) {
         $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"costos/valoradmin/"+p
        }).done(function(l) {
         var total = 0;
         $.each(l, function(i, item) {
           var acu = (v.valor*item.participacioncostos*item.tiempo)/100
           total +=acu;
         });

          $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"costos/horasasesoria/"+p
        }).done(function(horasas) {
         var horasasesorias = 0;
         $.each(horasas, function(i, item) {
          horasasesorias = item.horasasesoria
          if ( item.horasasesoria != null ) {
        $("#txthoras").val(horasasesorias);
          } else  {
        $("#txthoras").val("0");
          }
          console.log(item.horasasesoria)
         })
       });


        totaladmin =  total.toFixed(2);
        totaltotal +=total;


        $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"costos/costosdepreciacion/"+p
        }).done(function(a) {
          var ttdepre = 0;
          var totald = 0;
          var costoequipo = 0;
          var costoequipos = 0;
          var ano = $("#txtano").val();
           $.each(a, function(i, item) {
            if ((ano-item.ano)<item.vidautil) {
                ttdepre +=item.depreciacion*item.tiempo;
                // console.log(item.depreciacion);
                // console.log(item.tiempo);
            }
         });

            costoequipo +=ttdepre


         $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"costos/costosmantenimiento/"+p
        }).done(function(b) {
           var totalm = 0;
           $.each(b, function(i, item) {
           var acu = (item.tiempo * item.mantenimiento)
           totalm +=acu;
         });
           costoequipo +=totalm
          costoequipos +=totalm

         $.ajax({
          dataType:'json',
          type:'post',
          url:uri+"costos/costosmateriales/"+p
        }).done(function(c) {
          var totalma = 0;
           $.each(c, function(i, item) {
           var acu = (item.materiales * item.tiempo)
           totalma +=acu;
         });

          costoequipo +=totalma
         costoequipos +=totalma
         totaltotal +=costoequipo;
         // totaltotal +=costoequipos;

        var aa =  costoequipo.toFixed(2);
        var bb =  costoequipos.toFixed(2);

           var aaaaa = asesoria.toLocaleString();
            var eeeeee = costoequipo.toLocaleString();

             var adminnnnnn = total.toLocaleString();


        $("#txtlinea").val(response.linea);
        var gestor = response.nombres+" "+response.apellidos;
         $("#txtgestor").val(gestor);
         $("#txtcostoa").val("$ "+aaaaa);
          $("#txtcostoe").val("$ "+eeeeee);
         $("#txtcostoe2").val("$ "+bb);
         $("#costosadmin").val("$ "+adminnnnnn);
         var ttt =  totaltotal.toFixed(2);
         var ttttt = totaltotal.toLocaleString();
         $("#totalcosto").val("$ "+ttttt);

          $('#grafico').remove();
       $('#idgrafico').append('<canvas id="grafico"></canvas>');

          new Chart(document.getElementById("grafico"),
  {"type":"bar",
  "data":{"labels":["C.Asesoría","C.Equipos","C.Administrativos","Total Costo"],
  "datasets":[{"label":"Costos","data":[asesorias,aa,totaladmin,ttt],"fill":false,
  "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86, 1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});


});
});
      });



        });
      });
      });



      }else{
       document.getElementById("idproyecto").focus();
       swal("Ups!!", "El proyecto no existe", "warning");
       $("#idproyecto").val("");
       $("#txtcostoa").val("");
       $("#txtcostoe").val("");
       $("#txtcostoe2").val("");
       $("#costosadmin").val("");
       $("#totalcosto").val("");
       $("#txtgestor").val("");
       $("#txtlinea").val("");
        new Chart(document.getElementById("grafico"),
  {"type":"bar",
  "data":{"labels":["C.Asesoría","C.Equipos","C.Administrativos","Total Costo"],
  "datasets":[{"label":"Costos","data":[0,0,0,0],"fill":false,
  "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

     }
   });
  }else{
    document.getElementById("idproyecto").focus();
    swal("Ups!!", "Debe seleccionar un proyecto", "warning");
     $("#txtcostoa").val("");
       $("#txtcostoe").val("");
       $("#txtcostoe2").val("");
       $("#costosadmin").val("");
       $("#totalcosto").val("");
         $("#txtgestor").val("");
       $("#txtlinea").val("");
     new Chart(document.getElementById("grafico"),
  {"type":"bar",
 "data":{"labels":["C.Asesoría","C.Equipos","C.Administrativos","Total Costo"],
  "datasets":[{"label":"Costos","data":[0,0,0,0],"fill":false,
  "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

  }


});
