<body style="background: #238276">
  <title>Tecnoparque  | Idea</title>
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
      <div class="row" id="demo-form2">
        <div class="col-md-12">
          <div class="x_panel" >
            <div class="x_title">



             <table class="table table-striped jambo_table bulk_action" id="tabla">


              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Nombre proyecto</th>
                  <th>Aprendiz Sena</th>

                  
                  <th>Detalles</th>


                </tr>
              </thead>


              <tbody>
               <?php foreach ($idea as $value) { ?>
               <tr>

                <div class="item form-group">

                </div>

                <td><?= $value["nombres"] ?> <?= $value["apellidos"] ?></td>
                <td><?= $value["correo"] ?></td>
                <td ><?= $value["nombreproyecto"] ?></td>

                <td><?= $value["aprendizsena"] ?></td>
                

                <td>

                 <a class="btn btn-primary btn-xs"  onclick="ver(<?= $value['ididea']?>)">
                  <i class="fa fa-folder"></i> Detalles</a>  

                </td>


              </tr>
              <?php } ?>
            </tbody>


          </table>



          <div id="ver" class="modal fade" role="dialog" >
           <div class="modal-dialog modal-ms" >
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">X</button>
                 <center><h4 class="modal-title">Detalles</h4></center>
               </div>
               <div class="modal-body">
                 <div class="table-responsive" id="asd">



                  <div class="item form-group">
                   <label class="col-md-12" for="email">¿En qué estado se encuentra su propuesta?<span class="required"></span></label>
                   <label id="propuesta" class="col-md-12"  style="font-weight: normal;" for="email"><span class="required"></span></label>
                 </div>
                 <div class="item form-group">
                  <label class="col-md-12" for="email">¿Cómo está conformado su equipo de trabajo?<span class="required"></span></label>
                  <label id="equipo" class="col-md-12"  style="font-weight: normal;" for="email"><span class="required"></span></label>
                </div>
                <div class="item form-group">
                 <label class="col-md-12" for="email">Marque en cuál de las siguientes categorías clasificaría su propuesta<span class="required"></span></label>
                 <label id="categorias" class="col-md-12"  style="font-weight: normal;" for="email"><span class="required"></span></label>
               </div>
               <div class="item form-group">
                 <label class="col-md-12 col-sm-5 col-xs-12" for="email">Descripción<span class="required"></span></label>
                 <label id="descripcion" class="col-md-12"  style="font-weight: normal;" for="email"><span class="required"></span></label>
               </div>
               <div class="item form-group">
                 <label class="col-md-12 col-sm-5 col-xs-12" for="email">Objetivo General<span class="required"></span></label>
                 <label id="objetivo" class="col-md-12"  style="font-weight: normal;" for="email"><span class="required"></span></label>
               </div>
               <div class="item form-group">
                 <label class="col-md-12 col-sm-5 col-xs-12" for="email">Alcance<span class="required"></span></label>
                 <label id="alcance" class="col-md-12"  style="font-weight: normal;" for="email"><span class="required"></span></label>
               </div>



             </div>
           </div>

         </div>

       </div>
     </div>




     <script type="text/javascript">
      function ver(id){
       $.ajax({
         dataType:'json',
         type:'post',
         url:uri+"idea/veridea/"+id
       }).done(function(respuesta){
         $("#propuesta").empty();
         $("#equipo").empty();
         $("#categorias").empty();
         $("#descripcion").empty();
         $("#objetivo").empty();
         $("#alcance").empty();
         $("#propuesta").append(respuesta.pregunta1);
         $("#equipo").append(respuesta.pregunta2);
         $("#categorias").append(respuesta.pregunta3);
         $("#descripcion").append(respuesta.descripcion);
         $("#objetivo").append(respuesta.objetivo);
         $("#alcance").append(respuesta.alcance);
         $("#ver").modal();

       });

     }
   </script>