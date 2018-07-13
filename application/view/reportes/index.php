<link href="<?php echo URL; ?>css/reportes/r.min.css" rel="stylesheet">
<title>Tecnoparque | Reportes</title>
  <div class="right_col" role="main">
    <input type="hidden" id="inputano" value="<?php echo date("Y"); ?>"/>
    <input type="hidden" value="" id="inputalentostodo">
    <input type="hidden" value="" id="inputalentoslinea">
    <input type="hidden" value="" id="inputalentosgestor">
    <div class="x_panel">
      <div class="x_content">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ul class="nav nav-tabs bar_tabs">
             <li class="active"><a data-toggle="tab" href="#menu2">Reporte Tecnoparque</a></li>
             <li><a data-toggle="tab" href="#home">Reporte por Línea</a></li>
             <li><a data-toggle="tab" href="#menu1">Reporte por Gestor</a></li>
           </ul>
           <div class="tab-content">
            <br>
            <div id="menu2" class="tab-pane fade in active">
              <div class="tab-content">
                <div id="menuct" class="tab-pane fade  in active">
                  <div class="col-md-12 col-sm-12 col-xs-12" id="estess">
                    <br>
                    <br>
                    <div class="col-md-6">
                     <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal">
                      <input type="hidden" value="<?php echo date("Y"); ?>" id="txtano">
                      <input type="hidden" value="<?= $idnodo ?>" id="txtidnodo">
                        <div class="item form-group" >
                         <label class="control-label col-md-3 col-sm-3 col-xs-3" for="email">Fecha Inicio<span class="required"></span>
                         </label>
                         <div class="col-md-6 col-sm-3 col-xs-3">
                           <input id="single_cal5"  class="form-control has-feedback-left">
                           <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                         </div>
                       </div>
                      <div class="item form-group" >
                       <label class="control-label col-md-3 col-sm-3 col-xs-3" for="email">Fecha Fin<span class="required"></span>
                       </label>
                       <div class="col-md-6 col-sm-3 col-xs-3">
                         <input id="single_cal6"  class="form-control has-feedback-left">
                         <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                       </div>
                     </div>
                    <div class="item form-group" >
                      <label class="control-label col-md-3" >Costo Asesoría en Proyectos<span class="required"></span></label>
                      <div class="col-md-6 col-sm-3 col-xs-3">
                       <input id="txtcostoa"  disabled="" class="form-control col-md-2">
                     </div>
                   </div>
                  <div class="item form-group" >
                    <label class="control-label col-md-3" >Costo Equipos en Proyectos<span class="required"></span></label>
                    <div class="col-md-6 col-sm-3 col-xs-3">
                     <input id="txtcostoe"  disabled class="form-control col-md-2">
                   </div>
                 </div>
                <div class="item form-group" >
                  <label class="control-label col-md-3" >Costos Administrativos en Proyectos<span class="required"></span></label>
                  <div class="col-md-6 col-sm-3 col-xs-3">
                   <input id="costosadmin" disabled class="form-control col-md-2">
                 </div>
               </div>
              <div class="item form-group" >
                <label class="control-label col-md-3" >Total Costo<span class="required"></span></label>
                <div class="col-md-6 col-sm-3 col-xs-3">
                 <input id="totalcosto" disabled="" class="form-control col-md-2">
               </div>
             </div>
           <br>
           <div class="form-group">
            <center><button type="button" id="todo" class="btn btn-success">Consultar Costos</button>
              <button type="button" id="todopdf" class="btn btn-danger">PDF</button>
              <button type="button" id="todoexcel" class="btn btn-warning">Excel</button></center>
            </div>
            <br>
            <br>
          </form>
        </div>
        <div class="col-md-6">
          <div class="x_panel" id="aaaaaa">
            <canvas id="graficoss"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div id="menutt" class="tab-pane fade">
     <hr>
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
    </div>
  </div>
</div>
<div class="col-md-12" style="visibility: hidden;">
  <table  id="tablat" >
    <thead>
      <tr>
        <th>Fecha de Inicio</th>
        <th>Fecha de Fin</th>
        <th>Costo Asesoria en Proyectos</th>
        <th>Costo Equipos en Proyectos</th>
        <th>Costo Administrativos en Proyectos</th>
        <th>Total Costo en Proyectos</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
