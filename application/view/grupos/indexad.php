<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #EDEDED">
  <title>Tecnoparque  | Grupos de Investigación</title>
  <div class="right_col" role="main" >
      <div class="page-title">
        <div class="title_left">
        </div>
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="x_panel">
        <div class="x_content">
      <div class="row" >
        <div class="col-md-12">
           <table class="table table-striped jambo_table bulk_action" id="tabla">
            <br>
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Nombre grupo</th>
                <th>Gestor</th>
                <th>Institución</th>
                <th>Clasificación</th>
                <th>Tipo articulación</th>
                <th>Observaciones</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($consulta as $value) { ?>
             <tr>
              <td><?= $value["fecha"] ?></td>
              <td><?= $value["nombre"] ?></td>
              <td><?= $value["gestor"] ?></td>
              <td><?= $value["institucion"] ?></td>
              <td><?= $value["clasificacion"] ?> </td>
              <td><?= $value["articulacion"] ?></td>
              <td><?= $value["observaciones"] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
  </div>
</div>
</div>
