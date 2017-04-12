<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         User::create(array(
                'name'=> 'usuario1',
                'email'=>'raul1@gmail.com',
                'password'=> bcrypt('123456')
            ));
        User::create(array(
                'name'=> 'usuario2',
                'email'=>'raul2@gmail.com',
                'password'=> bcrypt('123456')
            ));
    }
}