</div>
<div id="home" class="tab-pane fade ">
  <div class="tab-content">
    <div id="costoslineatab" class="tab-pane fade in active">
     <div class="col-md-12 col-sm-12 col-xs-12" id="">
      <br>
      <br>
      <div class="col-md-6">
       <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal">
          <div class="item form-group" >
           <label class="control-label col-md-3 col-sm-3 col-xs-3" for="email">Fecha Inicio<span class="required"></span>
           </label>
           <div class="col-md-6 col-sm-3 col-xs-3">
             <input  name="txtdocumento"  id="single_cal3"  class="form-control has-feedback-left">
             <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
           </div>
         </div>
        <div class="item form-group" >
         <label class="control-label col-md-3 col-sm-3 col-xs-3" for="email">Fecha Fin<span class="required"></span>
         </label>
         <div class="col-md-6 col-sm-3 col-xs-3">
           <input  name="txtdocumento"  id="single_cal4"  class="form-control has-feedback-left">
           <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
         </div>
       </div>
      <div class="item form-group" >
        <label class="control-label col-md-3" >Linea<span class="required"></span></label>
        <div class="col-md-6 col-sm-3 col-xs-3">
         <select id="txtlinea" class="form-control" name="txtlinea" >
           <option value="">Seleccione</option>
           <?php foreach ($linea as $key => $value): ?>
             <option value="<?= $value['idlinea'] ?>"><?=$value['nombre']?></option>
           <?php endforeach; ?>
         </select>
       </div>
     </div>
    <div class="item form-group" >
      <label class="control-label col-md-3" >Costo Asesoría en Proyectos<span class="required"></span></label>
      <div class="col-md-6 col-sm-3 col-xs-3">
       <input  name="txtdocumento"  id="txtcostoalinea"  disabled="" class="form-control col-md-2">
     </div>
   </div>
  <div class="item form-group" >
    <label class="control-label col-md-3" >Costo Equipos en Proyectos<span class="required"></span></label>
    <div class="col-md-6 col-sm-3 col-xs-3">
     <input  name="txtdocumento"  id="txtcostoelinea"  disabled class="form-control col-md-2">
   </div>
 </div>
  <div class="item form-group" >
    <label class="control-label col-md-3" >Costos Administrativos en Proyectos<span class="required"></span></label>
    <div class="col-md-6 col-sm-3 col-xs-3">
     <input  name="txtdocumento"  id="costosadminlinea" disabled class="form-control col-md-2">
   </div>
 </div>
  <div class="item form-group" >
    <label class="control-label col-md-3" >Total Costo<span class="required"></span></label>
    <div class="col-md-6 col-sm-3 col-xs-3">
     <input  name="txtdocumento"  id="totalcostolinea" disabled="" class="form-control col-md-2">
   </div>
 </div>
<br>
<div class="form-group">
  <center><button type="button" id="reportes" class="btn btn-success">Consultar Costos</button>
    <button type="button" id="lineapdf" class="btn btn-danger">PDF</button>
    <button type="button" id="lineaexcel" class="btn btn-warning">Excel</button></center>
  </div>
  <br>
  <br>
</form>
</div>
<div class="col-md-6">
  <div class="x_panel" id="elementolinea">
    <canvas id="graficosslinea"></canvas>
  </div>
</div>
</div>
</div>
<div id="talentoslineatab" class="tab-pane fade">
  <hr>
  <div class="col-md-8" >
    <div class="x_panel" id="idgraficotalentoslinea">
      <canvas id="graficotalentoslinea"></canvas>
    </div>
  </div>
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
</div>
<div class="col-md-12" style="visibility: hidden;">
  <table  id="tablota" >
    <thead>
      <tr>
        <th>Fecha de Inicio</th>
        <th>Fecha  de  Fin</th>
        <th>Nombre Linea</th>
        <th>Costo Asesoria en Proyectos</th>
        <th>Costo Equipos en Proyectos</th>
        <th>Costo Administrativos en Proyectos</th>
        <th>Total Costo en Proyectos</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
