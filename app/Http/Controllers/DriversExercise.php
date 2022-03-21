<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriversExercise extends Controller
{
  public function show($drive){
    //TO NIE DZIAŁA NIE WIADOMO CZEMU
    //return ['site' => 'cdv.pl', 'city' => 'Poznan'];
    $drives = [
      'fdd' => 'dyskietka',
      'hdd' => 'dysk twardy',
      'ssd' => 'SSD'
    ];
    //return $drives[$drive];
    vardump($drives);
    }

}
