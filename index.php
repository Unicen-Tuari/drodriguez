<?php

  // require('libs/smarty/Smarty.class.php');
  REQUIRE_ONCE('Controller/controller.php');
  REQUIRE_ONCE('Config/config_app.php');

  // $templateEngine = new Smarty();
  // $templateEngine->debugging = false;

  $Top_Controler = new Controller();

  if(!array_key_exists(RouterConfig::$ACTION,$_REQUEST))
  {
    $Top_Controler->mostrar(RouterConfig::$ACTION_INDEX);
  }
  elseif( ($_REQUEST[RouterConfig::$ACTION] == "listado") ||  ($_REQUEST[RouterConfig::$ACTION] == "admin")){
    $Top_Controler->mostrarProductos($_REQUEST[RouterConfig::$ACTION]);
  }
  elseif(($_REQUEST[RouterConfig::$ACTION] == "categoriasDrop")  ||  ($_REQUEST[RouterConfig::$ACTION] == "categoriasListar")){
    $Top_Controler->mostrarCategorias($_REQUEST[RouterConfig::$ACTION]);
  }
  else
  {
    $Top_Controler->mostrar($_REQUEST[RouterConfig::$ACTION]);
  }

?>
