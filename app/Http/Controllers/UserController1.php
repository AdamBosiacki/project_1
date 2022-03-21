<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    public function index(Request $req){

      //RÓŻNE SPOSOBY ZWRACANIA DANYCH

      //echo "kontroler 1";
      //return $req->input();

      //return $req->url();

      //return $req->method();


      //SPOSÓB, KTÓREGO SZYPER NIE LUBI
      //$this->validate($req,['address' => 'required'], ['address.required' => 'Adres nie może być pusty']);




      $validatedData = $req->validate([
            'address' => 'required | min:5',
            'email' => 'required | email'
        ],
        [
            'address.required' => 'Pole adres jest wymagane',
            'address.min' => 'Pole adres musi mieć minimum 5 znaków',
            'email.required' => 'Pole email jest wymagane',
            'email.email' => 'Pole email musi być emailem'
        ]);


    }
}
