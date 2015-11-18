<?php

	REQUIRE_ONCE('View/view.php');
	include_once ('model/modelo.php');
	include_once ('model/modeloCategoria.php');
	include_once ('model/modeloProducto.php');

	class Controller{

		private $view;
		private $modelCat;
		private $modelProd;

		function __construct(){
			$this->view = new view();
			$this->modelCat = new modeloCaregoria();
			$this->modelProd = new modeloProducto();
		}


	function mostrarProductos($accion){
    $this->view->mostrarProd($accion, $this->modelProd->getProductos());
  }

	function mostrarProducto($accion, $id){
    $this->view->mostrarProdCompleto($accion, $this->modelProd->getProducto($id));
  	}

	function mostrarCategorias($accion){
    $this->view->mostrarCat($accion, $this->modelCat->getCategorias());
  }

	function agregarCategoria(){
    	$this->modelCat->addCategoria($_REQUEST["nombre_categoria"]);
  }

	function agregarProducto(){
		 $this->modelProd->addProducto($_REQUEST["categoriasP"], $_REQUEST["nombreP"], $_REQUEST["descripcionP"], $_FILES["imagesToUpload"]);
  }

	// Mostrar el template que la accion contenga

		function mostrar($accion){
			$this->view->show($accion);
		}
	}

?>
