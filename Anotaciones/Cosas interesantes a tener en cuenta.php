<?php

	/*
	
	- Usar preferentemente '' en lugar de ""
	- Se usa . para concatenar
	- <?='Este es un Echo resumido'?>
	- gettype($numero) devuelve un string con el tipo de datos de lo que evalúa
	- Las constantes se declaran asi: define('apellido', 'Ramos'); y luego te referis a ellas por el nombre
		echo nombre . ' ' . apellido;
	- var_dump($_POST); Tira el tipo y el contenido de lo que evalúa (para tener en cuenta en debug)
	- GET es lo mismo que POST pero se ven los datos por QueryString
	- isset() es para comprobar si un parámetro, tambien variable está definido
	- unset($var) borra la variable de memoria
	- empty($var) comprueba si var esta vacia, null o no está definida.
	- preg_match() valida con expresiones regulares
	goto marca;

	//Esto no lo ejecuta
	//Esto no lo ejecuta
	//Esto no lo ejecuta
	//Esto no lo ejecuta

	marca:
	//Sigue por aca
	
	function UnaFuncion (pNombre, pApellido, pDNI = 30){
	
	}

	UnaFuncion("Lucas","Ramos",30248211);
	UnaFuncion("Lucas","Ramos"); // Esto no da error, ya que el parámetro adopta el valor por defecto 30.

	15-Sesionessss!!!
	23-Ejercicios / 18-Formularios
		filter_var // Para validar tipos!

	24-Etiquetas resumidas

	Validacion de formularios
		206 / 207 Udemy

	Borrar sesiones
	if(isset($_SESSION['error_login'])){
		//session_unset($_SESSION['error_login']);
		unset($_SESSION['error_login']);
	}

	echo $this->db->error; // Muestra el error de una consulta SQL

	*/

	//Contar los elementos en un request
	//	count(collect($request)) // No se si habrá una manera mejor de hacerlo, esto da todos los elementos + 1
	
	/////////////////////////////////////////////////////////////////////////////////////////
	//LARAVEL!

	//Instalar las extensiones Tokenizer, CType y JSON
	//	Buscar en Google Tokenizer dll download
	//	Mismo en dlldownloader buscar "ctype", y elegir la opción que sale: Php_ctype
	// 	Buscar en Google PHP Json dll download
	// 	Copiar estas dlls en la carpeta: C:\wamp64\bin\php\php[version en uso]\ext

	//Creación de un proyecto Laravel
	//	En cmd
	//		composer create-project laravel/laravel [NOMBRE PROYECTO] "5.6.*" --prefer-dist
	//			Ojo, ver el tema de la versión de Laravel, y el ¿--prefer-dist?

	//Crear sistema de Backup de BD
	//	Hacerlo despues de crear el proyectp (ver proyecto backup-cron)

	//Crear host virtual
	//	Entrar a la web de Victor Robles ¬¬ y buscar el artículo Crear varios hosts virtuales en Wamp Server
	//	Abrir httpd.conf en C:\wamp64\bin\apache\apache2.4.37\conf
	//	Chequear que esta linea este descomentada
	//		# Virtual hosts
	//		Include conf/extra/httpd-vhosts.conf ---> Esta línea!
	// 	Abrir httpd-vhosts.conf en C:\wamp64\bin\apache\apache2.4.37\conf\extra
	//	Copiar una regla entera:
		/*<VirtualHost *:80>   
			DocumentRoot "c:/wamp/www/symfony3"
			ServerName symfony3.com.devel
			ServerAlias www.symfony3.com.devel
			<Directory "c:/wamp/www/symfony3/web">
				Options Indexes FollowSymLinks     
				AllowOverride All
				Order Deny,Allow
				Allow from all     
			</Directory> 
		</VirtualHost>
		*/
	//	Modificar el c:/wamp/ por la variable INSTALL_DIR y poner la ruta raíz del proyecto & "/public" --> Poner!
	//	En ServerName poner [nombrehostvirtual].com.devel
	//	En ServerAlias www.[nombrehostvirtual].com.devel
	//	<Directory "[IDEM DocumentRoot]"
	//	El resto no tocar!

	//	Siguiente paso, modificar fichero de hosts en C:\Windows\System32\drivers\etc (¿En Linux?)
	// 	IMPORTANTE! Si estas corriendo un IIS también a la url final ".com.devel" hay que agregarle un :8080
	//	Reiniciar el servidor!

	//Rutas básicas
	//	En /routes/web.php estan las rutas básicas para configurar los Métodos HTTP/acciones
	//	Por defecto viene:
		/*Route::get('/', function () {
			// return view('welcome'); // Esto devuelve una vista, pero yo podría hacer un echo
			echo "<h1>Hola mundo!</h1>";
		});*/
	//	Métodos http:
	//		GET: Conseguir datos, POST: Guardar datos, PUT: Actualizar recursos, DELETE: Eliminar recursos 
	
	//	Cuando es un método por post le puedo poner cualquier cosa en:
	//		Route::post('/[CUALQUIER COSA]','[Nombre controlador]@Fx')->name('user.update');
	//		Ya que en el action del formulario pongo:
	//			<form method="POST" action="{{ route('[Valor del ->name('')]') }}"
	//			<form method="POST" action="{{ route('user.update') }}"	

	//Creación de vistas
	//	Crearlas en resources/views
	//	[nombre-vista].blade.php // Las vistas de Laravel son con ese motor de plantilla

	//Artisan
	//	Ejecutar en cmd, dentro de carpeta del proyecto Laravel
	//		php artisan route:list --> te muestra las rutas creadas

	//Formularios
	//	Poner esta línea dentro de la etiqueta Form, en la vista (sino da error)
	//		{{ csrf_field() }}
	//	Para llamar a métodos de una clase de un controlador, usar action()

	//Conectarme a BD y otras configuraciones de /.env
	//	Abrir /.env
	//	Cuando hice el proyecto de Udemy le cambie el APP_URL
	//		APP_URL=http://ig.com.devel:8080/ por APP_URL=http://localhost
	//			No se si en un proyecto posta esto se cambia también
	//	Buscar valor DB_DATABASE=[NOMBRE BD] // Sin comillas
	//	Configurar DB_USERNAME y DB_PASSWORD (null si no tiene)
	//	Abrir archivo /config/database.php

	//Crear migraciones
	//	php artisan make:migration create_usuarios_table --create=usuarios
	//	Trabajar con migraciones es más seguro y es mejor para proyectos grandes
	//	Esto crea un archivo en /database/migrations, con una estructura para crear una tabla
	//	Método up crea la tabla
	/*	Schema::create('usuarios', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 255);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->integer('edad');
			$table->timestamps();
		});
	*/

	//	Método down borra la tabla
	/*	public function down()
		{
			Schema::drop('usuarios');
		}
	*/
	//	Para ejecutar las migraciones creadas
	//		Abrir la consola y ejecutar "php artisan migrate"

	//	Si da error al hacer las migraciones:
	//    	https://laravel-news.com/laravel-5-4-key-too-long-error

	//Seeds
	//	También sirve para agregar datos en la tabla
	//	php artisan make:seed [NOMBRE SEED]
	//		Crea un archivo en la carpeta /database/seeds
	//	Dentro de la función Run() se puede pegar el siguiente código:
	/*for($i = 0; $i < 20; $i ++){
			DB::table('frutas')->insert(array(
				'nombre' => 'Cereza ' . $i,
				'descripcion' => 'Descripción de la fruta n° ' . $i,
				'precio' => $i,
				'fecha' => date('Y-m-d')
			));
		}

		$this->command->info('La tabla de frutas ha sido rellenada');*/

	//	Te crea 20 campos con esos datos al ejecutar php artisan db:seed --class=frutas_seed

	//Controladores en Laravel
	//	Para crear un controlador en Laravel se puede ir a la consola y escribir
	//		php artisan make:controller FrutaController
	//		php artisan make:controller Carpetita\FrutaController --> Para crear en una carpeta
	//		(crea en /app/Http/Controllers)
	//		En ruta: Route::get('/fruta', 'Carpetita\FrutaController@function')->name('function');

	//	En el return view de un controlador, si la vista esta en una carpeta se pone:
	//		return view('[Nombre carpeta].[Nombre vista]');
	//		return view('fruta.create');
	//			Esto devuelve el archivo /resources/views/fruta/create.blade.php
	//			OJO este formato de archivo ----------------------^

	//	Para cada método de los controladores tengo que crear una ruta en /routes/web.php
	//		Route::get('/configuracion','UserController@config')->name('config');
	//		El campo name me sirve por ejemplo para hacer referencia a el en las vistas:
	//			<a href="{{ route('config') }}">Link</a>

	//	Enviar datos de un form a otro (Creo....)
	//		Controlador que recibe:
	//			public function Nombre(Request $request){
	//				$request->input('[nombre del campo]')

	//ORM - Mapeo Relacional de Objetos
	//	Para crear los modelos del MVC
	//		Es una clase que representa un registro en particular de la BD
	//	Por defecto Laravel ya trae configurado un modelo para usuarios
	//		/app/User.php
	//	Para crear un nuevo modelo entrar en cmd, ingresar a la carpeta del proyecto y ejecutar:
	//		php artisan make:model [NombreModelo] // Por convención se declaran en singular
	//	Por defecto crea los modelos de manera individual, si queremos que una instancia de un modelo tenga relacionado una instancia de otro modelo que se le relaciona, tengo que configurar Entidades/Relaciones (Ej: Factura->Cliente). Enlaza de forma fácil los objetos relacionados.
	//	Abrir un modelo
	//	Dentro de class poner: 
		/*class [NombreModelo] extends Model
		{
			protected $table = '[Nombre de la Tabla que representa en la BD]'
		}*/
	//	Despues, abajo de protected (...) se arman las relaciones, en este caso una de uno a muchos:
		/*	public function [NombreFxModeloRelacionado](){
				return $this->hasMany('App\[NombreModeloRelacionado]');
			}
		*/
	//	hasMany() se encarga de traer todas las ocurrencias del hijo con respecto al padre, es un uno a muchos
	//	Para hacer una relación de Muchos a uno, es decir que para esta instancia, saber a quien pertenece (Factura pertenece a usuario), se tiene que hacer un belongsTo:
		/*
			public function [NombreFxModeloRelacionado](){
				return $this->belongsTo('App\[NombreModeloRelacionado]', '[Campo de este modelo que se relaciona con el Padre]');
			}	
		*/

	//	Uso de los ORMs
	//	Para poder usar estos ORMs, los tengo que importar en cada controlador
	//		use App\[nombre ORM sin extensión];
	//		use App\Image; // en Luquinstagram
	//	Luego puedo poner el siguiente código:
		/*	$images = Image::all();

			foreach($images as $image){
				var_dump($image);
			}
		*/
	//	El método all no lo programé yo, ya viene por defecto, y te tira todas las ocurrencias de esa clase en la base, en este caso "Image". Igualmente sale medio "sucio", ya que viene con un montón de datos internos/métodos/.....algo...

	/*
		Claves foráneas personalizadas en HasMany y BelongsTo
		Lo tengo que especificar en los dos lados. Un autor tiene muchos artículos:
			Modelo Autor:
				public function articulos(){
			        return $this->hasMany('App\Articulo', 'creado_por');
			    }

			Modelo Artículo:
			    public function user(){
					return $this->belongsTo('App\User', 'creado_por');
				}
	*/

	//	Puedo limpiar un poco todo haciendo el foreach de la siguiente forma:
		/*	$images = Image::all();

			foreach($images as $image){
				//echo $image->[Nombre de campo en la DB];
				echo $image->image_path . "<br />";
				echo $image->description . "<hr />";
			}
		*/	 
	//	Saca todo en formato de objeto

	//	Puedo usar un método "BelongsTo", de manera de relacionarlo con el padre, y sacar alguna información de el.

		/*	foreach($images as $image){
				//echo $image->[Nombre de campo en la DB];
				echo $image->image_path . "<br />";
				echo $image->description . "<br />";
				echo $image->user->name . " " . $image->user->surname . "<br />";
			}
		*/	
	//User en este caso, es un "belongsTo" que está definido en el ORM /app/image.php, de esta manera hace el enganche

	//	Para relacionar un objeto con sus hijos puedo usar un hasMany, de la siguiente forma:

		/*	foreach($images as $image){
				//echo $image->[Nombre de campo en la DB];
				echo $image->image_path . "<br />";
				echo $image->description . "<br />";
				echo $image->user->name . " " . $image->user->surname . "<br />";

				foreach($image->comments as $comment){
					echo $comment->content . "<br/>";
				}
			}
		*/
	//	En este caso, el "método comments" no lo tengo que llamar con unos paréntesis, sino de 		esa manera.

	//	Así compruebo si tiene hijos:
		/*
			if(count($image->comments) >= 1)
		*/

	/*De Controller a Blade, Básico:
	// Controller:
	public function MuestraSeccion($slug){
    	$parametro = "Paso el dato: " . $slug;
        return view('secciones.seccion', [
            'slug' => $parametro
        ]);
    }

    // Blade:
    <body style="font-family: Arial; margin:30px;">
		<p>Hola que tal, soy una sección</p>
		<b>{{ $slug }}</b>
	</body> */

	//login y registros de usuarios en Laravel
	//	Abrir cmd, ir a la carpeta del proyecto y ejecutar:
	//		php artisan make:auth
	//	Esto genera el código necesario de Laravel para que funcione la autenticación/registro

	//	En /app/Http/Controllers/Auth/RegisterController.php puedo buscar la siguiente línea y definir dónde redirige despues de registración:
	//		protected $redirectTo = '/';
	//	Igualmente, en /app/Http/Middleware/RedirectIfAuthenticated, en la función handle está donde te redirige si no estas autenticado.

	//	En /resources/lang/en estan los textos que muestran (en ingles), error de login, de 			password, etc...

	//	Puedo modificar los campos que le pido en el registro de usuarios
	//		Abrir /resources/views/auth/register.blade.php
	//		Copiar el bloque de div <div class='form-group row' />...</div>. Todo ese bloque es una fila, con todos los estilos y elementos que usa Bootstrap.
	//		El siguiente paso es actualizar los nombres del div copiado

	//		Luego, hay que actualizar el modelo, en /app/User.php, agregar los nuevos campos en 
	//		protected $fillable = [.......] // "Son campos que son rellenables en forma masiva" // Es necesario también agregarlos sino no te los graba
	//		Para cambiar el modelo efectivamente abrir
	//			/app/Http/Controllers/Auth/RegisterController.php
	//			Buscar protected function validator() y agregar las validaciones correspondientes.
	//			También buscar protected function create() y agregar los valores correspondientes.

	//	Acceder a los datos del usuario logueado!
	//		Para esto Laravel nos provee la clase Auth:
	//			Auth::user()->name | Auth::user()->email | Auth::user()->[campos]
	//			Auth::user()->id // Aca tengo el id del usuario autenticado!
	//		Ver los campos en /app/User.php

	//Todas las secciones del controlador HomeController son privadas, ya que en 				/app/Http/Controllers/HomeController está definido:
		/*
			public function __construct()
			{
				$this->middleware('auth');
			}
		*/
	//	el cual aplica a ese controlador el Middleware de autenticación. Si no está logueado va al login. Si quiero que los demas controladores sean solo para usuarios tengo que incluir ese codigo en el controlador

	//Modificando los elementos del NavBar
	//	Abrir /resources/views/layouts/app.blade.php y toquetearrrr!

	//Para crear plantillas propias
	//	Chequear /resources/views/auth/register.blade.php, arriba del todo hay un:
			/*
			@extends('layouts.app')

			@section('content')
			[Contenido html]
			@endsection
			*/
	//	Esto hereda lo que esta en layouts.app (/resources/views/layouts/app.blade.php)
	//	En la plantilla lo incrusta en @yield('content')

	//Subir imagenes en Laravel
	//	No se usa el método de siempre, se usan "discos virtuales".
	//	Para eso, primero hay que configurar el Storage:
	//		Entrar a /config/filesystems.php, copiar un nuevo objeto:
				/*
					'[Nombre que le queramos poner al Disco]' => [
						'driver' => 'local',
						'root' => storage_path('app/[Subcarpeta]'),
						'url' => env('APP_URL').'/storage',
						'visibility' => 'public',
					],
				*/
	//	OJO!! Recordar agregar esto al tag Form, para poder subir imágenes:
	//		enctype="multipart/form-data"

	//	En el controlador incluir en la parte superior: use lluminate\Support\Facades\Storages;
	//													use Illuminate\Support\Facades\File;
	//	Se sube con:
	//		Storage::disk('[Disco]')->put([Nombre imagen], File::get([Objeto imagen]));

	//	Para devolver una imagen, importar: use Illuminate\Http\Response;
			/*public function getImage($filename){
				$file = Storage::disk('users')->get($filename);
				return new Response($file, 200);
			}*/
	//	Crear una ruta: 
	//	En la vista: 
			/*	@if(Auth::user()->image)
					<img src="{{ url('/user/avatar/' . Auth::user()->image) }}" />
				@endif
			*/
	//	Validar una imagen: 'image_path'  => 'required|image' // Con validate

	//CSS - Agregar un archivo .css
	//	En /public/css puedo crear una hoja de estilos
	//	Para cargar esa hoja de estilos me voy al layout: /resources/views/layouts/app.blade.php
	//		Buscar en el <head> <link href="{{ asset('css/[Nombre archivo].css') }}" rel="stylesheet">

	//CSS propios, JS propios e Imágenes propias
	//	Llamarlas con {{ asset('img/fondo.jpg') }}

	//Includes!
	//	Hice un include en /resources/views/users/config.blade.php // @include('includes.avatar')

	//	Para grabar con ORMs en la parte superior del controlador tengo que hacer un:
	//		use App\[Nombre Modelo];
	//		use App\Image; // En Luquinstagram

	//Paginación en Laravel
	//	Se puede usar el método paginate:
	//		$images = Image::orderBy('id', 'desc')->paginate(3);
	//	Para agregar la paginación dentro de la vista:
	//		{{ $images->links() }}

	//Manejo de Json en Laravel (o PHP en realidad)
	//	Ver /facturacion-lu/JsonController

	
	//QueryBuilder
		//$seccion = Seccion::where('slug', $slug)->first();

		//Busco por id principal:
		/*$seccion = Seccion::find(1);
		var_dump($seccion->nombre);
		die(); */

		//Traigo toda la colección
		/*$secciones = Seccion::get();
		foreach ($secciones as $seccion) {
			var_dump($seccion->nombre);
		}
		die();*/

		//Traigo toda la colección que cumpla con un criterio
		/*$secciones = Seccion::where('id', '<', '3')->get();
		foreach ($secciones as $seccion) {
			var_dump($seccion->nombre);
		}
		die();*/

/*
	LARAVEL 7
		Make Auth ya no va mas! :o
			Ejecutar en CMD
				composer require laravel/ui
				php artisan ui vue --auth 
					(Ver que onda si se hace con bootstrap o React)
					Me preguntó si quería reemplazar app.blade.php, le puse que no

				Despues tuve que correr en CMD
					npm install
					npm run dev	

	Laravel 6.*
		Para que funque Cron Jobs en Netservices
			composer require laravel/ui="1.*" --dev
			https://stackoverflow.com/questions/59265377/cant-make-composer-require-laravel-ui-dev-on-laravel-6-5-1


*/


////////////////////////////////////////////////////////////////////////////////////////////
// COSAS PARA REVISAR
//		Ver validación en Laravel... ¿objeto Validate?
//		Ver como descargar las plantillas de Bootstrap (Luquinstagram esta corriendo con otra)

?>