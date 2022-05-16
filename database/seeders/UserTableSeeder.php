<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')
        ->insert([
          'city_id' => 10,
          'name' => 'Katarzyna',
          'surname' => 'Gzdziel',
          'birthday' => '2012-04-03',
          'weight' => 240,
          'height' => 350
        ]);
    }
}
