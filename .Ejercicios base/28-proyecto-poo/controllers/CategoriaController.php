<?php

	require_once 'models/categoria.php'; 

	class categoriaController{
		public function index(){
			Utils::EsAdmin();
			$traeCategorias = new Categoria();

			$categoria = $traeCategorias->getAll();

			require_once 'views/categoria/index.php';
		}

		public function crear(){
			Utils::EsAdmin();
			require_once 'views/categoria/crear.php';			
		}

		public function save(){
			Utils::EsAdmin();

			if(isset($_POST) && isset($_POST['nombre'])){
				$categoria = new Categoria();
				$categoria->setNombre($_POST['nombre']);
				$categoria->save();
			}
		
			header("Location:".base_url."categoria/index");
		}
	}

?>