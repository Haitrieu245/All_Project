<?php

use Illuminate\Database\Seeder;
// use Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 // Model::unguard();
        $this->call(UserTableSeeder::class);
        // $this->call('UsersTableSeeder');

         // Model::reguard();
    }
}
