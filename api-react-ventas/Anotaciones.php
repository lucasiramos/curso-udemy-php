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

	Hacer las exportaciones (es SUPER FACIL) como estan en los Controladores

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

	Voy a intentar hacer autenticación con JWT (JSON Web Token), para autenticar a APIs (como las que voy a usar en React)
		Voy a seguir los pasos de esta página:
			https://blog.nexlab.dev/tech/2019/05/30/utiliza-jwt-con-laravel-para-apis.html

		Primero, instalar con composer el módulo de JWT:
			composer require tymon/jwt-auth:dev-develop --prefer-source

		Generar el archivo de configuración con:
			php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
		
		Generar una llave con: 
			php artisan jwt:secret

		Agregar estos métodos al Modelo de User:
			public  function  getJWTIdentifier() {
				return  $this->getKey();
			}

			public  function  getJWTCustomClaims() {
				return [];
			}

		Cambiar en /config/auth.php:
			'defaults' => [
				'guard' => 'api',
				'passwords' => 'users',
			],
			(...)
			'guards' => [
				'api' => [
					'driver' => 'jwt',
					'provider' => 'users',
				],
			],

		Luego se debe crear el controlador para manejar estas situaciones:
			php artisan make:controller "Api/AuthController"

			En este controlador pegar este código
				use App\Http\Requests\RegisterAuthRequest;
				use App\User;
				use Illuminate\Http\Request;
				use  JWTAuth;
				use Tymon\JWTAuth\Exceptions\JWTException;
				class  AuthController extends  Controller {
					public  $loginAfterSignUp = true;

					public  function  register(Request  $request) {
						$user = new  User();
						$user->name = $request->name;
						$user->surname = $request->surname;
						$user->email = $request->email;
						$user->password = bcrypt($request->password);
						$user->save();

						if ($this->loginAfterSignUp) {
							return  $this->login($request);
						}

						return  response()->json([
							'status' => 'ok',
							'data' => $user
						], 200);
					}

					public  function  login(Request  $request) {
						$input = $request->only('email', 'password');
						$jwt_token = null;
						if (!$jwt_token = JWTAuth::attempt($input)) {
							return  response()->json([
								'status' => 'invalid_credentials',
								'message' => 'Correo o contraseña no válidos.',
							], 401);
						}

						return  response()->json([
							'status' => 'ok',
							'token' => $jwt_token,
						]);
					}

					public  function  logout(Request  $request) {
						$this->validate($request, [
							'token' => 'required'
						]);

						try {
							JWTAuth::invalidate($request->token);
							return  response()->json([
								'status' => 'ok',
								'message' => 'Cierre de sesión exitoso.'
							]);
						} catch (JWTException  $exception) {
							return  response()->json([
								'status' => 'unknown_error',
								'message' => 'Al usuario no se le pudo cerrar la sesión.'
							], 500);
						}
					}

					public  function  getAuthUser(Request  $request) {
						$this->validate($request, [
							'token' => 'required'
						]);

						$user = JWTAuth::authenticate($request->token);
						return  response()->json(['user' => $user]);
					}
				}

		Crear las rutas en /routes/api.php
			// estas rutas se pueden acceder sin proveer de un token válido.
			Route::post('/login', 'AuthController@login');
			Route::post('/register', 'AuthController@register');
			// estas rutas requiren de un token válido para poder accederse.
			Route::group(['middleware' => 'jwt.auth'], function () {
				Route::post('/logout', 'AuthController@logout');
			});

		Importante 1!! 
			Agregar en el Modelo de usuario estas lineas:
				use Tymon\JWTAuth\Contracts\JWTSubject;
				class User extends Authenticatable implements JWTSubject

		Importante 2!!
			Agregar en /app/Http/Kernel.php, en protected $routeMiddleware = [
				'jwt.auth' => \Tymon\JWTAuth\Middleware\GetUserFromToken::class,
        		'jwt.refresh' => \Tymon\JWTAuth\Middleware\RefreshToken::class,

		Puedo crear en PostMan un ejemplo:
			En AuthController tengo este modelo de datos para crear un nuevo registro (en public function register):
				$user = new User();
				$user->name = $request->name;
				$user->descripcion = $request->descripcion;
				$user->admin = "0";
				$user->email = $request->email;
				$user->password = bcrypt($request->password);

			Entonces, en PostMan puedo crear un nuevo POST:
				url: http://localhost:4741/curso-udemy-php/api-react-ventas/public/api/register 
					(chequear ruta)

				Parámetros
					Debajo de la caja donde pongo la URL, buscar la cuarta solapa, Body, y abajo elegir la opción "raw". En el cuadro de texto le ingreso un JSON correspondiente con la estructura del modelo de datos en public function register:
						{
							"name": "Tercero",
							"descripcion": "Se va la tercera",
							"email": "tercero@gmail.com",
							"password": "UnaContrasenia"
						}
				
				Al darle Send, me debería crear el usuario y me devuelve el token



















-->