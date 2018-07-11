<title>Tecnoparque | Costos Administrativos</title>
  <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <h2><small>Los elementos con (*) son obligatorios</small></h2>
            <div class="x_content">
              <br />
              <form name="aulas" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left"  action="<?= URL?>costosadministrativos/modificar"  method="POST">

                <input type="hidden" value="<?= $datos['idcostoadministrativo'];?>"  name="txtid" >
                <input type="hidden" value="<?= $datos['nombre'];?>"  name="nombretxt" >
                <input type="hidden" value="<?= $idnodo ?>"  name="idnodo" >

                <div class="item form-group">

                  <div class="item form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Nombre<span class="required">*</span>
                    </label>

                    <div class="col-md-3 col-sm-3 col-xs-3">
                     <input name="txtnombre" value="<?= $datos['nombre'];?>" disabled id="txtnombre" required class="form-control col-md-7 col-xs-12">

                   </div>


                   <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Valor<span class="required"> (Mensual)*</span>
                   </label>

                   <div class="col-md-3 col-sm-3 col-xs-3">
                    <input name="txtvalor"  value="<?= $datos['valor'];?>" onkeypress="return valida(event)" id="txtvalor" required class="form-control col-md-7 col-xs-12">

                  </div>
                </div>
              </div>
              <br>



              <center><button type="button" id="modificar"  class="btn btn-success">Modificar</button>
                <a href="<?php echo URL; ?>costosadministrativos/index/<?php echo $idnodo ?>" id="cancelar" class="btn btn-danger" type="button">Cancelar</a>
                <br>
                <br>
              </form>
              <br/>
            </div>
        </div>

              <script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
              <script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
              <script src="<?php echo URL; ?>js/costosadministrativos.js"></script>
