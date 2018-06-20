<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #238276">
  <title>Tecnoparque  | Personas</title>
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
          
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>


                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left input_mask" action="<?= URL?>personas/modificar"  method="POST">
                   <input type="hidden" value="<?= $datos['idPersona'];?>"  name="txtid" >

                   <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Documento de Identidad<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?= $datos['numeroIdentificacion'];?>" class="form-control" id="txtdoc" class="form-control col-md-11 col-xs-12">
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-6" for="first-name">Tipo Documento<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <select id="txttipodoc" class="form-control" name="txttipodoc" required>                 
                          <?php foreach ($tipodoc as $key => $value): ?>
                            <option value="<?= $value['idtipodoc'] ?>"><?=$value['nombre'] ?></option>
                          <?php endforeach; ?>
                        </select>
                        </div>
                      </div>  
                    </div>
                    <div class="col-md-6">                  
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-6" for="first-name">Tipo Persona<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input required value="<?= $datos['apellidos'];?>" class="form-control" id="txtape" class="form-control col-md-6 col-xs-6">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-6" for="first-name">Nombres<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input required value="<?= $datos['nombres'];?>" class="form-control" id="txtnom" class="form-control col-md-6 col-xs-6">
                      </div>
                    </div>  
                    </div>
                    <div class="col-md-6">                  
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-6" for="first-name">Apellidos<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input required value="<?= $datos['apellidos'];?>" class="form-control" id="txtape" class="form-control col-md-6 col-xs-6">
                      </div>
                    </div>
                  </div>
                </div>                

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-6" for="first-name">Correo Electrónico<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input required value="<?= $datos['nombres'];?>" class="form-control" id="txtnom" class="form-control col-md-6 col-xs-6">
                      </div>
                    </div>  
                    </div>
                    <div class="col-md-6">                  
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-6" for="first-name">Contacto<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input required value="<?= $datos['apellidos'];?>" class="form-control" id="txtape" class="form-control col-md-6 col-xs-6">
                      </div>
                    </div>
                  </div>
                </div>

            <div class="form-group">
             <center><button type="submit" name="modificar" id="modificar" class="btn btn-success">Modificar</button>
                 <a  id="cancelar" class="btn btn-danger" type="button">Cancelar</a>  
             </div>


           </div>
         </div>
       </div>
     </div>
<script type="text/javascript">
  var docug = $("#txtdocumento").val();
</script>
  <script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"vigilancia/index/"+docug+"/#menu2";});


</script>
<script src="<?php echo URL; ?>js/vigilancia.js"></script> 