<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
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
            
            
            DB::table('books')->insert([
                'codigo' => $faker->unique()->ean13,                
                'locacoes' => rand(0,100)
            ]);
        }
    }
}
