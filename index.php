<?php

  require('libs/smarty/Smarty.class.php');
  $templateEngine = new Smarty();
  $templateEngine->debugging = false;

  if(!array_key_exists("nav",$_REQUEST)){
    $templateEngine->display('index.tpl');
  }
  elseif ($_REQUEST["nav"] === "home"){
    $templateEngine->display('home.tpl');
  }
  elseif ($_REQUEST["nav"] === "circuitos"){
    $templateEngine->display('circuitos.tpl');
  }
  elseif ($_REQUEST["nav"] === "eventos"){
    $templateEngine->display('eventos.tpl');
  }
  elseif ($_REQUEST["nav"] === "productos"){
    $templateEngine->display('productos.tpl');
  }
  elseif ($_REQUEST["nav"] === "registro"){
    $templateEngine->display('registro.tpl');
  }
  elseif ($_REQUEST["nav"] === "juegodados"){
    $templateEngine->display('juegodados.tpl');
  }

?>
