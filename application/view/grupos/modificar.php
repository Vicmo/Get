<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #238276">
  <title>Tecnoparque  | Grupos de Investigación</title>
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
            <div class="x_title">
            
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>


                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                  action="<?= URL?>grupos/modificar"  method="POST">


                  <input value="<?php echo "$documento";?>" id="txtdocumento" name="txtgestor" type="hidden">
                    <input type="hidden" value="<?= $datos['idgrupo'];?>"  name="txtid" >




                  <div class="item form-group">

                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Fecha<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                    <input  value="<?= $datos['fecha'];?>" type="text" name="txtfecha" class="form-control has-feedback-left" id="single_cal3">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                  </div>
               
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre grupo de investigación<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                     <input  value="<?= $datos['nombre'];?>" required name="txtnombre" id="txtnombre" class="form-control col-md-7 col-xs-12" >
                   </div>

              
               </div>

           

          
                 <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Institución a la que pertenece<span class="required">*</span>
                   </label>
                   <div class="col-md-3 col-sm-3 col-xs-3">
                     <input value="<?= $datos['institucion'];?>" required="" name="txtinstitucion" id="txtinstitucion" class="form-control col-md-7 col-xs-12" >
                   </div>

                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Clasificación Colciencias<span class="required">*</span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                 <select id="txtclasificacion" class="form-control" name="txtclasificacion" required="">
                   <option value="A1">A1</option>
                   <option value="A">A</option>
                   <option value="B">B</option>
                   <option value="C">C</option>
                   <option value="Reconocido">Reconocido</option>
                   <option value="Reconocido">Reconocido</option>
                   <option value="Internacional">Internacional</option>
                   <option value="Avalado">Avalado por institución</option>
                 </select>
               </div>
                 </div>

                 <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" >Tipo Articulacion<span class="required">*</span>
                 </label>


                 <div class="col-md-3 col-sm-3 col-xs-3">

                  <select id="txtipo" class="form-control" name="txtipo" required="">
                   <option value="Proyecto I+D+I formulados">Proyecto I+D+I formulados</option>
                   <option value="Publicaciones">Publicaciones</option>
                   <option value="Articulos A">Articulos A</option>
                   <option value="Articulos B">Articulos B</option>
                   <option value="Articulos C">Articulos C</option>
                   <option value="Articulos Divulgación">Articulos Divulgación</option>
                   <option value="Solicitudes de patentes">Solicitudes de patentes</option>
                   <option value="Vigilancias Tecnológicas">Vigilancias Tecnológicas</option>
                   <option value="Prototipos">Prototipos</option>
                   <option value="Eventos científicos y afines">Eventos científicos y afines</option>

                 </select>
               </div>

               <div class="item form-group">
                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Observaciones<span class="required">*</span>
                    </label>  
                     <div class="col-md-3 ">
               <textarea  name="txtobservacion"  id="txtobservacion" required="" maxlength="200" class="form-control" rows="3"><?= $datos['observaciones'];?></textarea>
                    </div>
                  </div>
                </div>
          
                </div>

             
           

             <br>
             <div class="form-group">
             <center><button type="submit" name="modificar" id="modificar" class="btn btn-success">Modificar</button>
                 <a  id="cancelar" class="btn btn-danger" type="button">Cancelar</a>  
             </div>

               

             </div>
           </div>

<script type="text/javascript">
  var docug = $("#txtdocumento").val();
</script>

  <script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"grupos/index/"+docug+"/#menu2";});
</script>
<script src="<?php echo URL; ?>js/grupos.js"></script> 
<script type="text/javascript">
   $("#txtipo").val("<?= $datos['articulacion']?>");
 $("#txtclasificacion").val("<?= $datos['clasificacion']?>");

</script>








          