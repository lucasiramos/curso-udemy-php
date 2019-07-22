<!--

Creando el comando
	Primero tengo que crear el comando mediante Artisan
		php artisan make:command [Nombre Comando]
		php artisan make:command BorrarFrutasCaras

		Esto crea el comando dentro de /app/Console/Command/[Nombre Comando]

		Si abro ese archivo, en protected $signature = 'command:name'; tengo el nombre del comando, le puedo cambiar el nombre a lo que yo quiera, por ejemplo protected $signature = 'command:borrarfrutascaras';
	
	En public function handle() tengo lo que se va a ejecutar

Ejecutando en la consola para probar
	Si en el handle le pongo:
		echo "saracatanga \npindonga.com \n\n";
	y despues en consola hago:
		php artisan command:[Nombre Comando]
	Ejecuta lo que está en Handle

Ver PDF How to use Laravel Task Scheduler on Windows 10 – Quantizd.pdf
El Cron Job como tal se usa en PHP

Schedule de la tarea
	Abrir /app/Console/Kernel.php
	Buscar protected function schedule(Schedule $schedule) y ahi poner
		$schedule->command('command:[Nombre Comando]')
			->everyMinute();

	Si ejecuto en la consola php artisan schedule:run me ejecuta las actividades

	Tengo que tener un almacenamiento de las tareas que se van ejecutando en el Schedule, para esto puedo crear una tabla con el comando:
		php artisan queue:table
	Esto me crea una migración, puedo correrla con:
		php artisan migrate
	y te crea la tabla Jobs

Armar el Job
	Primero hay que armar el job con php 
		artisan make:job [Nombre Job]
		artisan make:job BorrarOtrasFrutas
	Crea el archivo en /app/Jobs/[Nombre Job].php
	Dentro de Handle está lo que se va a ejecutar



















-->