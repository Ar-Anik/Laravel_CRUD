<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Session;

class crudcontroller extends Controller
{
    public function showData(){
        //$showData = crud::all();
        //$showData = crud::paginate(3);
        $showData = crud::simplePaginate(3);
        return view('show_data', compact('showData'));
    }

    public function addData(){
        return view('adddata');
    }

    public function storeData(Request $request){
        $rules = [
            'book_name'=>'required|max:25',
            'book_price'=>'required|max:10',
            'author_name'=>'required|max:15',
            'book_description'=>'required|max:100',
        ];
        $this->validate($request, $rules);

        $crud = new crud();
        $crud->book_name = $request->book_name;
        $crud->book_price = $request->book_price;
        $crud->author_name = $request->author_name;
        $crud->book_description = $request->book_description;
        $crud->save();

        Session::flash('msg', 'Data Successfully Added');

        return redirect('/');
    }

    public function editData($id=null){
        $editData = crud::find($id);
        return view('editdata', compact('editData'));
    }

    public function updateData(Request $request, $id){
        $rules = [
            'book_name'=>'required|max:25',
            'book_price'=>'required|max:10',
            'author_name'=>'required|max:15',
            'book_description'=>'required|max:100',
        ];
        $this->validate($request, $rules);

        $crud = crud::find($id);
        $crud->book_name = $request->book_name;
        $crud->book_price = $request->book_price;
        $crud->author_name = $request->author_name;
        $crud->book_description = $request->book_description;
        $crud->save();

        Session::flash('msg', 'Data Successfully Update');

        return redirect('/');
    }

    public function deleteData($id=null){
        $deleteData = crud::find($id);
        $deleteData->delete();

        Session::flash('msg', 'Data Successfully Delete');

        return redirect('/');
    }
}
