<script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
<body style="background: #238276">
  <title>Tecnoparque  | Persona</title>
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
           <table class="table table-striped jambo_table bulk_action" id="tabla">
            <br>
            <thead>
              <tr>
                <th>Identificacion - Nombres y Apellidos</th>
                <th>Tipo de Documento</th>
                <th>Tipo de Persona</th>
                <th>Correo Electrónico</th>
                <th>Teléfono/Celular</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($consulta as $value) { ?>
             <tr>
              <td><?= $value["persona"] ?></td>
              <td><?= $value["tipodoc"] ?></td>
              <td><?= $value["tipoper"] ?></td>
              <td><?= $value["correo"] ?></td>
                <?php if ($value["contacto"]==null) {
                  echo '<td>No hay información disponible</td>';
                } else {
                  echo '<td>'.$value["contacto"].'</td>';
                }?>
              <td><a href="<?php echo URL ;?>personas/edit/<?= $value["idPersona"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a></td>
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
</div>
</div>
</div>

