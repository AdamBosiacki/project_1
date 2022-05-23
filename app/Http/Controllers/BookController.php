<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
  public function show(){

      $books = DB::table('books')
      ->select('*')
      ->get();

      return view('books', ['books'=>$books]);



  }
}
