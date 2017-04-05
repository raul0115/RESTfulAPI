<?php

use Illuminate\Database\Seeder;
use App\Vehiculo;
use App\Fabricante;
use Faker\Factory as Faker;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
         $cantidad = Fabricante::all()->count();
        for($i=0;$i<50;$i++){
            Vehiculo::create(array(
                'color'=> $faker->safeColorName(),
                'cilindraje'=>$faker->randomFloat(),
                'potencia'=>$faker->randomNumber(),
                'fabricante_id'=>$faker->numberBetween(1,$cantidad)
            ));
        }
    }
}
