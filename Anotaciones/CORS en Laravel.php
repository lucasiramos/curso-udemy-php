<!-- 

CORS
	Agregar un Middleware llamado Cors
		php artisan make:middleware Cors

	En ese middleware:
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