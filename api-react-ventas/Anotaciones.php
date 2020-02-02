<!--
	Genero el proyecto con
		composer create-project laravel/laravel api-react-ventas "5.6.*" --prefer-dist
		Navegable en: http://localhost:4741/pruebas/api-react-ventas/public/

	Creo la BD vacía en PhpMyAdmin para despues generarle las tablas con las migraciones
	
	Importante!
		Los nombres de columnas de Id principal de cada tabla, se tienen que llamar "id", para que despues lo encuentre facil Eloquent

		Estructura BD
			Usuarios
			Sucursales
			Ventas
			Productos
			ProductosPorVentas
			Clientes
			Vendedores

	Importante!
		Modificar el archivo /.env y modificar los valores:
			DB_DATABASE=[nombre de la BD]
			DB_USERNAME=[usuario] ("root" en desarrollo)
			DB_PASSWORD=[pass] ("null" en desarrollo)

	Creo las migraciones para la generación de las distintas tablas:
		php artisan make:migration create_usuarios_table --create=usuarios
		php artisan make:migration create_sucursales_table --create=sucursales
		(...)
		
		// Valores float, ojo con las comas!
		// La tabla de usuarios (si es que la cambio) tiene que tener la columna "id" como Id, sino da error (y no tengo ganas de buscarlo jeje)

		Y despues php artisan migrate

	Luego, creo los Modelos para el ORM
		php artisan make:model [NombreModelo]

		OJO! Para la tabla Usuarios creé el modelo, y despues le copié el model "User" (ver cómo quedó y si funca...)

		Agregar la tabla a la cual representa ese modelo en la DB
			class [NombreModelo] extends Model
			{
				protected $table = '[Nombre de la Tabla que representa en la BD]'
			}

		Agregar las funciones del tipo "Tiene muchos", "Es tenido por"


	Creo controladores
		php artisan make:controller [FacturaController]
		Dentro de una Función del controlador proceso la información, y le paso el resultado a una vista con:
			return view('sucursales.listado', ['valorServer' => $unValorGeneradoEnPhp, 'otroValor' => 'Lalala otro valor']);
				
				'sucursales.listado' // Sucursales es una carpeta dentro de /resources/view, y tiene listado.blade.php

	Hice login con: php artisan make:auth
		En /app/Http/Controllers/Auth/RegisterController.php puedo buscar la siguiente línea y definir dónde redirige despues de registración:
			protected $redirectTo = '/';

		Igualmente, en /app/Http/Middleware/RedirectIfAuthenticated, en la función handle está donde te redirige si no estas autenticado.

		No cambiar la tabla users, es un bardo y no terminé de hacerlo..
			OJO! Estoy modificando el formulario de registro, fui agregando los campos faltantes:
			Abrir /resources/views/auth/register.blade.php
			Copiar el bloque de div <div class='form-group row' />...</div>. Todo ese bloque es una fila, con todos los estilos y elementos que usa Bootstrap.
			El siguiente paso es actualizar los nombres del div copiado
			Estoy corrigiendo para que pueda loguerse con otra tabla que no sea Users
			https://www.5balloons.info/changing-authentication-table-laravel/

			Le agregué este método al Modelo Usuario (el que yo creé)
				public function getAuthPassword(){
					return $this->passcode;
				}

			Entrar a /config/auth.php y agregué este valor a Providers
				'usuarios' => [
					'driver' => 'eloquent',
					'model' => App\Usuario::class,
				],

				O sea, quedó:

				'providers' => [
					'users' => [
						'driver' => 'eloquent',
						'model' => App\User::class,
					],
					'usuarios' => [
						'driver' => 'eloquent',
						'model' => App\Usuario::class,
					],
				],

				Lo mismo para este valor, agregar a password
					'customusers' => [
			            'provider' => 'customusers',
			            'table' => 'password_resets',
			            'expire' => 60,
			        ],

				Dentro del objeto guards/web, cambiar providers, quedaría:
					'guards' => [
						'web' => [
							'driver' => 'session',
							'provider' => 'usuarios',
						],
		
				Y en el objeto defaults, también actualizar passwords
					'defaults' => [
						'guard' => 'web',
						'passwords' => 'usuarios',
					],

			Cambiar el RegisterController en /app/Http/Controllers/Auth
				Reemplazar use App\User; por use App\Usuario;

				Actualizar función validator y create, con los valores correspondientes

	Hacer las exportaciones (SUPER FACIL) como estan en los Controladores

	IMPORTANTE! Hay que habilitar los cors!!
		Agregar un Middleware llamado Cors
		php artisan make:middleware Cors

		En ese middleware: /app/Http/Middleware/Cors.php
			public function handle($request, Closure $next)
		    {
		        return $next($request)
		            ->header('Access-Control-Allow-Origin','*')
		            ->header('Access-Control-Allow-Methods','GET, POST, PUT, DELETE, OPTIONS');
		    }

		Despues, registrar ese Middleware en /app/Http/Kernel
			En protected $routeMiddleware = [ agregar la línea:
				'cors' => \App\Http\Middleware\Cors::class

		En el archivo de routes.php, a la ruta que quiero habilitarle cors usarlo como
			Route::get('/api/hello',[
				'middleware' => 'cors',
				'uses' => 'ApiController@hello',
				'as' => 'api.hello'
			]);		












-->