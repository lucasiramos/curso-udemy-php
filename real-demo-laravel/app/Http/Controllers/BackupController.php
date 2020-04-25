<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class BackupController extends Controller
{
    public function index(){
    	/*
		DB_DATABASE=grupodem_pruebackup
		DB_USERNAME=grupodem_usr_pruebackup
		DB_PASSWORD=threepwood*1444

		'dump' => [
                'dump_binary_path' => '/usr/bin',
                'use_single_transaction',
                'timeout' => 60 * 5,
            ],

        // CRON en CPANEL
		// /usr/local/bin/php /home/grupodem/real-demo-laravel/artisan schedule:run > /dev/null 2>&1

    	*/

    	\Artisan::call('backup:run', ['--only-db' => 'true']);
			
		$nombre = 'Desde controller'; //date('d-m-Y-h-i-s'); 

		$myfile = fopen($nombre . ".txt", "w");
        $txt = date('d-m-Y-H-i-s');
        fwrite($myfile, $txt);
        fclose($myfile);

        \Log::info('Backup realizado correctamente');

        echo 'Me faltó el echo. Son las: ' . date('d-m-Y-H-i-s');
    }

    public function listar(){
		$ciudades = Ciudad::all();

		foreach($ciudades as $ciudad){
			echo $ciudad->nombre . "<br/>";
		}

		echo '<br/><hr/><br/> Son las ' . date('d-m-Y h:i:s');
	}
}
