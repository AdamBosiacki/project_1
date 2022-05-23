<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')
      ->insert([
        'title' => 'drugi tytul z seeda',
        'year' => 1001,
        'price' => 450.43,
        'pages' => 88,
        'publication_place' => 'zawsze kutrzeby',
        'created' => '2022-05-23'
      ]);
    }
}
