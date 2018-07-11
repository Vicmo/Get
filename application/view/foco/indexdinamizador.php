<body style="background: #EDEDED">
  <title>Tecnoparque  | Focos</title>
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
                 <table class="table table-striped jambo_table bulk_action" id="tabla">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Linea</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($consultar as $value) { ?>
                   <tr>
                    <div class="item form-group">
                    </div>
                    <td><?= $value["nombre"] ?></td>
                    <td><?= $value["linea"] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="<?php echo URL; ?>css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>js/foco.js"></script>
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
