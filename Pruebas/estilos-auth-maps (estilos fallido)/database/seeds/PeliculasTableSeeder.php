<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PeliculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,20) as $index) {
	        DB::table('peliculas')->insert([
	            'nombre' => $faker->name,
	            'descripcion' => $faker->text($maxNbChars = 200),
	            'idgenero' => $faker->numberBetween($min = 1, $max = 5)
	        ]);
		}
    }
}
