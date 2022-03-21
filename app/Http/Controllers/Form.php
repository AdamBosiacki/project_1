<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class Form extends Controller
{
  public function index(Request $req){

    $response = $req->validate([
          'imie' => 'required',
          'email' => 'required | email',
          'password' => 'required',
          'plec' => 'required',
          'city' => 'required',
          'dane_osobowe' => 'required'
      ]);

      //$this->attributes['password'] = bcrypt($req);



      //return view('form')->with('form', $validatedData);
      return view('form',compact('response'));

      //echo 'Imię: ', $validatedData['imie'], '<br>Adres @: ', $validatedData['email'], '<br> Hasło: ', $validatedData['password'],
      //'<br>Płeć: ', $validatedData['plec'];

  }
}
