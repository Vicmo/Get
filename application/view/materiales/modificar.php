<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<title>Tecnoparque | Materiales</title>
<body style="background: #238276">
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">


      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2><small>Los elementos con (*) son obligatorios</small></h2>
              <div class="clearfix" ></div>

              <div class="x_content" >
                <ul class="nav navbar-right panel_toolbox">

                  <li class="dropdown">                       
                  </li>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"  action="<?= URL?>materiales/modificar"  method="POST">

               
                <input type="hidden" value="<?= $datos['idmateriales'];?>" name="txtid">
                <div class="item form-group">

                 
                  
                  <div class="item form-group">

                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Item<span class="required">*</span>
                      </label>  
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">

                            <textarea name="txtitem" required="" id="txtitem"  rows="3" class="form-control col-md-7 col-xs-12"><?= $datos['item'];?></textarea> 
                          </div>
                        </div>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Laboratorio<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <select id="txtlaboratorio" class="form-control" name="txtlaboratorio">
                         
                        <?php foreach ($labo as $key => $value): ?>
                         <option value="<?= $value['idlaboratorio'] ?>"><?=$value['nombre']?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                   


                 </div>
               </div>




               <div class="item form-group">

                <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Tipo Material<span class="required">*</span>
                  </label>  
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-3 ">

                       <select id="txttipo" class="form-control" name="txttipo" required="">
                         
                        <?php foreach ($tipo as $key => $value): ?>
                         <option value="<?= $value['idtipomaterial'] ?>"><?=$value['nombre']?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                 </div>
               </div>

               <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Cantidad<span class="required">*</span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                 <input required name="txtcantidad"   value="<?= $datos['cantidad'];?>"  id="txtcantidad" onkeypress="return cero(event)" class="form-control col-md-7 col-xs-12" >
               </div>
               


             </div>
           </div>

           <div class="item form-group">

            <div class="item form-group">
              <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Año compra<span class="required">*</span>
              </label>  
              <div class="control-group">
                <div class="controls">
                  <div class="col-md-3 ">

                    <input required name="txtano"  value="<?= $datos['anoc'];?>" id="txtano" maxlength="4" minlength="4" onkeypress="return cero(event)" class="form-control col-md-7 col-xs-12" >
                  </div>
                </div>
              </div>

              <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Horas uso<span class="required"> (Año) *</span>
              </label>
              <div class="col-md-3 col-sm-3 col-xs-3">
               <input required name="txthoras"  id="txthoras"  value="<?= $datos['horasuso'];?>" onkeypress="return horas(event)" class="form-control col-md-7 col-xs-12" >
             </div>
             


           </div>
         </div>




         <div class="item form-group">

          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Precio Unitario<span class="required">*</span>
            </label>  
            <div class="control-group">
              <div class="controls">
                <div class="col-md-3 ">

                  <input required name="txtprecio"  value="<?= $datos['preciouni'];?>" id="txtprecio"  onkeypress="return horas(event)" class="form-control col-md-7 col-xs-12" >
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      <br>



      <center><button type="submit" id="modificar"  class="btn btn-success">Modificar</button>  
        <a  id="cancelar" class="btn btn-danger" type="button">Cancelar</a>  
        <br>
        <br>
      </form>
      <br>


      <script src="<?php echo URL; ?>js/materiales.js"></script>  
      <script type="text/javascript">
        $("#txttipo").val("<?= $datos['tipomaterial'];?>");
        $("#txtlaboratorio").val("<?= $datos['laboratorio'];?>");
      </script>
      <script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"materiales/index/#menu2";});</script>
