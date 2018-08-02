<?php

use Illuminate\Database\Seeder;
use App\Passeport;

class PasseportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['M','F'];
        $random = array_random($array);

        for ($i = 0; $i < 10; $i++) {
            Passeport::create([
                'age' => rand(10, 80),
                'sexe' => $random = array_random($array),
            ]);
        }
    }
}
