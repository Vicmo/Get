


<body style="background: #238276">
  <title>Tecnoparque  | Gestor</title>
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
              <li class="active" id="registro"><a data-toggle="tab" href="#home">Registrar Gestor</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Gestor</a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>

                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>gestor/registrar"  method="POST">

                  <input type="hidden" name="" value="<?php echo $idnodo ?>">


                  <div class="item form-group">

                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Documento<span class="required">*</span>
                      </label>
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">

                            <input onchange="validad()" name="txtdocumento" required="" id="txtdocumento" onkeypress="return valida(event)" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombres<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtnombres"  id="txtnombres" class="form-control col-md-7 col-xs-12" >
                     </div>



                   </div>
                 </div>






                 <div class="item form-group">
                   <div class="item form-group">
                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Apellidos<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtapellidos" id="txtapellidos" class="form-control col-md-7 col-xs-12" >
                     </div>

                     <div class="item form-group">
                      <div class="item form-group">
                       <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Correo<span class="required">*</span>
                       </label>
                       <div class="col-md-3 col-sm-3 col-xs-3">
                         <input onchange="validac()" required type="email" name="txtcorreo" id="txtcorreo" class="form-control col-md-7 col-xs-12" >
                       </div>
                     </div>
                   </div>







                   <div class="item form-group">
                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" >Linea<span class="required">*</span>
                      </label>


                      <div class="col-md-3 col-sm-3 col-xs-3">

                        <select id="txtlinea" class="form-control" name="txtlinea" required>
                         <option value="">Seleccione</option>
                         <?php foreach ($linea as $key => $value): ?>
                           <option value="<?= $value['idlinea'] ?>"><?=$value['nombre']?></option>
                         <?php endforeach; ?>
                       </select>
                     </div>

                     <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Salario<span class="required"> (Mensual) *</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required name="txtsalario" onkeypress="return horas(event)" id="txtsalario" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>






                 </div>
                 <div class="form-group">
                   <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
                   </div>

                 </div>
               </div>
             </div>
           </div>








           <div id="menu2" class="tab-pane fade">
             <table class="table table-striped jambo_table bulk_action" id="tabla">


              <thead>
                <tr>
                  <th>Nodo</th>
                  <th>Nombre</th>
                  <th>Presupuesto</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>


              <tbody>
               <?php foreach ($consultarnodos as $value) { ?>
               <tr>

                <div class="item form-group">

                </div>


                <td><?= $value["idnodo"] ?></td>
                <td>Tecnoparque nodo <?= $value["nombre_ciudad"] ?></td>
                <td><?= $value["presupuesto"] ?></td>

                <td>
                  <a href="<?php echo URL ;?>gestor/edit/<?= $value["idpersona"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>



                </td>
                <td>

                  <a  onclick="cambiarestadog(<?= $value["idpersona"] ?>, 0)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Eliminar</a>
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
             <center><h4 class="modal-title">Detalles del Proyecto</h4></center>
           </div>
           <div class="modal-body">
             <div class="table-responsive">
               <table id="tabla" >
                 <thead>
                 </thead>
                 <tbody id="tablap">
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
