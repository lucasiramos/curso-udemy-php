<?php

	require_once 'models/producto.php';

	class productoController{
		public function index(){
			require_once 'views/producto/destacados.php';	
		}

		public function gestion(){
			Utils::EsAdmin();

			$producto = new Producto();
			$productos = $producto->getAll();

			require_once 'views/producto/gestion.php';
		}

		public function crear(){
			Utils::EsAdmin();
			require_once 'views/producto/crear.php';
		}

		public function save(){
			Utils::EsAdmin();

			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
			$precio = isset($_POST['precio']) ? $_POST['precio'] : false;
			$stock = isset($_POST['stock']) ? $_POST['stock'] : false;
			$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
			//$imagen	= isset($_POST['imagen']) ? $_POST['imagen'] : false;

			if($nombre && $descripcion && $precio && $stock && $categoria){
				$producto = new Producto();

				$producto->setNombre($nombre);
				$producto->setDescripcion($descripcion);
				$producto->setPrecio($precio);
				$producto->setStock($stock);
				$producto->setCategoria_id($categoria);

				//Guardo la imagen
				if(isset($_FILES['imagen'])){
					$archivo = $_FILES['imagen'];
					$nombreArchivo = $archivo['name'];
					$mimeType = $archivo['type'];

					if($mimeType == "image/jpg" || $mimeType == "image/jpeg" || $mimeType == "image/png" || $mimeType == "image/gif"){

						//Si no está creado el directorio lo creo
						if(!is_dir('uploads/images')){
							mkdir('uploads/images', 0777, true);
						}

						move_uploaded_file($archivo['tmp_name'], 'uploads/images/'.$nombreArchivo);
						$producto->setImagen($nombreArchivo);
					}
				}

				if($_GET['id']){
					$id = $_GET['id'];
					$producto->setId($id);

					$save = $producto->edit();
				}else{
					$save = $producto->save();
				}

				if($save){
					$_SESSION['producto'] = 'completed';
				}else{
					$_SESSION['producto'] = 'failed';
				}
			}else{
				$_SESSION['producto'] = 'failed';
			}

			header("Location:".base_url."producto/gestion");
		}

		public function editar(){
			Utils::EsAdmin();

			if(isset($_GET['id'])){
				$editar = true;
				$id = $_GET['id']; 

				$producto = new Producto();
				$producto->setId($id);
				$pro = $producto->getOne();

				require_once 'views/producto/crear.php';
			}else{
				header('Location:'.base_url.'producto/gestion');
			}
		}

		public function eliminar(){
			Utils::EsAdmin();

			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$producto = new Producto();

				$producto->setId($id);
				$delete = $producto->delete();

				if($delete){
					$_SESSION['delete'] = 'completed';
				}else{
					$_SESSION['delete'] = 'failed';
				}
			}else{
				$_SESSION['delete'] = 'failed';
			}

			header('Location:'.base_url.'producto/gestion');	
		}
	}

?>