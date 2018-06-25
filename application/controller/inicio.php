<?php

class inicio extends Controller
{

 public function administrador()
 {

   require APP . 'view/_templates/headeradmin.php';
   require APP . 'view/inicio/index.php';

 }

 public function gestor()
 {

   require APP . 'view/_templates/headergestor.php';
   require APP . 'view/inicio/index.php';

 }

 public function talento()
 {

   require APP . 'view/_templates/headertalento.php';
   require APP . 'view/inicio/index.php';

 }

 public function info()
{

  require APP . 'view/_templates/headerinfocenter.php';
  require APP . 'view/inicio/index.php';

}

 public function adminodos()
{

  require APP . 'view/_templates/headeradminodos.php';
  require APP . 'view/inicio/index.php';

}

}
