<body style="background: #EDEDED">
  <title>Tecnoparque  | Laboratorio</title>
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
             <ul class="nav nav-tabs bar_tabs">
              <li id="registro" class="active"><a data-toggle="tab" href="#home">Registrar Laboratorio</a></li>
              <li id="consulta"><a data-toggle="tab" href="#menu2"> Consultar Laboratorio</a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <h2><small>Los elementos con (*) son obligatorios</small></h2>
                <div class="clearfix" ></div>
                <div class="x_content" >
                  <br />
                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>laboratorio/registrar"  method="POST">
                  <input type="hidden" name="txtidnodo" value="<?= $idnodo ?>">
                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Nombre<span class="required">*</span>
                    </label>
                    <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">
                          <input  name="txtnombre" required="" id="txtnombre" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    </div>
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
                 </div>
                 <div class="item form-group">
                   <label style="padding-right: 20px; margin-left: 10px;" class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Costos Administrativos<span  class="required">*</span>
                   </label>
                      <div class="input-group col-md-1 col-sm-1 col-xs-1">
                       <input name="txtparticipacioncostos"  onkeypress="return horas(event)" id="txtparticipacioncostos" required class="form-control col-md-2 col-xs-2">
                       <span class="input-group-addon">%</span>
                     </div>
                   </div>
               <div class="item form-group">
                 <div class="form-group">
                   <center><button type="button" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
                   </div>
                 </div>
               </div>
             </div>
             <div id="menu2" class="tab-pane fade">
               <table class="table table-striped jambo_table bulk_action" id="tabla">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Linea</th>
                    <th>Costo Administrativo</th>
                    <th>Editar</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($consultar as $value) { ?>
                 <tr>
                  <div class="item form-group">
                  </div>
                  <td><?= $value["nombre"] ?></td>
                  <td><?= $value["linea"] ?></td>
                  <td><?= $value["participacioncostos"]?>%</td>
                  <td>
                    <a href="<?php echo URL ;?>laboratorio/edit/<?= $value["idlaboratorio"] ?>/<?= $idnodo ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
<script src="<?php echo URL; ?>js/laboratorio.js"></script>
<script type="text/javascript">
 var x = location.hash;
 if (x != "") {
  $("#home").removeClass("tab-pane fade in active").addClass("tab-pane fade");
  $(x).addClass('tab-pane fade in active');
  $("#registro").removeClass();
  $("#consulta").addClass('active');
  location.hash = '';
}


//############################# Inicio método inhabilitarlab ##############################//
/*------- Confirmación de la alerta para cambiar el estado del laboratorio -------*/
function inhabilitarlab(cod,est){
swal({
  title: "¿Desea inhabilitar este registro?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#57D9D2",
  confirmButtonText: "Si",
  closeOnConfirm: false
},
function(isConfirm){
  if (isConfirm) {
   $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"laboratorio/inhabilitarlab",
    data:{id:cod , estado:est}
  }).done(function(respuesta){
    if (respuesta.v == "1") {
      setTimeout(function(){
        location.href = uri+"laboratorio/index/"+<?= $idnodo ?>;
      },1500 );{
        swal("Inhabilitado", "El registro se ha inhabilitado correctamente", "success");
          }
        }
      }).fail(function(){
    })
  }
});
}
//############################# Fin método inhabilitarlab ##############################//
</script>
