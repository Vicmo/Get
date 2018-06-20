<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #238276">
  <title>Tecnoparque  | Edt</title>
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
             <ul class="nav nav-tabs">
              <li id="registro" class="active"><a data-toggle="tab" href="#home">Registrar Edt</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Edt </a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>


                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" 
                  action="<?= URL?>edt/registrar"  method="POST">
                  <input value="<?php echo "$documento";?>" id="gestor" name="txtgestor" type="hidden">



                  <div class="item form-group">

                    <div class="item form-group">


                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Fecha<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="text" name="txtfecha" class="form-control has-feedback-left" id="single_cal3">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtnombre" type="data-toggle" id="txtnombre" class="form-control col-md-7 col-xs-12" >
                     </div>
                     
                     






                   </div>
                 </div>

                 <div class="item form-group">
                   <div class="item form-group">
                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Empresa<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtempresa" id="txtempresa" class="form-control col-md-7 col-xs-12" >
                     </div>

                     <div class="item form-group">
                      <div class="item form-group">
                       <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Contacto<span class="required">*</span>
                       </label>
                       <div class="col-md-3 col-sm-3 col-xs-3">
                         <input  name="txtcontacto" id="txtcontacto" required="" class="form-control col-md-7 col-xs-12" >
                       </div>
                     </div>
                   </div>

                   <div class="item form-group">
                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Correo<span class="required">*</span>
                      </label>  
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">

                            <input  name="txtcorreo" required="" id="txtcorreo" type="email" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Telefono<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txttelefono" id="txttelefono" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>






                 </div>
                 <div class="item form-group">
                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Observaciones<span class="required">*</span>
                    </label>  
                    <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">

                          <textarea required name="txtobservaciones" maxlength="200"  id="txtdes" class="form-control" rows="3"></textarea>




                        </div>
                      </div>
                    </div>


                  </div>


                  <hr>

                  <br>
                  <h2>Asistentes</h2>



                </div>

                <div class="item form-group">
                 <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Empleados<span class="required"></span>
                 </label>
                 <div class="col-md-1 col-sm-3 col-xs-3">
                   <input  name="txtempleados" onkeypress="return cero(event)" id="txtempleados" class="form-control col-md-7 col-xs-12" >
                 </div>
                 <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Instructores<span class="required"></span>
                  </label>  
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-1 ">

                        <input   name="txtinstructores" id="txtinstructores" onkeypress="return cero(event)" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  </div>

                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Aprendices<span class="required"></span>
                  </label>
                  <div class="col-md-1 col-sm-3 col-xs-3">
                   <input  name="txtaprendices" onkeypress="return cero(event)" id="txtaprendices" class="form-control col-md-7 col-xs-12" >
                 </div>

                 <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Publico<span class="required"></span>
                  </label>  
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-1 ">

                        <input   name="txtpublico"  id="txtpublico" onkeypress="return cero(event)" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  </div>


                </div>

              </div>

            </div>

            <div class="item form-group">






            </div>
            <div class="form-group">
             <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
             </div>

           </div>
         </div>
       </div>
     </div>








     <div id="menu2" class="tab-pane fade">
      <br>
       <table class="table table-striped jambo_table bulk_action" id="tabla">


        <thead>
          <tr>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Empresa</th>
            <th>Contacto</th>
            <th>Correo</th>

            <th>Detalles</th>
            <th>Editar</th>

          </tr>
        </thead>


        <tbody>
         <?php foreach ($consulta as $value) { ?>
         <tr>

          <div class="item form-group">

          </div>


          <td><?= $value["fecha"] ?></td>
          <td><?= $value["nombre"] ?></td>
          <td><?= $value["empresa"] ?> </td>
          <td><?= $value["contacto"] ?></td>
          <td><?= $value["correo"] ?></td>








          <td>

           <a class="btn btn-primary btn-xs"  onclick="ver(<?= $value['idedt']?>)">
            <i class="fa fa-folder"></i> Detalles</a>  

          </td>

        <td>
            <a href="<?php echo URL ;?>edt/edit/<?= $value["idedt"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>



          </td> 


        </tr>
        <?php } ?>
      </tbody>


    </table>
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
         <center><h4 class="modal-title">Detalles del EDT</h4></center>
       </div>
       <div class="modal-body">
         <div class="table-responsive">
           <table id="tabla" >
             <thead>
             </thead>            
             <tbody id="tablaedt">
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
</div>
</div>


</div>
</div>
</div>
</div>



         
<script src="<?php echo URL; ?>js/edt.js"></script> 
<script type="text/javascript">
 var x = location.hash;
 if (x != "") {
  $("#home").removeClass("tab-pane fade in active").addClass("tab-pane fade");
  $(x).addClass('tab-pane fade in active');
  $("#registro").removeClass();
  $("#consulta").addClass('active');
  location.hash = '';
}
</script>

