<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MonitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        foreach (range(1,100) as $loop){
            DB::table('tbl_monitor')->insert([
                'tinggi' => random_int(1,20),
                'kecepatan' => random_int(1,30),
                'kekeruhan' => random_int(1,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
