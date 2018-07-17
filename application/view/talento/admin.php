  <link href="<?php echo URL; ?>css/reportes/r.min.css" rel="stylesheet">
  <input type="hidden" id="inputano" value="<?php echo date("Y"); ?>">
  <input type="hidden" value="" id="inputalentostodo">
  <input type="hidden" value="" id="inputalentoslinea">
  <input type="hidden" value="" id="inputalentosgestor">
  <body style="background: #EDEDED">
    <title>Tecnoparque  | Talentos</title>
    <div class="right_col" role="main" >
      <div class="">
        <div class="page-title">
          <div class="title_left">
          </div>
          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row" >
          <div class="col-md-12">
            <div class="x_panel" >
              <ul class="nav nav-tabs bar_tabs">
                <li class="active"><a data-toggle="tab" href="#home">Consultar Talentos</a></li>
                <li><a data-toggle="tab" href="#menu2">Exportar</a></li>
                <li><a data-toggle="tab" href="#menu1">Reportes</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                 <table class="table table-striped jambo_table bulk_action" id="tabla">
                  <br>
                  <thead>
                    <tr>
                      <th>Tipo Documento</th>
                      <th>Documento</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Tipo Talento</th>
                      <th>Correo</th>
                      <th>Celular</th>
                      <th>Fecha de cierre del proyecto</th>
                      <th>Proyectos</th>
                      <th>Detalles</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($consultatalento as $value) { ?>
                   <tr>
                    <div class="item form-group">
                    </div>
                    <td><?= $value["tipod"] ?></td>
                    <td><?= $value["documento"] ?></td>
                    <td><?= $value["nombres"] ?></td>
                    <td><?= $value["apellidos"] ?></td>
                    <td><?= $value["tipot"] ?></td>
                    <td><?= $value["correo"] ?></td>
                    <td><?= $value["contacto"] ?></td>
                    <td><?= $value["fechacierre"] ?></td>
                    <td>
                      <a class="btn btn-info btn-xs" onclick="verproyectotalento(<?= $value['idpersona']?>)">
                        <i class="fa fa-file-archive-o"></i> Proyectos</a>
                      </td>
                    <td>
                     <a class="btn btn-primary btn-xs" onclick="ver(<?= $value['idpersona']?>)">
                      <i class="fa fa-folder"></i> Detalles</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="col-md-12">
                    <br>
                    <br>
                    <div class="item form-group" style="margin-left: 40%">
                      <label class="control-label col-md-1">Año<span class="required"></span></label>
                      <div class="col-md-3">
                        <input type="hidden" name="txtidnodo" id="txtidnodo" value="<?= $idnodo ?>">
                       <select id="txtanoexportar" class="form-control" name="txtlinea" >
                         <option value="2017">2017</option>
                         <option value="2018">2018</option>
                         <option value="2019">2019</option>
                         <option value="2020">2020</option>
                       </select>
                     </div>
                   </div>
                   <br><br><br>
                   <div class="form-group">
                    <center><button type="button" id="btnconsulta" class="btn btn-success">Consultar Talentos</button>
                    </div>
                    <br>
                    <br>
                    <br>
                  </div>
                     <table class="table table-striped jambo_table bulk_action" id="reportesadmint">
                  <br>
                  <thead>
                    <tr>
                      <th>Tipo Documento</th>
                      <th>Documento</th>
                      <th>Nombre Completos del Talento</th>
                      <th>Tipo Talento</th>
                      <th>Correo</th>
                      <th>Contacto</th>
                    </tr>
                  </thead>
                  <tbody>
                </tbody>
              </table>
            </div>
            <div id="menu1" class="tab-pane fade">
              <br>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#reportet">Reporte Tecnoparque</a></li>
                <li><a data-toggle="tab" href="#reportel">Reporte por Línea</a></li>
                <li><a data-toggle="tab" href="#reporteg">Reporte por Gestor</a></li>
              </ul>
              <div class="tab-content">
                <div id="reportet" class="tab-pane fade in active">
                  <br>
                  <div class="col-md-8">
                    <div class="x_panel" id="idgraficotalentos">
                      <canvas id="graficotalentos"></canvas>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <br>
                    <br>
                    <div class="item form-group">
                      <label class="control-label col-md-2">Año<span class="required"></span></label>
                      <div class="col-md-8">
                       <select id="anotxt" class="form-control" name="txtlinea" >
                         <option value="2017">2017</option>
                         <option value="2018">2018</option>
                         <option value="2019">2019</option>
                         <option value="2020">2020</option>
                       </select>
                     </div>
                   </div>
                   <br><br><br>
                   <div class="form-group">
                    <center><button type="button" id="btngraficotodo" class="btn btn-success">Generar grafico</button>
                      <button type="button" id="pdftalentos" class="btn btn-danger">PDF</button>
                    </div>
                    <br>
                    <br>
                    <br>

                  </div>
                </div>
                <div id="reportel" class="tab-pane fade">
                    <div class="col-md-8" >
                      <br>
                  <div class="x_panel" id="idgraficotalentoslinea">
                    <canvas id="graficotalentoslinea"></canvas>
                  </div>
                </div>
              <br>
              <br>
                <div class="col-md-4">
                  <div class="item form-group">
                    <label class="control-label col-md-2">Linea<span class="required"></span></label>
                    <div class="col-md-8">
                     <select id="txtlinealt" class="form-control" name="txtlinea" >
                       <option value="">Seleccione</option>
                       <?php foreach ($linea as $key => $value): ?>
                         <option value="<?= $value['idlinea'] ?>"><?=$value['nombre']?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                 </div>
                 <br><br>
                 <div class="item form-group">
                  <label class="control-label col-md-2">Año<span class="required"></span></label>
                  <div class="col-md-8">
                   <select id="txtanol" class="form-control" name="txtlineal" >
                     <option value="2017">2017</option>
                     <option value="2018">2018</option>
                     <option value="2019">2019</option>
                     <option value="2020">2020</option>
                   </select>
                 </div>
               </div>
               <br><br><br>
               <div class="col-md-11">
                <center><button type="button" id="btngraficolinea" class="btn btn-success">Generar grafico</button>
                  <button type="button" id="pdftalentosl" class="btn btn-danger">PDF</button></center>
                </div>
                <br>
                <br>
                <br>
              </div>
                </div>
                <div id="reporteg" class="tab-pane fade">
                  <br>
                   <div class="col-md-8" >
                  <div class="x_panel" id="idgraficomelo">
                    <canvas id="graficomelo"></canvas>
                  </div>
                </div>
                <div class="col-md-4">
                  <br>
                 <div class="item form-group" >
                  <label class="control-label col-md-2">Gestor<span class="required"></span></label>
                  <div class="col-md-8">
                   <select id="txtgestorr" class="form-control" name="txtgestor" >
                     <option value="">Seleccione</option>
                     <?php foreach ($gestor as $key => $value): ?>
                      <option value="<?= $value['idpersona'] ?>"><?=$value['nombres']?> <?=$value['apellidos']?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                </div>
                <br><br>
                <div class="item form-group">
                  <label class="control-label col-md-2">Año<span class="required"></span></label>
                  <div class="col-md-8">
                   <select id="txtanog" class="form-control" name="txtlineag" >
                     <option value="2017">2017</option>
                     <option value="2018">2018</option>
                     <option value="2019">2019</option>
                     <option value="2020">2020</option>
                   </select>
                 </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-md-11">
                  <center><button type="button" id="btnreporteg" class="btn btn-success">Generar grafico</button>
                   <button type="button" id="pdftalentosg" class="btn btn-danger">PDF</button></center>
                 </div>
                 <br>
                 <br>
                 <br>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div id="ver" class="modal fade" role="dialog" >
       <div class="modal-dialog modal-sm" >
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">X</button>
             <center><h4 class="modal-title">Detalles del Talento</h4></center>
           </div>
           <div class="modal-body">
             <div class="table-responsive">
               <table id="tablas" >
                 <thead>
                 </thead>
                 <tbody id="tablad">
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>js/graficos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="<?php echo URL; ?>css/build/js/custom.min.js"></script>
<script src="<?php echo URL; ?>js/jspdf.debug.js"></script>
<!-- <script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/parsley.js"></script> -->
<script src="<?php echo URL; ?>js/talento.js"></script>

<script type="text/javascript">

/* --------------------------- Inicio para exportar datos de la tabla de talentos por año (reportesadmint) a Excel (Librería de DataTable) --------------------------- */

$(document).ready(function() {
  $('#reportesadmint').DataTable( {
      dom: 'Bfrtip',
      buttons: [

          {
              filename: 'Talentos nodo <?= $nodo ?> / '+$("#txtanoexportar").val(),
              sheetName: 'Talentos nodo <?= $nodo ?> / '+$("#txtanoexportar").val(),
              extend: 'excelHtml5',
              exportOptions: {
                  columns: [0,1,2,3,4,5]
              }
          },


      ]
  } );
} );

/* --------------------------- Fin para exportar datos de la tabla de talentos por año (reportesadmint) a Excel (Librería de DataTable) --------------------------- */


/* --------------------------- Inicio de Gráficas sin ningún dato --------------------------- */
  new Chart(document.getElementById("graficotalentos"),
    {"type":"bar",
    "data":{
      "labels":["A. SENA sin apoyo","A. SENA con apoyo","Empresario","Emprendedor","Investigador","Instructor","Total"],
    "datasets":[
      {
        "label":"Talentos","data":[0,0,0,0,0,0,0],"fill":false,
    "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}
  ]}});

  new Chart(document.getElementById("graficotalentoslinea"),
    {"type":"bar",
    "data":{
      "labels":["A. SENA sin apoyo","A. SENA con apoyo","Empresario","Emprendedor","Investigador","Instructor","Total"],
    "datasets":[
      {
      "label":"Talentos","data":[0,0,0,0,0,0,0],"fill":false,
    "backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1
  }]
}});

new Chart(document.getElementById("graficomelo"),
{"type":"bar",
"data":{"labels":["A. SENA sin apoyo","A. SENA con apoyo","Empresario","Emprendedor","Investigador","Instructor","Total"],
"datasets":[{"label":"Talentos","data":[0,0,0,0,0,0,0],"fill":false,
"backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]}});


/* --------------------------- Fin de Gráficas sin ningún dato --------------------------- */

  </script>

  <script type="text/javascript">
   var anoo = $("#inputano").val();
   $("#anotxt").val(anoo);
   $("#txtanol").val(anoo);
   $("#txtanog").val(anoo);
   $("#txtanoexportar").val(anoo);
 </script>

 <script type="text/javascript">

/*-------------- Inicio del Método para  mostrar gráfica con los tipos de talentos filtrados por año y nodo ----------------*/
  $ ('#btngraficotodo').click (function (){

   var a = $("#anotxt").val();
   var nodo = $("#txtidnodo").val();
   $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"reportes/reportetalentos/"+a+"/"+nodo,
  }).done(function(response) {

    $("#inputalentostodo").val("si");

    var asss = 0;
    var ascs = 0;
    var empresario = 0;
    var emprendedor = 0;
    var investigador = 0;
    var instructor = 0;

    $.each(response, function(i, item) {
      if (item.id == 1) {
        asss +=1;
      }

      if (item.id == 2) {
        ascs +=1;
      }

      if (item.id == 3) {
        empresario +=1;
      }

      if (item.id == 4) {
        emprendedor +=1;
      }

      if (item.id == 5) {
        investigador +=1;
      }

      if (item.id == 6) {
        instructor +=1;
      }

    });

    var total = asss+ascs+empresario+emprendedor+investigador+instructor;

    $('#graficotalentos').remove();
    $('#idgraficotalentos').append('<canvas id="graficotalentos"></canvas>');

    new Chart(document.getElementById("graficotalentos"),
      {"type":"bar",
      "data":{"labels":["A. SENA sin apoyo","A. SENA con apoyo","Empresario","Emprendedor","Investigador","Instructor","Total"],
      "datasets":[
        {
          "label":"Talentos","data":[asss,ascs,empresario,emprendedor,investigador,instructor,total],"fill":false,
      "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86, 1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235, 1)","rgba(153, 102, 255, 1)","rgba(201, 203, 207, 1)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}
    ]
  },
  "options":{
    "scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}
    });
  });
});

/*-------------- Fin del Método para  mostrar gráfica con los tipos de talentos filtrados por año y nodo ----------------*/




/*-------------- Inicio del Método para  mostrar gráfica con los tipos de talentos filtrados por año, nodo y línea tecnológica ----------------*/

   $ ('#btngraficolinea').click (function (){

   var a = $("#txtanol").val();
   var l = $("#txtlinealt").val();
   var nodo = $("#txtidnodo").val();

   if (l != "") {

     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"reportes/reportetalentoslinea/"+a+"/"+l+"/"+nodo
    }).done(function(response) {
      // console.log(response);
      $("#inputalentoslinea").val("si");

      var asss = 0;
      var ascs = 0;
      var empresario = 0;
      var emprendedor = 0;
      var investigador = 0;
      var instructor = 0;

      $.each(response, function(i, item) {
        if (item.id == 1) {
          asss +=1;
        }

        if (item.id == 2) {
          ascs +=1;
        }

        if (item.id == 3) {
          empresario +=1;
        }

        if (item.id == 4) {
          emprendedor +=1;
        }

        if (item.id == 5) {
          investigador +=1;
        }

        if (item.id == 6) {
          instructor +=1;
        }

      });

      var total = asss+ascs+empresario+emprendedor+investigador+instructor;

      $('#graficotalentoslinea').remove();
      $('#idgraficotalentoslinea').append('<canvas id="graficotalentoslinea"></canvas>');

      new Chart(document.getElementById("graficotalentoslinea"),
        {"type":"bar",
        "data":{"labels":["A. SENA sin apoyo","A. SENA con apoyo","Empresario","Emprendedor","Investigador","Instructor","Total"],
        "datasets":[
          {
            "label":"Talentos","data":[asss,ascs,empresario,emprendedor,investigador,instructor,total],"fill":false,
        "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86, 1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235, 1)","rgba(153, 102, 255, 1)","rgba(201, 203, 207, 1)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1
      }
    ]},
    "options":{
      "scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}
      });
    });
  }else{
   swal("Ups!!", "Debe seleccionar una linea", "warning");
 }
});
/*-------------- Fin del Método para  mostrar gráfica con los tipos de talentos filtrados por año, nodo y línea tecnológica ----------------*/


/*-------------- Fin del Método para  mostrar gráfica con los tipos de talentos filtrados por año, nodo y gestor a cargo ----------------*/

  $ ('#btnreporteg').click (function (){

   var a = $("#txtanog").val();
   var g = $("#txtgestorr").val();
   var nodo = $("#txtidnodo").val();

   if (g != "") {

     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"reportes/reportetalentosgestor/"+a+"/"+g+"/"+nodo,
    }).done(function(response) {

      $("#inputalentosgestor").val("si");

      var asss = 0;
      var ascs = 0;
      var empresario = 0;
      var emprendedor = 0;
      var investigador = 0;
      var instructor = 0;

      $.each(response, function(i, item) {
        if (item.id == 1) {
          asss +=1;
        }

        if (item.id == 2) {
          ascs +=1;
        }

        if (item.id == 3) {
          empresario +=1;
        }

        if (item.id == 4) {
          emprendedor +=1;
        }

        if (item.id == 5) {
          investigador +=1;
        }

        if (item.id == 6) {
          instructor +=1;
        }

      });

      var total = asss+ascs+empresario+emprendedor+investigador+instructor;

      $('#graficomelo').remove();
      $('#idgraficomelo').append('<canvas id="graficomelo"></canvas>');

      new Chart(document.getElementById("graficomelo"),
        {"type":"bar",
        "data":{"labels":["A. SENA sin apoyo","A. SENA con apoyo","Empresario","Emprendedor","Investigador","Instructor","Total"],
        "datasets":[
          {
            "label":"Talentos","data":[asss,ascs,empresario,emprendedor,investigador,instructor,total],"fill":false,
        "backgroundColor":["rgba(255, 99, 132, 1)","rgba(255, 159, 64, 1)","rgba(255, 205, 86, 1)","rgba(75, 192, 192, 1)","rgba(54, 162, 235, 1)","rgba(153, 102, 255, 1)","rgba(201, 203, 207, 1)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1
        }
      ]},
      "options":{
        "scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}
        }
      });
    });

  }else{

   swal("Ups!!", "Debe seleccionar un gestor", "warning");
 }
});
/*-------------- Fin del Método para  mostrar gráfica con los tipos de talentos filtrados por año, nodo y gestor a cargo ----------------*/



/*------------------ Inicio del Método para pintar los talentos filtrados por año en la tabla ------------------*/
$('#btnconsulta').click (function () {
  var a = $("#txtanoexportar").val();
  var nodo = $("#txtidnodo").val();
      $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"talento/reporte/"+a+"/"+nodo
    }).done(function(response) {
      console.log(response);
       var t = $('#reportesadmint').DataTable();
    t.clear().draw();
    if (response != null) {
      $.each(response, function(i, item) {
        var t = $('#reportesadmint').DataTable();
        t.row.add( [item.tipod,item.documento,item.nombres+' '+item.apellidos, item.tipot, item.correo, item.contacto] ).draw(true);
      });
    } else {
      swal('Ups!!', 'No se han encontrado talentos', 'warning');
    }
    });
  });
/*------------------ Fin del Método para pintar los talentos filtrados por año en la tabla ------------------*/

$ ('#pdftalentos').click (function () {
  var a = $("#anotxt").val();
  var nodo = $("#txtidnodo").val();
  // var a = $("#inputalentostodo").val();
  // var ano = $("#anotxt").val();
  if (a != "") {
    var doc = new jsPDF ();
    doc.addHTML ($ ('#idgraficotalentos'), 1, 128,{
      'background': '#fff',
      'border': '2px solid white',
    }, function () {
     var logo = new Image();
     logo.src = 'data:image/png;base64,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';
     doc.addImage(logo, 'JPEG', 28, 15,148,20);
     doc.text('Reportes Tecnoparque',80,48);
     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"reportes/reportetalentos/"+a+"/"+nodo,
    }).done(function(response) {
      console.log(response);
     var asss = 0;
     var ascs = 0;
     var empresario = 0;
     var emprendedor = 0;
     var investigador = 0;
     var instructor = 0;

     $.each(response, function(i, item) {
      if (item.id == 1) {
        asss +=1;
      }

      if (item.id == 2) {
        ascs +=1;
      }

      if (item.id == 3) {
        empresario +=1;
      }

      if (item.id == 4) {
        emprendedor +=1;
      }

      if (item.id == 5) {
        investigador +=1;
      }

      if (item.id == 6) {
        instructor +=1;
      }

    });


     var total = asss+ascs+empresario+emprendedor+investigador+instructor;

     doc.text("Aprendiz SENA sin apoyo de sostenimiento"+": "+asss+" talentos", 20, 58);
     doc.text("Aprendiz SENA con apoyo sostenimiento"+": "+ascs+" talentos", 20, 68);
     doc.text("Empresario "+": "+empresario+" talentos", 20, 78);
     doc.text("Emprendedor "+": "+emprendedor+" talentos", 20, 88);
     doc.text("Investigador"+": "+investigador+" talentos", 20, 98);
     doc.text("Instructor"+": "+instructor+" talentos", 20, 108);
     doc.text("Total"+": "+total+" talentos", 20, 118);
     doc.save('Reportes_Tecnoparque.pdf');



   });
  });

}else{
  swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");

}



// var doc = new jsPDF({
//   orientation: 'landscape',
//   unit: 'in',
//   format: [4, 2]
// })
//
// doc.text('Hello world!', 1, 1)
// doc.save('two-by-four.pdf')
});

$ ('#pdftalentosl').click (function () {
  var a = $("#txtanol").val();
  var l = $("#txtlinealt").val();
  var nodo = $("#txtidnodo").val();
if (a != "") {
 var doc = new jsPDF ();
 doc.addHTML ($ ('#idgraficotalentoslinea'), 1, 138,{
   'background': '#fff',
   'border': '2px solid white',
 }, function () {
  var logo = new Image();
  logo.src = 'data:image/png;base64,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';
  doc.addImage(logo, 'JPEG', 28, 15,148,20);
  doc.text('Reportes Tecnoparque',80,48);
  $.ajax({
   dataType:'json',
   type:'post',
   url:uri+"reportes/reportetalentoslinea/"+a+"/"+l+"/"+nodo
 }).done(function(response) {

  var asss = 0;
  var ascs = 0;
  var empresario = 0;
  var emprendedor = 0;
  var investigador = 0;
  var instructor = 0;

  $.each(response, function(i, item) {
   if (item.id == 1) {
     asss +=1;
   }

   if (item.id == 2) {
     ascs +=1;
   }

   if (item.id == 3) {
     empresario +=1;
   }

   if (item.id == 4) {
     emprendedor +=1;
   }

   if (item.id == 5) {
     investigador +=1;
   }

   if (item.id == 6) {
     instructor +=1;
   }

 });


  var total = asss+ascs+empresario+emprendedor+investigador+instructor;

  var nl = $("#txtlinealt").val();
  var nombrel = $("#txtlinealt [value='"+nl+"']").text();
  doc.text('Nombre Linea:'+" "+nombrel,20,58)
  doc.text("Aprendiz SENA sin apoyo de sostenimiento"+": "+asss+" talentos", 20, 68);
  doc.text("Aprendiz SENA con apoyo sostenimiento"+": "+ascs+" talentos", 20, 78);
  doc.text("Empresario "+": "+empresario+" talentos", 20, 88);
  doc.text("Emprendedor "+": "+emprendedor+" talentos", 20, 98);
  doc.text("Investigador"+": "+investigador+" talentos", 20, 108);
  doc.text("Instructor"+": "+instructor+" talentos", 20, 118);
  doc.text("Total"+": "+total+" talentos", 20, 128);
  doc.save('Reportes_Tecnoparque.pdf');



});
});

}else{
swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");

}

});

$('#pdftalentosg').click (function () {

  var a = $("#txtanog").val();
  var g = $("#txtgestorr").val();
  var nodo = $("#txtidnodo").val()
  if (a != "") {
    var doc = new jsPDF ();
    doc.addHTML ($ ('#idgraficomelo'), 1, 138,{
      'background': '#fff',
      'border': '2px solid white',
    }, function () {
     var logo = new Image();
     logo.src = 'data:image/png;base64,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';
     doc.addImage(logo, 'JPEG', 28, 15,148,20);
     doc.text('Reportes Tecnoparque',80,48);
     $.ajax({
      dataType:'json',
      type:'post',
      url:uri+"reportes/reportetalentosgestor/"+a+"/"+g+"/"+nodo,
    }).done(function(response) {



     var asss = 0;
     var ascs = 0;
     var empresario = 0;
     var emprendedor = 0;
     var investigador = 0;
     var instructor = 0;

     $.each(response, function(i, item) {
      if (item.id == 1) {
        asss +=1;
      }

      if (item.id == 2) {
        ascs +=1;
      }

      if (item.id == 3) {
        empresario +=1;
      }

      if (item.id == 4) {
        emprendedor +=1;
      }

      if (item.id == 5) {
        investigador +=1;
      }

      if (item.id == 6) {
        instructor +=1;
      }

    });


     var total = asss+ascs+empresario+emprendedor+investigador+instructor;

     var nl = $("#txtgestorr").val();
     var nombrel = $("#txtgestorr [value='"+nl+"']").text();
     doc.text('Nombre Gestor:'+" "+nombrel,20,58)
     doc.text("Aprendiz SENA sin apoyo de sostenimiento"+": "+asss+" talentos", 20, 68);
     doc.text("Aprendiz SENA con apoyo sostenimiento"+": "+ascs+" talentos", 20, 78);
     doc.text("Empresario "+": "+empresario+" talentos", 20, 88);
     doc.text("Emprendedor "+": "+emprendedor+" talentos", 20, 98);
     doc.text("Investigador"+": "+investigador+" talentos", 20, 108);
     doc.text("Instructor"+": "+instructor+" talentos", 20, 118);
     doc.text("Total"+": "+total+" talentos", 20, 128);
     doc.save('Reportes_Tecnoparque.pdf');



   });
  });

}else{
  swal("Ups!!", "Antes de exportar se debe generar el grafico", "warning");

}

});

// add event listener to button
// document.getElementById('pdftalentos').addEventListener("click", downloadPDF);

//donwload pdf from original canvas
// function downloadPDF() {
//   var canvas = document.querySelector('#graficotalentos');
	//creates image

	// var canvasImg = canvas.toDataURL("image/jpeg", 1.0);

	//creates PDF from img
// 	var doc = new jsPDF('landscape');
//   doc.addHTML ($ ('#graficotalentos'), 1, 128,{
//         'background': '#fff',
//         'border': '2px solid white',
//       })
// 	doc.setFontSize(20);
// 	doc.text(15, 15, "Cool Chart");
// 	doc.addImage(canvasImg, 'JPEG', 10, 10, 280, 150 );
// 	doc.save('canvas.pdf');
// }

</script>
