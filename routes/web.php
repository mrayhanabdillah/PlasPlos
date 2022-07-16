<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogResController;
use App\Http\Controllers\AsksController;
use App\Http\Controllers\AnwsController;
use App\Models\asks;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', function () {

    if (session('login')){
        $asks = asks::where('user_id', Auth::user()->id)->get();
        return view('welcome',compact('asks'));
    }else{
        return view('welcome');
    }
    
});
Route::get('/makasih', function () {

    return view('user.makasih');
    
});

// Route Masuk & keluar
Route::get('/login', [LogResController::class, 'indexLogin']);
Route::post('/login', [LogResController::class, 'login']);
Route::get('/register', [LogResController::class, 'indexRegis']);
Route::post('/register',[LogResController::class,'create']);
Route::post('/logout', [LogResController::class, 'logout']);

// Route Question
Route::get('/addquestion', [AsksController::class, 'index']);
Route::get('/detailquestion/{ask:slug}', [AsksController::class, 'show']);
Route::post('/addquestion', [AsksController::class, 'create']);
Route::delete('/deletequestion/{id}', [AsksController::class, 'destroy']);

//Route Answer
Route::get('/answer/{ask:slug}', [AnwsController::class, 'index']);
Route::post('/answer/{ask:slug}', [AnwsController::class, 'create']);
