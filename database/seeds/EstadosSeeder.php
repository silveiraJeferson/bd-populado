<?php

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, 10000) as $i) {
            $faker = Faker\Factory::create();
            
            
            DB::table('estados')->insert([
                'nome' => $faker->unique->state(),                
                'id_pais' => rand(0,1000 )
            ]);
        }
    }
}
