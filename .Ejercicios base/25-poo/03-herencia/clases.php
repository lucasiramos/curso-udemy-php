<?php

	class Persona{

		public $nombre;
		public $apellidos;
		public $altura;
		public $edad;

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getApellidos(){
			return $this->apellidos;
		}

		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}

		public function getAltura(){
			return $this->altura;
		}

		public function setAltura($altura){
			$this->altura = $altura;
		}

		public function getEdad(){
			return $this->edad;
		}

		public function setEdad($edad){
			$this->edad = $edad;
		}

		/////////////////////////////////////////////////////////////////

		public function Hablar(){
			return "Estoy hablando";
		}

		public function Caminar(){
			return "Estoy caminando";
		}
	}

	class Informatico extends Persona
	{

		public $lenguajes;
		public $experienciaProgramador;
		
		public function __construct(){
			$this->lenguajes = "HTML, CSS, JS";
			$this->experienciaProgramador = 10;
		}

		public function setLenguajes($lenguajes){
			$this->lenguajes = $lenguajes;
		}

		public function Programar(){
			return "Soy programador";
		}

		public function RepararPc(){
			return "Estoy reparando la Pc";
		}

		public function HacerOfimatica(){
			return "Estoy usando el Excel";
		}
	}

	class TecnicoRedes extends Informatico
	{	
		public $ExperienciaCisco;

		public function __construct(){
			parent::__construct(); // Esto llama de manera estática al Constructor de la clase padre

			$this->ExperienciaCisco = "Experto";
		}

		public function AuditaRedes(){
			return "Estoy Auditando una red";
		}
	}

?>