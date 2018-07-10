<title>Tecnoparque | Costos</title>
  <div class="right_col" role="main">
    <div class="">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-6">
           <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal">
            <div class="item form-group" >
              <div class="item form-group" >
                <label class="control-label col-md-3" >Proyecto<span class="required"></span></label>
                <div class="col-md-6 col-sm-3 col-xs-3">
                 <select id="idproyecto" class="form-control select2">
                   <option value="">Seleccione</option>
                   <?php foreach ($proyecto as $key => $value): ?>
                     <option value="<?= $value['idproyecto'] ?>"><?= $value['codigoproyecto'] ?> / <?= $value['nombre'] ?> </option>
                   <?php endforeach; ?>
                 </select>
               </div>
             </div>
           </div>
            <div class="item form-group" >
              <label class="control-label col-md-3" >Línea<span class="required"></span></label>
              <div class="col-md-6 col-sm-3 col-xs-3">
               <input  name="txtdocumento"  id="txtlinea"  disabled="" class="form-control col-md-2">
             </div>
           </div>
          <div class="item form-group" >
            <label class="control-label col-md-3" >Gestor<span class="required"></span></label>
            <div class="col-md-6 col-sm-3 col-xs-3">
             <input  name="txtdocumento"  id="txtgestor"  disabled="" class="form-control col-md-2">
           </div>
         </div>
        <div class="item form-group" >
          <label class="control-label col-md-3" >Costo Asesoría en el Proyecto<span class="required"></span></label>
          <div class="col-md-6 col-sm-3 col-xs-3">
           <input  name="txtdocumento"  id="txtcostoa"  disabled="" class="form-control col-md-2">
         </div>
       </div>
        <div class="item form-group" >
          <label class="control-label col-md-3" >Horas de Asesoría en el Proyecto<span class="required"></span></label>
          <div class="col-md-6 col-sm-3 col-xs-3">
           <input  name="txthoras"  id="txthoras"  disabled="" class="form-control col-md-2">
         </div>
       </div>
     <div class="item form-group" >
          <label class="control-label col-md-3" >Costo Equipos en Proyecto<span class="required"></span></label>
          <div class="col-md-6 col-sm-3 col-xs-3">
           <input  name="txtdocumento"  id="txtcostoe"  disabled class="form-control col-md-2">
         </div>
     </div>
     <div class="item form-group" >
        <label class="control-label col-md-3" >Costos administrativos en proyecto<span class="required"></span></label>
        <div class="col-md-6 col-sm-3 col-xs-3">
         <input  name="txtdocumento"  id="costosadmin" disabled class="form-control col-md-2">
       </div>
   </div>
    <div class="item form-group" >
      <label class="control-label col-md-3" >Total Costo<span class="required"></span></label>
      <div class="col-md-6 col-sm-3 col-xs-3">
       <input  name="txtdocumento"  id="totalcosto" disabled="" class="form-control col-md-2">
     </div>
   </div>
  <br>
  <div class="col-md-11">
    <center><button  type="button" id="costos" class="btn btn-success">Consultar Costos</button>
    </div>
  </form>
  </div>
  <div class="col-md-6">
    <div class="x_panel" id="idgrafico">
      <canvas id="grafico"></canvas>
    </div>
  </div>
  </div>
  </div>
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
