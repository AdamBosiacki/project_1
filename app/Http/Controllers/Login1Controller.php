<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login1Controller extends Controller
{
    public function index(Request $req){
      //return $req->input();
      $req->session()->put('data', $req->input());
      return redirect('profile1');
    }
}
