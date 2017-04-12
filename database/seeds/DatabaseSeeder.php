<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::truncate();
        $this->call(UserSeeder::class);
        $this->call(FabricanteSeeder::class);
        $this->call(VehiculoSeeder::class);

    }
}
