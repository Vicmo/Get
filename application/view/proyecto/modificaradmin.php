<body style="background: #EDEDED">
  <title>Tecnoparque  | Proyecto</title>
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
             <ul class="tab-content">
               <div id="home" class="tab-pane fade in active">

                <br>
                <h2><small>Los elementos con (*) son obligatorios</small> </h2>
                <br>


                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>proyecto/modificaradmin"  method="POST">


                  <input value="<?= $datos['idgestor'];?>"  name="gestortxt"  id="gestortxt" type="hidden">
                  <input value="<?= $datos['linea'];?>"  id="lineatxt" type="hidden">
                  <input value="<?= $datos['idproyecto'];?>"  name="txtidproyecto"  type="hidden">
                  <input value="<?= $idnodo;?>"  name="txtidnodo"  type="hidden">


                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">ID<span class="required">*</span>
                    </label>
                    <div class="control-group">
                      <div class="controls">
                        <div class="col-md-3 ">

                          <input  name="txtid" required="" disabled="" value="<?= $datos['id'];?>" id="txtid"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input name="txtnombre" value="<?= $datos['nombre'];?>" disabled onkeypress="return validas(event)" id="txtnombre" required class="form-control col-md-7 col-xs-12">
                     </div>
                   </div>
                 </div>
                 <div class="item form-group">
                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" >Gestor<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <select id="txtgestor" class="form-control" name="txtgestor" required >
                      </select>
                    </div>
                    <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Linea<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                     <input  name="txtlinea" id="txtlinea" disabled="" class="form-control col-md-7 col-xs-12" >
                   </div>
                 </div>
               </div>

                <div class="form-group">
                 <center><button type="button" id="modificar" class="btn btn-success">Modificar</button>

                  <a href="<?php echo URL; ?>proyecto/index/<?php echo $idnodo ?>" id="cancelar" class="btn btn-danger" type="button">Cancelar</a>

                </div>

            </div>
          </div>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">




        </div>
      </div>
    </div>
  </div>


</div>
</div>
</div>
</div>


<script type="text/javascript">


  var g = $("#gestortxt").val();
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"gestor/consultalinea/"+g
  }).done(function(respons) {
    $("#txtlinea").val(respons.nombre);
  });


  var l = $("#lineatxt").val();
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"proyecto/consultagestorl/"+l
  }).done(function(response) {
    $.each(response, function(i, item) {
      $("#txtgestor").append('<option value="'+item.idgestor+'">'+item.nombres+" "+item.apellidos+'</option>')
    });
    $("#txtgestor").val("<?= $datos['idgestor'];?>");
  });


</script>

<script src="<?php echo URL; ?>js/modificarproyectoa.js"></script>