</div>
<div id="menu1" class="tab-pane fade ">
  <div class="tab-content">
    <div id="tabcostosg" class="tab-pane fade in active">
     <div class="col-md-12 col-sm-12 col-xs-12" id="">
      <br>
      <br>
      <div class="col-md-6">
       <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal">
          <div class="item form-group" >
           <label class="control-label col-md-3 col-sm-3 col-xs-3" for="email">Fecha Inicio<span class="required"></span>
           </label>
           <div class="col-md-6 col-sm-3 col-xs-3">
             <input  name="txtdocumento"  id="single_cal1"  class="form-control has-feedback-left">
             <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
           </div>
         </div>
        <div class="item form-group" >
         <label class="control-label col-md-3 col-sm-3 col-xs-3" for="email">Fecha Fin<span class="required"></span>
         </label>
         <div class="col-md-6 col-sm-3 col-xs-3">
           <input  name="txtdocumento"  id="single_cal2"  class="form-control has-feedback-left">
           <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
         </div>
       </div>
      <div class="item form-group" >
        <label class="control-label col-md-3" >Gestor<span class="required"></span></label>
        <div class="col-md-6 col-sm-3 col-xs-3">
         <select id="txtgestor" class="form-control" name="txtlinea" >
           <option value="">Seleccione</option>
           <?php foreach ($gestor as $key => $value): ?>
            <option value="<?= $value['documento'] ?>"><?=$value['nombres']?> <?=$value['apellidos']?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div class="item form-group" >
      <label class="control-label col-md-3" >Costo Asesoría en Proyectos<span class="required"></span></label>
      <div class="col-md-6 col-sm-3 col-xs-3">
       <input  name="txtdocumento"  id="txtcostoagestor"  disabled="" class="form-control col-md-2">
     </div>
   </div>
  <div class="item form-group" >
    <label class="control-label col-md-3" >Costo Equipos en Proyectos<span class="required"></span></label>
    <div class="col-md-6 col-sm-3 col-xs-3">
     <input  name="txtdocumento"  id="txtcostoegestor"  disabled class="form-control col-md-2">
   </div>
 </div>
  <div class="item form-group" >
    <label class="control-label col-md-3" >Costos Administrativos en Proyectos<span class="required"></span></label>
    <div class="col-md-6 col-sm-3 col-xs-3">
     <input  name="txtdocumento"  id="costosadmingestor" disabled class="form-control col-md-2">
   </div>
 </div>
  <div class="item form-group" >
    <label class="control-label col-md-3" >Total Costo<span class="required"></span></label>
    <div class="col-md-6 col-sm-3 col-xs-3">
     <input  name="txtdocumento"  id="totalcostogestor" disabled="" class="form-control col-md-2">
   </div>
 </div>
<br>
<div class="form-group">
  <center><button type="button" id="reportess" class="btn btn-success">Consultar Costos</button>
    <button type="button" id="gestorpdf" class="btn btn-danger">PDF</button>
    <button type="button" id="gestorexcel" class="btn btn-warning">Excel</button></center>
  </div>
  <br>
  <br>
</form>
</div>
<div class="col-md-6">
  <div class="x_panel" id="elementogestor">
    <canvas id="graficossgestor"></canvas>
  </div>
</div>
</div>
</div>
<div id="tabtaleng" class="tab-pane fade ">
 <hr>
 <div class="col-md-8" >
  <div class="x_panel" id="idgraficomelo">
    <canvas id="graficomelo"></canvas>
  </div>
</div>
<div class="col-md-4">
 <div class="item form-group" >
  <label class="control-label col-md-2">Gestor<span class="required"></span></label>
  <div class="col-md-8">
   <select id="txtgestorr" class="form-control" name="txtgestor" >
     <option value="">Seleccione</option>
     <?php foreach ($gestor as $key => $value): ?>
      <option value="<?= $value['documento'] ?>"><?=$value['nombres']?> <?=$value['apellidos']?></option>
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
<br><br><br>
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
<div class="col-md-12" style="visibility: hidden;">
  <table id="tablita" >
    <thead>
      <tr>
        <th>Fecha de Inicio</th>
        <th>Fecha  de  Fin</th>
        <th>Nombre Gestor</th>
        <th>Costo Asesoria en Proyectos</th>
        <th>Costo Equipos en Proyectos</th>
        <th>Costo Administrativos en Proyectos</th>
        <th>Total Costo en Proyectos</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>
</body>
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>js/graficos.js"></script>
<script src="<?php echo URL; ?>js/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="<?php echo URL; ?>js/reportedinamizador.js"></script>
