<?php
  REQUIRE_ONCE ('libs/smarty/Smarty.class.php');

  $smarty = new Smarty();
  
  if(!$_REQUEST){
    $smarty->display('Index.tpl');
  }else{
    $smarty->display($_REQUEST["nav"]);
  }
?>
