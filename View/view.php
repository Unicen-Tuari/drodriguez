<?php
  REQUIRE_ONCE ('libs/smarty/Smarty.class.php');

  class view{
    private $smarty;
    private $error;

  function __construct(){
    $this->smarty = new Smarty();
    $this->error = array();
  }

  function show($accion){
    $this->smarty->display($accion .'.tpl');
  }
}
?>
