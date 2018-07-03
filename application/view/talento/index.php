<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
      <script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
  <link href="<?php echo URL; ?>css/reportes/r.min.css" rel="stylesheet">
<body style="background: #238276">
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
            <div class="x_title">
             <ul class="nav nav-tabs">
              <li id="registro" class="active"><a data-toggle="tab" href="#home">Registrar Talento</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Talento</a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>
                <br>



                <div class="clearfix" ></div>
                <h3 ><small>Datos Personales</small></h2>
                  <div class="x_content" >
                    <br />

                    <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                    action="<?= URL?>talento/registrar"  method="POST">

                     <input value="<?php echo "$documento";?>" id="gestor" name="gestortxt" type="hidden">
                    <div class="item form-group">

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-3" >Tipo Documento<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <select id="txttipodocumento"   class="form-control" name="txttipodocumento" required="">
                            <option value="">Seleccione</option>
                            <?php foreach ($tipodoc as $key => $value): ?>
                             <option value="<?= $value['idtipodocumento'] ?>"><?=$value['nombre'] ?></option>
                           <?php endforeach; ?>
                         </select>
                       </div>




                       <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Documento<span class="required">*</span>
                       </label>
                       <div class="control-group">
                        <div class="controls">
                         <div class="col-md-3 col-sm-3 col-xs-3">

                          <input  name="txtdocumento" required="" maxlength="18" id="txtdocumeto" onchange="validad()" onkeypress="return valida(event)" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item form-group">

                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                    </label>

                    <div class="col-md-3 col-sm-3 col-xs-3">
                     <input name="txtnombre"  id="txtnombre" required class="form-control col-md-7 col-xs-12">

                   </div>


                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Apellidos<span class="required">*</span>
                   </label>

                   <div class="col-md-3 col-sm-3 col-xs-3">
                    <input name="txtapellido"   id="txtapellidos" required class="form-control col-md-7 col-xs-12">

                  </div>
                </div>
              </div>



              <div class="item form-group">
                <div class="item form-group">
                  <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Fecha de Nacimiento<span class="required">*</span>
                  </label>
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-3 ">
                        <input type="text" name="fecha_naci" class="form-control has-feedback-left" id="single_cal3">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Correo<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input type="email" required id="txtcorreo" onchange="validac()" class="form-control col-md-7 col-xs-12" name="txtcorreo">
                     </div>

                   </div>
                 </div>
               </div>
             </div>


             <div class="item form-group">
               <div class="item form-group">
                 <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Genero<span class="required">*</span>
                 </label>

                 <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 7px">

                  Masculino: <input type="radio" class="flat" name="txtgenero"  value="1"  checked=""/>
                  Femenino: <input type="radio" class="flat" name="txtgenero" value="0" />


                </div>

                <div class="item form-group">
                  <div class="item form-group">
                   <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Tipo Talento<span class="required">*</span>
                   </label>

                   <div class="col-md-3 col-sm-3 col-xs-3">

                    <select id="txttipotalento" class="form-control" name="txttipotaleto" required>
                     <option value="">Seleccione</option>
                     <?php foreach ($tipotale as $key => $value): ?>
                       <option value="<?= $value['idtipotalento'] ?>"><?=$value['nombre'] ?></option>
                     <?php endforeach; ?>
                   </select>
                 </div>
               </div>
             </div>


             <div class="item form-group">
              <div class="item form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-3" >Ocupación<span class="required">*</span>
                </label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <select id="txtocupacion" class="form-control" required name="txtocupacion">
                    <option value="">Seleccione</option>
                    <?php foreach ($ocu as $key => $value): ?>
                     <option value="<?= $value['idocupacion'] ?>"><?=$value['nombre'] ?></option>
                   <?php endforeach; ?>
                 </select>
               </div>

               <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Descripción Ocupación<span class="required"></span>
               </label>
               <div class="col-md-3 col-sm-3 col-xs-3">
                <input name="txtdes_ocu"  id="txtnum_fijo" class="form-control col-md-7 col-xs-12" >
              </div>

            </div>
          </div>


          <div class="item form-group">
            <div class="item form-group">
             <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Numero Celular<span class="required">*</span>
             </label>
             <div class="col-md-3 col-sm-3 col-xs-3">
               <input  id="txtnum_cel" onkeypress="return valida(event)"  minlength="10" maxlength="10" required class="form-control col-md-7 col-xs-12" name="txtnum_cel">
             </div>
             <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Numero Fijo<span class="required"></span>
             </label>
             <div class="col-md-3 col-sm-3 col-xs-3">
              <input name="txtnum_fijo"  id="txtnum_fijo"   class="form-control col-md-7 col-xs-12" >
            </div>
          </div>
        </div>
          <div class="item form-group">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Departamento de Residencia<span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-3 col-xs-3">
             <select id="txtdepto" class="form-control" name="txtdepto" onchange="metodos.getCiudad(this)">
               <option value="">Seleccione</option>
               <?php foreach ($depto as $key => $value): ?>
                 <option value="<?= $value['iddepartamento'] ?>"><?=$value['nombre'] ?></option>
               <?php endforeach; ?>
             </select>
           </div>
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Ciudad de Residencia<span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-3 col-xs-3">
             <select id="txtciudad" class="form-control" name="txtciudad" required>
               <option value="">Seleccione la Ciudad</option>
             </select>
           </div>
         </div>

        <div class="item form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Estrato<span class="required">*</span>
          </label>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <input required name="txtestrato" maxlength="1" onkeypress="return valida(event)" id="txtestrato" class="form-control col-md-7 col-xs-12" >
          </div>
          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Dirección de Residencia<span class="required"></span>
          </label>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <input name="txtdireccion"  id="txtdireccion"  class="form-control col-md-7 col-xs-12" >
          </div>
        </div>
      <hr>
      <h3 ><small>Estudios</small></h2>
        <div>
         <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Institución<span class="required">*</span>
         </label>
         <div class="col-md-3 col-sm-3 col-xs-3">
          <input name="txtinstitucion"  required
          id="txtinstucion" class="form-control col-md-7 col-xs-12" >
        </div>

        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nivel académico<span class="required">*</span>
        </label>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <select id="txtnivel_aca" class="form-control" name="txtnivel_aca" required>
           <option value="">Seleccione</option>
           <?php foreach ($nivelaca as $key => $value): ?>
             <option value="<?= $value['idnivelacademico'] ?>"><?=$value['nombre'] ?></option>
           <?php endforeach; ?>
         </select>
       </div>
     </div>

   </div>


   <div class="item form-group">
    <div class="item form-group">
      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Título Obtenido<span class="required">*</span>
      </label>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <input name="txttitu_obte"  id="txttitu_obte" required class="form-control col-md-7 col-xs-12" >

      </div>

      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Año terminación<span class="required">*</span>
      </label>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <input name="txtaño_termi" maxlength="4" onkeypress="return valida(event)" minlength="4" maxlength="4" id="txtaño_termi" required class="form-control col-md-7 col-xs-12" >
      </div>
    </div>
  </hr>
  <br>
  <div class="form-group">
   <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
   </div>


 </div>
