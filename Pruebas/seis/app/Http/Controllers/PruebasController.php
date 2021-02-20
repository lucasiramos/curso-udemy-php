<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PruebasController extends Controller
{
	public function timezone(){
		$zonaBD = 'America/Argentina/Buenos_Aires';
		$original = Carbon::createFromFormat('Y-m-d H:i:s', '2021-02-20 15:16:17', $zonaBD);
		
		var_dump(date_format($original, 'Y-m-d H:i:s'));
		var_dump("----------------------------------------------------------");

		$zonaDetectadaUsuario = 'America/New_York';
		$cambiado = Carbon::createFromFormat('Y-m-d H:i:s', date_format($original, 'Y-m-d H:i:s'), $zonaBD)->setTimezone($zonaDetectadaUsuario);
		
		var_dump(date_format($cambiado, 'Y-m-d H:i:s'));
		var_dump("__________________________________________________________________");

		$arr_ip = geoip()->getLocation('190.18.140.251');
		var_dump($arr_ip);

		echo '<hr/>';

		$fechaGeoIp = $cambiado = Carbon::createFromFormat('Y-m-d H:i:s', date_format($original, 'Y-m-d H:i:s'), $zonaBD)->setTimezone($arr_ip->timezone);
		var_dump(date_format($fechaGeoIp, 'Y-m-d H:i:s'));
		//
	}
}
