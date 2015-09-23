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
  else
  {
    $Top_Controler->mostrar($_REQUEST[RouterConfig::$ACTION]);
  }

?>
