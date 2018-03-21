<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Suprasac\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'administracion@suprasac.com',
            'password' => bcrypt('chiquian10'),
        ]);
    }
}
