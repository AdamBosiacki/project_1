<?php

use Illuminate\Support\Facades\Route;

//TO DLA LARAVELA DO WERSJI 7, KONTYNUACJA STAREGO SPOSOBU W LINIJCE 93
//PO DŁUŻSZYCH NEGOCJACJACH TEN JEDNAK TEŻ DO NOWEGO XDDDD
use App\Http\Controllers\CdvSite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test', ['name'=>'Janusz', 'surname'=>'Kowalski']);
});

Route::get('/pages/{x}', function ($x) {
  $pages=[
    'about' => 'Informacje o stronie',
    'home' => 'Strona domowa',
    'contact' => 'jan@o2.pl'
  ];
  return $pages [$x];
});

Route::get('/address/{city?}/{street?}/{ZipCode?}', function (string $city = "brak danych", string $street = "-", int $ZipCode = null) {
  $ZipCode=substr($ZipCode, 0, 2)."-".substr($ZipCode, 2, 3);
  echo <<< ADDRESS
  Miasto: $city<br>
  Ulica: $street<br>
  Kod pocztowy: $ZipCode<br>
ADDRESS;
})->name('address');

Route::redirect('/adres/{city?}/{street?}/{ZipCode?}','/address/{city?}/{street?}/{ZipCode?}');


Route::prefix('admin')->group(function(){

  Route::get('/home/{name}', function ($name) {
    echo "Witaj na stronie $name";
  });

  Route::get('/users', function () {
    echo "Użytkownicy systemu<br>";
  });
});

Route::redirect('/admin/{name}','/admin/home/{name}');

Route::get('/user/{name}/{age?}', function (string $name, int $age = null) {
  echo "Imię $name<br>";
  if($age != null){
    echo "Wiek: $age<br>";
  }
})->where(
  ['name' => '[\s\p{L}]+', //tutaj jakiś makaron do znaków polskich, żeby np. Paweł wchodziło jako argument do Routa
  'age' => '[0-9]+']
);

Route::get('/car/{marka?}/{model?}/{kolor?}/{cena?}', function (string $marka = null, string $model = null, string $kolor = null, int $cena = null) {
  echo <<< AUTO
  Marka: $marka<br>
  Model: $model<br>
  Kolor: $kolor<br>
  Cena: $cena<br>
AUTO;
})->where(
  [
    'marka' => '[\s\p{L}]+',
    'model' => '[\s\p{L}][0-9]+',
    'kolor' => '[\s\p{L}]+',
    'cena' => '[0-9]+'
  ]
)->name('car');

Route::redirect('/auto/{marka?}/{model?}/{kolor?}/{cena?}','/car/{marka?}/{model?}/{kolor?}/{cena?}');

Route::get('blade', function(){
  return view('szablon');
});

//KONTYNUACJA Z LINIJKI 4, STARY LARAVEL
//Route::get('site', 'CdvSite@index');

//TO JUŻ DLA NOWEGO LARAVELA CZYLI 8 i 9 (NOWY DO CZASU HEHE)
//I TO TUTAJ UŻYWA TEGO ZAPISU Z GÓRY, TO NA DOLE JUŻ NIE
//Route::get('site', [CdvSite::class, 'index']);

Route::get('site/{cdvsite}', [App\Http\Controllers\CdvSite::class, 'index']);

Route::get('drives/{driver}', [App\Http\Controllers\DriversExercise::class, 'show']);

Route::get('userform', function(){
  return view('userform');
});

Route::post('UserController', [App\Http\Controllers\UserController::class, 'account']);

Route::view('user','user');
Route::post('UserController1', [App\Http\Controllers\UserController1::class, 'index']);

Route::post('Form', [App\Http\Controllers\Form::class, 'index']);
