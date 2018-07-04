  <body style="background: #EDEDED">
      <script src="<?php echo URL; ?>css/vendors/parsleyjs/dist/melo.js"></script>
  <link href="<?php echo URL; ?>css/reportes/r.min.css" rel="stylesheet">
    <title>Tecnoparque  | Proyecto</title>
    <div class="right_col" role="main" id="demo-form2">
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
               <table class="table table-striped jambo_table bulk_action" id="reportesadmin">
                <thead>
                  <tr>
                    <th>Código de Proyecto</th>
                    <th>Nombre</th>
                    <th>Línea</th>
                    <th>Gestor</th>
                    <th>Estado</th>
                    <th>Descripción</th>
                    <th>Revisado Final</th>
                    <th>Proyecto articulado con Tecnoacademia</th>
                    <th>Aprendiz con apoyo de sostenimiento</th>
                    <th>Aprendiz sin apoyo de sostenimiento</th>
                    <th>Articulado con CT+i</th>
                    <th>Nombre del actor CT+i</th>
                    <th>Dirigido a área de emprendimiento SENA</th>
                    <th>Recibido a través del área de emprendimiento SENA</th>
                    <th>Dinero de regalías</th>
                    <th>Acompañamiento proceso de patente</th>
                    <th>Patente publicada</th>
                    <th>Talentos</th>
                    <th>Detalles</th>
                    <th>Editar</th>
                    <th>Entregables</th>
                  </tr>
                </thead>


                <tbody>
                 <?php foreach ($proyecto as $value) { ?>
                 <tr>

                  <div class="item form-group">

                  </div>


                  <td><?= $value["codigoproyecto"] ?></td>
                  <td style="width: 15%"><?= $value["nombre"] ?></td>

                  <td><?= $value["linea"] ?></td>
                  <td><?= $value["nombresg"] ?> <?= $value["apellidosg"] ?></td>
                  <td><?= $value["estado"] ?></td>
                  <td><?= $value["descripcion"] ?></td>
                  <td>
                    <?php if($value["revisadofinal"]== 'Por evaluar') { ?>
                    <div class="" style="cursor: default;">
                      Por evaluar
                    </div>
                    <?php }else if($value["revisadofinal"]== 'Aprobado'){ ?>
                    <div class="" style="cursor: default;">
                      Aprobado
                    </div>
                    <?php }else { ?>
                    <div class=""  style="cursor: default;">
                      No aprobado
                    </div>
                    <?php } ?>
                    </td>
                    <td><?= $value["pro_art_tecnoaca"] ?></td>
                    <td><?= $value["apre_apoyo"] ?></td>
                    <td><?= $value["apre_sinapoyo"] ?></td>
                    <td><?= $value["arti_cti"] ?></td>
                    <td><?= $value["nom_act_cti"] ?></td>
                    <td><?= $value["diri_ar_emp"] ?></td>
                    <td><?= $value["reci_ar_emp"] ?></td>
                    <td><?= $value["dine_rega"] ?></td>
                    <td><?= $value["aco_pro_pate"] ?></td>
                    <td><?= $value["pata_publi"] ?></td>
                  <td>
                   <a class="btn btn-primary btn-xs"  onclick="vert(<?= $value['idproyecto']?>)">
                    <i class="fa fa-users"></i> Talentos</a>
                  </td>
                  <td>
                   <a class="btn btn-primary btn-xs"  onclick="ver(<?= $value['idproyecto']?>)">
                    <i class="fa fa-folder"></i> Detalles</a>
                  </td>
                  <td>
                    <a href="<?php echo URL ;?>proyecto/edit2/<?= $value["idproyecto"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                  </td>
                  <td>
                    <a href="<?php echo URL ;?>proyecto/entregablesa/<?= $value["idproyecto"] ?>" class="btn btn-warning btn-xs"><i class="fa fa-book"></i> Entregables</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>


            </table>





            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div id="ver" class="modal fade" role="dialog" >
             <div class="modal-dialog modal-ms" >
               <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">X</button>
                   <center><h4 class="modal-title">Detalles del Proyecto</h4></center>
                 </div>
                 <div class="modal-body">
                   <div class="table-responsive">
                     <table id="tablad" >
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


           <div id="vert" class="modal fade" role="dialog" >
            <div class="modal-dialog modal-sm" style="width: 700px">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">X</button>
                  <center><h4 class="modal-title">Talentos</h4></center>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <table id="tablsa" class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title">Documento</th>
                          <th class="column-title">Nombre</th>
                           <th class="column-title">Correo</th>
                           <th class="column-title">Celular</th>
                        </tr>
                      </thead>
                      <tbody id="tablatalen">
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
  <script src="<?php echo URL; ?>js/proyecto.js"></script>
  <script type="text/javascript"> $('#txtcedulalider').select2();</script>
  <script type="text/javascript"> $('#txttalento').select2();</script>

  <script type="text/javascript">
    function vert(id){
      $.ajax({
        dataType:'json',
        type:'post',
        url:uri+"proyecto/detalletalen/"+id
      }).done(function(respuesta){

        $("#tablatalen").empty()

        if (respuesta != null ) {
          console.log(respuesta);
          $.each(respuesta, function(i, item) {
            $("#tablatalen").append("<tr><td>"+item.documento+
              "</td><td>"+item.nombres+" "+item.apellidos+"</td><td>"+item.correo+"</td><td>"+item.numerocelular+"</td></tr>");
          });
          $("#vert").modal();
        }
      });

    }
  </script>
