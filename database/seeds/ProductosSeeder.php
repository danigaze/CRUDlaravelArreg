<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) {
            \DB::table('productos')->insert(array(
                'nombre' => '' . $faker->firstNameFemale . ' ' . $faker->lastName,
                'clasificacion' => $faker->randomElement(['perecedero','no perecedero','basico','emergencias']),
                'marca' => $faker->randomElement(['Rexona','Familia','Recreo','Protex','Mamaines','Ariel','Tutifruty','Diana','Pantene']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
