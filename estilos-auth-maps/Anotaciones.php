<!--

	Objetivos
		1) Crear un proyecto con otro diseño
		2) Tener auth con Laravel y con JWT para API
		3) Correr maps con mapas KML dinámicos

	Creé los archivos de migraciones para la BD de alquileres

	Antes de hacer la migración en sí voy a hacer auth, pero ojo:

	En Laravel 7 no se puede hacer más make:auth, se hace así:
		Ejecutar en CMD
			composer require laravel/ui
			php artisan ui vue --auth
			npm install
			npm run dev

	Una vez que hice auth, ejecuto php artisan migrate
		Pude registrar un usuario y me lo creó bien

	Aplicación de plantilla personalizada
		Creé una carpeta en /resources/views/[plantilla]
		Ahi puse la plantilla principal.blade.php con la estructura de la plantilla personalizada que quiero poner
			Las sentencias @yield('[NOMBRE]') es lo que despues se completa en las vistas que creo 

		Tengo que crear las rutas/controladores/vistas para probar
			Pude hacerlo ok!
	
	

-->