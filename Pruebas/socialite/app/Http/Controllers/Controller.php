<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\User;
use App\SocialProfile;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function tyc()
	{
		return view('tyc');
	}

	public function pp()
	{
		return view('pp');
	}

	public function borrar_datos_face(){
		if(!isset($_POST['signed_request'])){
			return null;
		}

		$signed_request = $_POST['signed_request'];
		$data = $this->parse_signed_request($signed_request);
		$user_id = $data['user_id'];

		$usuario_fb = SocialProfile::where('social_id', $user_id)->first();
		
		$id_usuario = $usuario_fb->id_user; // Id de tabla Users, NO de social_profiles
		// Este valor lo uso para borrar su info despues

		// Valores para Facebook, para que el usuario chequee su info borrada
		$confirmation_code = $usuario_fb->id;
		$status_url = 'http://www.grupodemusicaliturgica.org.ar/Lucas/socialite/fb-login/gdpr/data-deletion-check/' . $confirmation_code;
		
		// Borro los datos de face del usuario
		SocialProfile::where('social_id', $user_id)->delete();

		//Al borrar los datos del usuario le pongo vacío el mail, así lo "deshabilito"
		//No puedo borrar el usuario por si tiene información asociada
		User::where('id', $id_usuario)
          ->update(['email' => null]);

        // Devuelvo la info a Facebook
		return response()->json([
			'url' => $status_url,
			'confirmation_code' => $confirmation_code
		]);
	}

	public function parse_signed_request($signed_request) {
		list($encoded_sig, $payload) = explode('.', $signed_request, 2);

		$secret = env('FACEBOOK_CLIENT_SECRET'); // Use your app secret here

		// decode the data
		$sig = base64_url_decode($encoded_sig);
		$data = json_decode(base64_url_decode($payload), true);

		// confirm the signature
		$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
		if ($sig !== $expected_sig) {
			error_log('Bad Signed JSON signature!');
			return null;
		}

		return $data;
	}

	public function base64_url_decode($input) {
		return base64_decode(strtr($input, '-_', '+/'));
		//
	}

	public function chequear_eliminacion_face($id){
		$usuario_fb = SocialProfile::where('id', $id)->first();

		if(is_null($usuario_fb)){
			return view('msjeliminaciondatosfb', ["mensaje" => 'Su información de Facebook ha sido eliminada correctamente de nuestras bases de datos.']);		
		}else{
			// ¿Acá debería llamar al método para borrar la info efectivamente?
			return view('msjeliminaciondatosfb', ["mensaje" => 'Su información de Facebook ha sido eliminada correctamente de nuestras bases de datos.']);
		}
	}
}
