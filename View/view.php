<?php
  REQUIRE_ONCE ('libs/smarty/Smarty.class.php');

  class view{
    private $smarty;
    private $error;

  function __construct(){
    $this->smarty = new Smarty();
    $this->error = array();
  }


  function mostrarCat($accion, $categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display($accion .'.tpl');
  }

  function mostrarProd($accion, $productos){
    $this->smarty->assign('productos', $productos);
    $this->smarty->display($accion .'.tpl');
  }

  function mostrarProdCompleto($accion, $producto)
    {
      $this->smarty->assign("producto", $producto);
      $this->smarty->display($accion .'.tpl');
    }

  function show($accion){
    $this->smarty->display($accion .'.tpl');
  }
}
?>
