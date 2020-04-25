<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use App\Ciudad;

class BackupController extends Controller
{
	public function prueba(){
		$ciudades = Ciudad::all();

		foreach($ciudades as $ciudad){
			echo $ciudad->nombre . "<br/>";
		}

		echo '<br/><hr/><br/> Son las ' . date('d-m-Y h:i:s');
	}

    public function index()
	{
		try {
			// CRON en CPANEL
			// /usr/local/bin/php /home/grupodem/real-demo-laravel/artisan schedule:run > /dev/null 2>&1

			/*use Illuminate\Support\Carbon;
			use Illuminate\Support\Facades\Storage;

			$nombre = 'prueba-cron.txt';
            $contenido = Carbon::now();
            
            Storage::disk('local')->put($nombre, $contenido); */
            
			/* $myfile = fopen($nombre . ".txt", "w");
	        $txt = date('d-m-Y-h-i-s');
	        fwrite($myfile, $txt);
	        fclose($myfile); */

			//Artisan::call('backup:run');
			Artisan::call('backup:run', ['--only-db' => 'true']);
			
			$nombre = 'prueba-cron'; //date('d-m-Y-h-i-s'); 

			$myfile = fopen($nombre . ".txt", "w");
	        $txt = date('d-m-Y-h-i-s');
	        fwrite($myfile, $txt);
	        fclose($myfile);

	        \Log::info('Backup realizado');

	        // America/Argentina/Buenos_Aires

	        /*
			$schedule->command('backup:run')->daily()->at('17:18')
            ->onFailure(function () {
                $nombre = date('d-m-Y-h-i-s') . '_1'; 
    			$myfile = fopen($nombre . ".txt", "w");
    	        $txt = date('d-m-Y-h-i-s') . ' ERROR_1';
    	        fwrite($myfile, $txt);
    	        fclose($myfile);
            })
            ->onSuccess(function () {
                $nombre = date('d-m-Y-h-i-s') . '_2'; 
    			$myfile = fopen($nombre . ".txt", "w");
    	        $txt = date('d-m-Y-h-i-s') . ' OK_2';
    	        fwrite($myfile, $txt);
    	        fclose($myfile);
            });
        $schedule->command('backup:run')->daily()->at('20:18')
            ->onFailure(function () {
                $nombre = date('d-m-Y-h-i-s') . '_3'; 
    			$myfile = fopen($nombre . ".txt", "w");
    	        $txt = date('d-m-Y-h-i-s') . ' ERROR_3';
    	        fwrite($myfile, $txt);
    	        fclose($myfile);
            })
            ->onSuccess(function () {
                $nombre = date('d-m-Y-h-i-s') . '_4'; 
    			$myfile = fopen($nombre . ".txt", "w");
    	        $txt = date('d-m-Y-h-i-s') . ' OK_4';
    	        fwrite($myfile, $txt);
    	        fclose($myfile);
            });

	        */

			echo 'Backup hecho a las ' . date('d-m-Y h:i:s') . ' | versión PHP:' . phpversion();
		} catch (Exception $e) {
            echo $e->getMessage();
        }
	}
}
