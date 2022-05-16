<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class db_controller extends Controller
{
  public function show(){

    //POBIERANIE DANYCH
    /*$user = DB::table('user')
          ->select('*')
          ->where('surname', 'nowak')
          ->get();*/
    /*$user = DB::table('user')
    ->count();*/
    /*$user = DB::table('user')
    ->first();
    //return $user;
    print_r(DB::table('user')
    ->first());*/

    //USUWANIE DANYCH
    /*return DB::table('user')
    ->where('surname', 'kowalski')
    ->delete();*/

    //DODAWANIE DANYCH
    /*return DB::table('user')
    ->insert([
      'name' => 'Mikołaj',
      'surname' => 'Murawski',
      'birthday' => '2002-03-03'
    ]);*/

    //UPDATE DANYCH
    /*return DB::table('user')
    ->where('name', 'anna')
    ->update([
      'name' => 'Waldek',
      'surname' => 'Jakiś',
      'birthday' => now()
    ]);*/

    //ROZNE FUNKCJE SQL
    /*return DB::table('user')
    ->max('weight');

    return DB::table('user')
    ->min('weight');

    return DB::table('user')
    ->sum('weight');

    return DB::table('user')
    ->count('weight');

    return number_format(DB::table('user')
    ->avg('weight'),2,',');*/

    //JOINY

    /*return DB::table('user')
            ->join('city', 'city_id', 'city.id')
            ->get();*/

    $username = DB::table('user')
      ->join('city','city_id','city.id')
      ->select('name', 'surname','city.city')
      ->get();

    $username_height_above_200 = DB::table('user')
      ->select('name','surname','height')
      ->where('height', '>', 200)
      ->get();

      return view('db.users', ['username'=>$username,'username_height_above_200'=>$username_height_above_200]);



  }
}
