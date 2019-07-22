<?php

namespace App\MisClases;

use GuzzleHttp\Client;

class Posts{
	protected $client;

	public function __construct(){
		$this->client = new Client([
			'base_uri' => 'https://jsonplaceholder.typicode.com',
			'timeout'  => 2.0,
		]);
	}

	public function all(){
		$response = $this->client->request('GET', 'posts');

		return json_decode($response->getBody()->getContents());
	}

	public function find($id){
		//$response = $client->request('GET', 'posts/{$id}');
		$response = $this->client->request('GET', 'posts/' . $id);

		return json_decode($response->getBody()->getContents());
	}
}