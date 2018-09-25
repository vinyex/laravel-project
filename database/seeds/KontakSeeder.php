<?php

use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create(); //import library faker
        $limit = 30; //batasan berapa banyak data
        // Hitung Tanggal ke Umur
        $from = new DateTime('1999-03-07');
        $to = new DateTime('today');

        for ($i = 0; $i < $limit; $i++) {
            DB::table('kontak')->insert([ 
                'nama' => $faker->name,
                'nik' => $faker->numberBetween($min = 34711, $max = 75000),
                'tempat' => $faker->city,
                'lahir' => $from,
                'umur' => $from->diff($to)->y,
                'alamat' => $faker->address,
            ]);
        }
    }
}
