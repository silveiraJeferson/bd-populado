<?php

use Illuminate\Database\Seeder;

class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, 50000) as $i) {
            $faker = Faker\Factory::create();
            
            
            DB::table('cidades')->insert([
                'nome' => $faker->unique()->city(),                
                'id_estado' => rand(0,10000 )
            ]);
        }
    }
}
