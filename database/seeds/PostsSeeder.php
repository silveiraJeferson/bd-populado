<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, 100000) as $i) {
            $faker = Faker\Factory::create('pt_BR');
            
            
            DB::table('posts')->insert([
                'id_user' => rand(0, 50000),
                'imagem' => $faker->imageUrl($width = 640, $height = 480),
                'titulo' => $faker->sentence,
                'conteudo' => $faker->paragraph,
                'likes' => rand(0, 200),
                'comments' => rand(0, 15)
                
            ]);
        }
    }
}
