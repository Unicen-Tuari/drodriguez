<?php

	REQUIRE_ONCE('View/view.php');
	include_once ('model/modelo.php');

	class Controller{

		private $view;
		private $model;

		function __construct(){
			$this->view = new view();
			$this->model = new ProductosModel();
		}


	function mostrarProductos($accion){
    $this->view->mostrarProd($accion, $this->model->getProductos());
  }

	function mostrarProducto($accion, $id){
    $this->view->mostrarProdCompleto($accion, $this->model->getProducto($id));
  	}

	function mostrarCategorias($accion){
    $this->view->mostrarCat($accion, $this->model->getCategorias());
  }

	// Mostrar el template que la accion contenga

		function mostrar($accion){
			$this->view->show($accion);
		}
	}

?>
