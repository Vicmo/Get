<title>Tecnoparque | Inicio</title>
<body style="background: #EDEDED">

    <div class="right_col" role="main" id="demo-form2" style="background: #EDEDED">
        <div class="row" >
            <div class="x_panel" style="background: #EDEDED">
                <?php echo "Bienvenido Señor(a)".$rol ?>
                <img src="<?php echo URL; ?>img/fondo3.jpg" style="width: 85%;margin-left: 8%">
                <form name="aulas" id="demo-form2"   class="form-horizontal form-label-left" action="<?= URL?>nodo/selectnodo"  method="get">
                 <select id="txttipo" class="form-control" name="idnodo" >
                          <option value="">Seleccione nodo</option>
                          <?php foreach ($nodos as $key => $value): ?>
                            <option value="<?= $value['idnodo'] ?>"><?=$value['nodo']?></option>
                          <?php endforeach; ?>
                  </select>
                  <button type="submit" class="btn btn-success"> Enviar</button>
               </form>
            </div>
        </div>
    </div>
</body>
