<?php

class inicio extends Controller
{

  private $mdlmodel = null;

 function __construct(){

   $this->mdlmodel = $this->loadModel("mdlnodo");
 }

 public function admin()
 {

   require APP . 'view/_templates/headeradmin.php';
   require APP . 'view/inicio/index.php';
   require APP.  'view/_footer/footerdinamizador.php';

 }

 public function gestor()
 {

   require APP . 'view/_templates/headergestor.php';
   require APP . 'view/inicio/index.php';
   require APP . 'view/_footer/footergestor.php';

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
 require APP . 'view/_footer/footeradminnodos.php';

}

}
