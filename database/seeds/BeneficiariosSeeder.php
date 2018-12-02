<?php

use Illuminate\Database\Seeder;

class BeneficiariosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        foreach (range(0, 50000) as $i) {
            $faker = Faker\Factory::create('pt_BR');

            

            DB::table('beneficiarios')->insert([
                'cod' => $faker->ean13,
                'nome' => $faker->name(),
                'data_nasc' => $faker->dateTime(),
                'sexo' => rand(1, 3),
                'id_operadora' => rand(1, 5000),
                'id_titular' => rand(1, 50000),
                'telefone' => $faker->cellphoneNumber,
                'rg' => $faker->rg,
                'cpf' => $faker->cpf,
                'cod_area' => $faker->areaCode
            ]);
        }
    }

    

}
