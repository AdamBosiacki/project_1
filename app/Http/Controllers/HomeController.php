<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Test;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //POKAZUJE USEROW PO ZALOGOWANIU
        //$data = Test::select(['name', 'surname'])->get();

        $data = Test::select(['*'])
        ->where('name', 'mikołaj')
        ->get();

        return view('test1', ['data'=>$data]);

        //TUTAJ JAKAŚ RANDOMOWA PRÓBA
        /*$name = Auth::user()->name;
        return Test::select(['name', 'surname'])->get();*/

        //TO MA NAJWIĘCEJ SENSU, TWORZY LOGA
        /*$name = Auth::user()->name;
        $data = [$surname='Pawlak'];
        $test = new Test();
        $test->name = $name;
        $test->surname = 'Nowak';
        $test->save();
        return view('adminlte.dashboard');*/
    }
}
