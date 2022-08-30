<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

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
        return view('home');
        //$showData = crud::simplePaginate(3);
        //return view('show_data', compact('showData'));
    }
}
