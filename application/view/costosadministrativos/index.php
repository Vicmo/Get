<body style="background: #238276">
  <title>Tecnoparque  | Costos Administrativos</title>
  <div class="right_col" role="main">
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
              <table class="table table-striped jambo_table bulk_action" id="tabla" >


                <thead>
                  <tr>
                    <th >Nombre</th>
                    <th>Valor</th>

                    <th>Editar</th>

                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($consultar as $value) { ?>
                 <tr>
                  <div class="item form-group">
                  </div>
                  <td><?= $value["nombre"] ?></td>
                  <td><?= $value["valor"] ?></td>

                  <td>
                    <a href="<?php echo URL ;?>costosadministrativos/edit/<?= $value["idcostos"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                  </td>

                </tr>
                <?php } ?>
              </tbody>


            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
