<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' => '1',
                'password' => bcrypt('admin@123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'ron',
                'email' => 'ron@example.com',
                'role' => '2',
                'password' => bcrypt('admin@123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('users')->insert($users);
    }
}
