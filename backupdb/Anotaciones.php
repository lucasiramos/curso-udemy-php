Realizar backups una vez al día
	
	Primero instalar el paquete:
		composer require spatie/laravel-backup
		composer require laravel/slack-notification-channel

		(Lo que dijo el tipo es que es recomendable hacerlo luego de crear el proyecto)

	Despues, para publicar la página de configuración, ejecutar:
		php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"

	Dentro del proyecto, en /config/backup.php está el archivo de configuración
		En 'include' => [base_path(),], está para que te haga Backup de todas las carpetas/archivos
		Hay que borrar el base_path, porque solo se va a hacer backup de BD, o sea, pasar de:

		'include' => [
			base_path(),
		],

		a

		'include' => [
		],	

	Dentro de /config/database.php, en 'mysql' => [ incluir:
		'dump' => [
           'dump_binary_path' => 'C:\wamp64\bin\mariadb\mariadb10.4.10\bin', // only the path, so without `mysqldump` or `pg_dump`
           'use_single_transaction',
           'timeout' => 60 * 5, // 5 minute timeout
        ],

        OJO! Si es en NetServices poner: '/usr/bin',
        	(se debería parametrizar con .env)

    Dentro de /app/Console/Kernel.php está para configurar cada cuanto se hace backup

    Para configurar que te mande notificaciones por Slack, dentro de /config/backup.php cambiar:
    	'notifications' => [
    		...['mail'] por ...['slack']

	    En 'slack' => [ 
	    	configurar canal (sacar Webhook de Slack)
	    	nombre: Nombre del canal (ojo los espacios en blanco, son guiones)

	    	No funcó :(

	Intentar subir Backup a Drive
		Dentro de /app/backup.php agregar el disco de Google
			'disks' => [
			    'google',                
			    'local',             
			],

		Realizar la instalación de este paquete:
			composer require nao-pon/flysystem-google-drive:~1.1