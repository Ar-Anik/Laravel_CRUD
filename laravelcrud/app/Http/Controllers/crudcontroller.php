<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function showData(){
        return view('Show_data');
    }
}
