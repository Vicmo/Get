  <title>Tecnoparque  | Nodo</title>
  <div class="right_col" role="main" >
    <div class="">
      <div class="page-title">
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="col-md-12">
          <div class="x_panel" >
          <div class="x_title">
            <h2><small>Los elementos con (*) son obligatorios</small></h2>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <br>
                <div class="clearfix" ></div>

                <div class="x_content" >
                  <br />

                  <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"
                  action="<?= URL?>nodo/modificar"  method="POST">

                  <input type="hidden" value="<?= $datos['idnodo'];?>"  id="txtidnodo" name="txtidnodo" >
                    <div class="item form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-3" for="email">Nombre<span class="required">*</span>
                      </label>
                      <div class="control-group">
                        <div class="controls">
                          <div class="col-md-3 ">

                            <input value="<?= $datos['nombrenodo'];?>"  name="txtnombre" required="" id="txtnombre" class="form-control col-md-7 col-xs-12"  >
                          </div>
                        </div>
                      </div>

                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Direccion<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                       <input required value="<?= $datos['direccion'];?>" name="txtdireccion"  id="txtdireccion" class="form-control col-md-7 col-xs-12" >
                     </div>
                   </div>
                   <div class="item form-group">
                     <label class="control-label col-md-2 col-sm-3 col-xs-3" >Departamento<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                       <select id="txtdept" class="form-control select2" name="txtdept" required onchange="metodos.getCiudad(this)">
                        <option value="">Seleccione</option>
                        <?php foreach ($depto as $key => $value): ?>
                          <option value="<?= $value['iddepartamento'] ?>"><?=$value['nombre']?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <label class="control-label col-md-2 col-sm-3 col-xs-3" >Ciudad<span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <select id="txtciudad" class="form-control select2" name="txtciudad" required>
                       <option value="">Seleccione</option>
                       <?php foreach ($ciudad as $key => $value2): ?>
                         <option value="<?= $value2['idciudad'] ?>"><?=$value2['ciudad']?></option>
                       <?php endforeach; ?>
                     </select>
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
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  </div>
</div>

</div>
</div>
</div>
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $("#txtdept").val("<?= $datos['iddepartamento'];?>");
  $("#txtciudad").val("<?= $datos['idciudad'];?>");
</script>
</script>
<script type="text/javascript"> $('#cancelar').on('click',function(){location.href = uri+"nodo/indexr";});</script>

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

$('#modificar').on('click',function(e){
   e.preventDefault();
   var form = $(this).parents('form');
   // var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
   // var email = document.getElementById("txtcorreo").value;
   if ($("#txtciudad").val() &&
   $("#txtnombre").val() &&
   $("#txtdireccion").val()
     )

    {
        swal({
     title: "¿Desea modificar el registro?",
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
      swal("Modificado", "El registro ha sido modificado correctamente", "success");

    }else{
    }

  });

   }


 });
</script>
