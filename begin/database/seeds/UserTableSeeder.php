<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminUser = factory(User::class)->create(
        	[
        		'name' => 'admin',
        		'email' => 'admin@gmail.com',
        		'password' => '123'

        	]


        );
    }
}
