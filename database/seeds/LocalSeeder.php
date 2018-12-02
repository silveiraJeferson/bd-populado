    <?php

use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, 1000) as $i) {
            $faker = Faker\Factory::create();
            
            
            DB::table('locals')->insert([
                'pais' => $faker->unique()->country       
                
            ]);
        }
    }
}
