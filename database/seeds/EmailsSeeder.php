<?php

use Illuminate\Database\Seeder;

class EmailsSeeder extends Seeder
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
            
            
            DB::table('emails')->insert([
                'email' => $faker->email,                
                'id_usuario' => rand(0,2000 )
            ]);
        }
    }
}
