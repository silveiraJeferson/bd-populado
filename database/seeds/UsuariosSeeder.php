<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, 2000) as $i) {
            $faker = Faker\Factory::create();
            
            
            DB::table('usuarios')->insert([
                'nome' => $faker->name,
                'data_nasc' => $faker->dateTime($max = 'now'),
                'sexo' => rand(1,3 )
            ]);
        }
    }
}
