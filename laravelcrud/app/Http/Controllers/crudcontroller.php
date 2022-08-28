<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function showData(){
        return view('Show_data');
    }
    public function addData(){
        return view('adddata');
    }
    public function storeData(Request $request){
        $rules = [
            'book_name'=>'required|max:25',
            'book_price'=>'required|max:10',
            'author_name'=>'required|max:6',
            'book_description'=>'required|max:100',
        ];
        $this->validate($request, $rules);
        return $request->all();
    }
}
