<?php

	class Producto{
		private $id;
		private $categoria_id;
		private $nombre;
		private $descripcion;
		private $precio;
		private $stock;
		private $oferta;
		private $fecha;
		private $imagen;
		private $db;

		public function __construct(){
			$this->db = Database::connect();
		}

		function getId(){
			return $this->id;
		}

		function setId($id){
			$this->id=$id;
		}

		function getCategoria_id(){
			return $this->categoria_id;
		}

		function setCategoria_id($categoria_id){
			$this->categoria_id=$categoria_id;
		}

		function getNombre(){
			return $this->nombre;
		}

		function setNombre($nombre){
			$this->nombre=$this->db->real_escape_string($nombre);
		}

		function getDescripcion(){
			return $this->descripcion;
		}

		function setDescripcion($descripcion){
			$this->descripcion=$this->db->real_escape_string($descripcion);
		}

		function getPrecio(){
			return $this->precio;
		}

		function setPrecio($precio){
			$this->precio=$this->db->real_escape_string($precio);
		}

		function getStock(){
			return $this->stock;
		}

		function setStock($stock){
			$this->stock=$this->db->real_escape_string($stock);
		}

		function getOferta(){
			return $this->oferta;
		}

		function setOferta($oferta){
			$this->oferta=$this->db->real_escape_string($oferta);
		}

		function getFecha(){
			return $this->fecha;
		}

		function setFecha($fecha){
			$this->fecha=$fecha;
		}

		function getImagen(){
			return $this->imagen;
		}

		function setImagen($imagen){
			$this->imagen=$imagen;
		}

		public function getAll(){
			$productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC;");

			return $productos;
		}

		public function getOne(){
			$productos = $this->db->query("SELECT * FROM productos WHERE ID = {$this->getId()}");

			return $productos->fetch_object();
		}

		public function save(){
			/*private $categoria_id;*/

			$sql = "INSERT INTO productos VALUES (NULL, '{$this->getCategoria_id()}', '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}');";
			$save = $this->db->query($sql);

			$result = false;
			if($save){
				$result = true;
			}

			return $result;
		}

		public function delete(){
			$sql = "DELETE FROM productos WHERE id={$this->id}";
			
			$delete = $this->db->query($sql);

			$result = false;
			if($delete){
				$result = true;
			}

			return $result;
		}

		public function edit(){
			$sql = "UPDATE productos SET nombre = '{$this->getNombre()}', descripcion = '{$this->getDescripcion()}', precio = {$this->getPrecio()}, stock = {$this->getStock()}, categoria_id = {$this->getCategoria_id()}";
			
			if($this->getImagen() != null){
				$sql .= ", imagen='{$this->getImagen()}'";
			}
			$sql .= " WHERE id = {$this->getId()};";
			$save = $this->db->query($sql);

			$result = false;
			if($save){
				$result = true;
			}

			return $result;
		}

	}

?>