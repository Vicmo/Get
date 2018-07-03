<body style="background: #F7F7F7">
  <title>Tecnoparque  | Nodos</title>
  <div class="right_col" role="main" >

      <div class="clearfix"></div>
      <div class="row" >
        <div class="col-md-12">
          <div class="x_panel" >
            <div class="x_title">
             <ul class="nav nav-tabs bar_tabs">
              <li class="active" id="registro"><a data-toggle="tab" href="#home">Registrar Nodo</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Nodo</a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>

                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>nodo/registrar"  method="POST">

                  <input type="hidden" name="" value="<?php echo $idnodo ?>">


                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="">Nombre<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <input required name="txtnombre"  id="txtnombre" class="form-control col-md-7 col-xs-12" >
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-3">Direccion<span class="required"></span>
                      </label>
                          <div class="col-md-3 ">
                            <input  name="txtdireccion" id="txtdireccion"  class="form-control col-md-7 col-xs-12">
                          </div>
                   </div>

                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" >Departamento<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <select id="txtdept" class="form-control" name="txtdept" required onchange="metodos.getCiudad(this)">
                         <option value="">Seleccione</option>
                         <?php foreach ($consultardept as $key => $value): ?>
                           <option value="<?= $value['iddepartamento'] ?>"><?=$value['nombre']?></option>
                         <?php endforeach; ?>
                       </select>
                     </div>

                     <label class="control-label col-md-2 col-sm-3 col-xs-3" >Ciudad<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <select id="txtciudad" class="form-control" name="txtciudad" required>
                        <option value="">Seleccione</option>
                      </select>
                    </div>
                  </div>

                 <div class="form-group">
                   <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
                   </div>
             </div>
           </div>
           <div id="menu2" class="tab-pane fade">
             <table class="table table-striped jambo_table bulk_action" id="tabla">
              <thead>
                <tr>
                  <th>Nodo</th>
                  <th>Nombre</th>
                  <th>Ubicación</th>
                  <th>Dirección</th>
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
                <td>Tecnoparque nodo <?= $value["nombrenodo"] ?></td>
                <td><?= $value["nombre_ciudad"] ?></td>
                <td><?= $value["direccion"] ?></td>
                <td>
                  <a href="<?php echo URL ;?>nodo/edit/<?= $value["idnodo"] ?>/<?= $value["iddepartamento"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                </td>
                <td>
                  <a  onclick="cambiarestadog(<?= $value["idnodo"] ?>, 0)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Eliminar</a>
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

<script type="text/javascript">
  var metodos = {
        getCiudad:function(e){
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

  $('#registrar').on('click',function(e){
     e.preventDefault();
     var form = $(this).parents('form');
     var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
      if ($("#txtciudad").val() &&
      $("#txtnombre").val() &&
      $("#txtdireccion").val()

       )


      {
          swal({
       title: "¿Desea guardar el registro?",
       type: "warning",
       showCancelButton: true,
       confirmButtonColor: "#57D9D2",
       confirmButtonText: "Si",
       closeOnConfirm: false


     },
     function(isConfirm){

      if (isConfirm) {


       setTimeout(function(){

       form.submit();

       },1500 );
        swal("Registrado", "El registro ha sido guardado correctamente", "success");

      }else{
      }

    });

     }


   });
</script>
