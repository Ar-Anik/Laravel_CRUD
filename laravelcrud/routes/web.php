<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/', [crudcontroller::class, 'showData']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/adddata', [crudcontroller::class, 'addData']);
    Route::post('/storedata', [crudcontroller::class, 'storeData']);
    Route::get('/editdata/{id}', [crudcontroller::class, 'editData']);
    Route::post('/updatedata/{id}', [crudcontroller::class, 'updateData']);
    Route::get('/deletedata/{id}', [crudcontroller::class, 'deleteData']);
});
