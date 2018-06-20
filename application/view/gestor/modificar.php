<body style="background: #238276">
  <title>Tecnoparque  | Gestor</title>

  <div class="right_col" role="main" >
   <div class="x_title">
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

           
            <h2><small>Los elementos con (*) son obligatorios</small></h2>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                


                <div class="clearfix" ></div>
                
                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                  action="<?= URL?>gestor/modificar"  method="POST">

                  <input type="hidden" name="idc" id="idc">
                  <input type="hidden" value="<?= $datos['documento'];?>"  id="docutxt" name="docutxt" >



                  <div class="item form-group">

                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Documento<span class="required">*</span>
                      </label>  
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">

                            <input   disabled="" value="<?= $datos['documento'];?>"  name="txtdocumento" required="" id="txtdocumeto" onkeypress="return valida(event)" class="form-control col-md-7 col-xs-12"  >
                          </div>
                        </div>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombres<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required value="<?= $datos['nombres'];?>" name="txtnombres"  id="txtnombres" class="form-control col-md-7 col-xs-12" >
                     </div>
                     


                   </div>
                 </div>



                 


                 <div class="item form-group">
                   <div class="item form-group">
                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Apellidos<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtapellidos" value="<?= $datos['apellidos'];?>" id="txtapellidos" class="form-control col-md-7 col-xs-12" >
                     </div>

                     <div class="item form-group">
                      <div class="item form-group">
                       <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Correo<span class="required">*</span>
                       </label>
                       <div class="col-md-3 col-sm-3 col-xs-3">
                         <input required onchange="validac()" type="email" name="txtcorreo" value="<?= $datos['correo'];?>" id="txtcorreo" class="form-control col-md-7 col-xs-12" >
                       </div>
                     </div>
                   </div>


                   
                   
                   
                   <div class="item form-group">
                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" >Linea<span class="required">*</span>
                      </label>
                      
                      
                      <div class="col-md-3 col-sm-3 col-xs-3">

                        <select id="txtlinea" class="form-control" name="txtlinea" required>
                          <?php foreach ($linea as $key => $value): ?>
                           <option value="<?= $value['idlinea'] ?>"><?=$value['nombre'] ?></option>
                         <?php endforeach; ?>
                       </select>
                     </div>

                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Salario<span class="required"> (Mensual) *</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required value="<?= $datos['salario'];?>" name="txtsalario" onkeypress="return horas(event)" id="txtsalario" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>

                   

                   

                   
                 </div>
                 <br>
                 <div class="form-group">
                   <center><button type="button" id="modificar" class="btn btn-success">Modificar</button>       
                    <a  id="cancelar" class="btn btn-danger" type="button">Cancelar</a>  
                    
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>
</div>


</div>
</div>
</div>
</div>
<script src="<?php echo URL; ?>js/modificargestor.js"></script>
<script type="text/javascript">
  $("#txtlinea").val("<?= $datos['idlinea'];?>");
</script>
</script>
<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"gestor/index/#menu2";});</script>










