<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(UsuariosSeeder::class);
        $this->call(EmailsSeeder::class);
        $this->call(VotosSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(LocalSeeder::class);
        $this->call(EstadosSeeder::class);
        $this->call(CidadesSeeder::class);
        $this->call(BeneficiariosSeeder::class);
        $this->call(PostsSeeder::class);
    }

}
