<?php

use Illuminate\Database\Seeder;

class VotosSeeder extends Seeder
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
            
            
            DB::table('votos')->insert([
                'id_usuario' => $i,                
                'votos' => rand(0,10000000 )
            ]);
        }
    }
}
