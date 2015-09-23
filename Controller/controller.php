<?php

	REQUIRE_ONCE('View/view.php');

	class Controller{

		private $view;

		function __construct(){
			$this->view = new view();
		}

	// Mostrar el template que la accion contenga

		function mostrar($accion){
			$this->view->show($accion);
		}
	}

?>
