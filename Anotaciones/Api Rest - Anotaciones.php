<!-- 

Entidades de la BD = Recursos (?)

Creación de Modelos
	Teniendo el DER, se tienen que crear los modelos a partir de el, van a representar a las entidades. Para eso hacer:
		php artisan make:model [nombre-modelo] --all
			//Importante poner el --all ya que con eso creamos las migraciones, factories y resouce controller para ese modelo:

			*Con Migraciones creamos la tabla asociada al modelo
			*Con Factory metemos datos de prueba "de relleno"
			*Con Resource controller (es un controlador de recursos, un modelo es un recurso)

	Una vez que se ejecuta ese comando se crea el nuevo modelo en /app/[nombre-modelo].php
	También en /database/factories/[nombre-modelo]Factory.php se creó esa Factory
	Idem en /database/migrations/[fecha]_create_[nombre-modelo]_table.php
	Idem en /app/Http/Controllers/[nombre-modelo]Controller.php
		Al ser un controlador de un modelo ya trae armados algunas funciones CRUD (vacías)

	Para usuarios, ya tiene un modelo, factory y migración, por lo que solo queda hacer el controlador:
		php artisan make:controller -m User
			-m User hace que asocie el controlador a ese modelo, y armando los métodos de index, edit, destroy, etc., con el parámetro de inyección de Modelo.

Asociar este modelo a una Ruta
	El siguiente paso es crear la ruta para poder resolverlo mediante la URL
	Abrir /routes/api.php. Hay dos maneras de crear la ruta
		* Route::resource('[nombre-modelo]s', 'NombreModeloController'); //La s es porque va en plural.
			- Route::resource('products', 'ProductController');
			Esto te crea automáticamente todas las rutas para todos los métodos que tenes en el controlador (index, create, destroy, etc...)
			Ejecutar en el cmd php artisan route:list y ahi se ven todas.

		* Route::apiResource('[nombre-modelo]s', 'NombreModeloController');
			Esto hace lo mismo, pero deja solo las funciones usadas por las Apis (create y edit ya no las pone)


/////////////////////////////////////////////////////////////////////////////////////

Lumen Laravel
	lumen.laravel.com
	este Framework requiere PHP >= 7.0 y las siguientes extensiones activadas
		OpenSSL PHP Extension
		PDO PHP Extension
		Mbstring PHP Extension

Otro framework: api-platform.com

Para poder usar Lumen Laravel primero lo tengo que instalar a nivel global, con:
	composer global require "laravel/lumen-installer"

Creación de un proyecto:
	Escribir: lumen new [nombre-proyecto]
	Te crea en la carpeta donde estas un nuevo proyecto de Lumen
	Para correrlo, una opción es escribir: php -S localhost:8083 -t public
		Con esto habilita localhost:8083 para ese proyecto

Configurar .env
	Viene un archivo molde en /env.example, puedo copiar y pegarlo, para editar sus datos.
	Hay que configurar la propiedad APP_KEY= de /.env, agregandole un string de 32 caracteres aleatorios (sin comillas)

	Cada vez que se cambia este archivo hay que reiniciar el servidor, ya que lo toma como archivo inicial de configuración.

	Biblioteca Carbon para manejar tiempo/horas/fechas a un formato especifico 

Creación de rutas
	Entrar a /routes/web.php
	$router->get('/users', function(){
		return "Hola mundo Lumen!";
	});
	Este es el Hola mundo, pero en realidad habría que redirigir a un Controlador

	$router->get('/users', ['uses' => 'UsersController@index']);

Creación de controladores
	Puedo copiar y pegar un archivo de ejemplo que viene en /app/Http/Controllers, ExampleController.php, y ponerle el nombre que quiera.


Status de Responses // Se llaman HTTP Status Codes
	Cuando hago un return()->json([parámetro-json],[código de response]), le tengo que poner un código de response, que son
		200 -> Ok
		201 -> Se creó el recurso correctamente
		401 -> No autorizado

Crear la migración:
	Schema::create('users', function (Blueprint $table) {
		$table->increments('id');
		$table->string('name');
		$table->string('username');
		$table->string('email')->unique();
		$table->string('password');
		$table->rememberToken();
		$table->string('api_token', 60)->unique(); // Este es MUY importante para APIRests
		$table->timestamps();
	});

Devolver un dato desde la BD
	Por defecto no viene Eloquent activado, hay que configurarlo.
		Tengo que ir a /bootstrap/app.php y descomentar la siguiente línea:
			$app->withEloquent();
		También activar:
			$app->withFacades();
			$app->register(App\Providers\AuthServiceProvider::class);
				Para soportar autenticación

	Una vez que activé esto puedo hacer:
		function index(){
	        $user = User::all();
	        return response()->json($user, 200);
	    }
		Y me devuelve todas las ocurrencias de User en formato JSON

Limitar el acceso con request de tipo Json
	Con esto limito a que no se pueda acceder por navegador
	function index(Request $request){
		if($request->isJson()){
			$user = User::all();
			return response()->json($user, 200);
		}

		return response()->json(['error' => 'Unauthorized'], 401, []);        
	}

Crear un Registro en la BD
	Primero tengo que crear la ruta para esta acción
	Hasta recién tenía:
		$router->get('/users', ['uses' => 'UserController@index']);
	Puedo copiar y pegar la misma y cambiarle el método:
		$router->post('/users', ['uses' => 'UserController@createUser']);

	function createUser(Request $request){
		if($request->isJson()){
			$data = $request->json()->all();

			$user = User::create([
				'name' => $data['name'],
				'username' => $data['username'],
				'email' => $data['email'],
				'password' => Hash::make($data['password']),
				'api_token' => str_random(60)
			]);

			return response()->json($user, 201, []);
		}
		
		return response()->json(['error' => 'Unauthorized'], 401, []);
	}


No se pueden guardar datos de sesión en el Server!!

























































-->