</div>
</div>
</div>








<div id="menu2" class="tab-pane fade">
 <table class="table table-striped jambo_table bulk_action" id="reportesgestorp">


  <thead>
    <tr>
      <th>Tipo Documento</th>
      <th>Documento</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Tipo Talento</th>
      <th>Correo</th>
      <th>Contacto</th>
      <th>Detalles</th>
      <th>Editar</th>
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


    <td>

     <a class="btn btn-primary btn-xs"  onclick="ver(<?= $value['documento']?>)">
      <i class="fa fa-folder"></i> Detalles</a>

    </td>

    <td>
      <a href="<?php echo URL ;?>talento/edit/<?= $value["documento"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>

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
         <center><h4 class="modal-title">Detalles del Talento</h4></center>
       </div>
       <div class="modal-body">
         <div class="table-responsive">
           <table id="tabla2" >
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
</div>


</div>
</div>
</div>
</div>
<script src="<?php echo URL; ?>js/talento.js"></script>
<!-- <script type="text/javascript"> $('#txtdepto').select2();</script> -->
<script type="text/javascript">
var metodos = {
      getCiudad:function(e){
        swal('Exito', 'Exitosos', 'success');
      let id = $(e).val();
      $.ajax({
          dataType:'json',
          type:'post',
          url:uri+'/nodo/getciudad/'+id
        }).done(function(res){
            $('#txtciudad').empty();
            $('#txtciudad').append('<option value="null">--Seleccione la Ciudad--</option>')
            $.each(res, function(i, e) {
                $('#txtciudad').append('<option  value="'+e.idciudad+'">'+e.ciudad+'</option>');
          })
      });
  }
}


 var x = location.hash;
 if (x != "") {
  $("#home").removeClass("tab-pane fade in active").addClass("tab-pane fade");
  $(x).addClass('tab-pane fade in active');
  $("#registro").removeClass();
  $("#consulta").addClass('active');
  location.hash = '';
}

$('#txtdepto').select2({
  tags:true,
})
</script>
