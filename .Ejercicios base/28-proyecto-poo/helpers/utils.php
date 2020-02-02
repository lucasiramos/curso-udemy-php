<?php

	class Utils{
		public static function deleteSession($nombre){
			if(isset($_SESSION[$nombre])){
				$_SESSION[$nombre] = null;
				unset($_SESSION[$nombre]);	
			}

			return $nombre;
		}

		public static function EsAdmin(){
			if(!isset($_SESSION['admin'])){
				header("Location:".base_url);
			}else{
				return true;
			}
		}

		public static function showCategorias(){
			require_once 'models/categoria.php';
			
			$traeCategorias = new Categoria();
			$categorias = $traeCategorias->getAll();

			return $categorias;
		}
	}

?>