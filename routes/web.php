<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 

Route::get('/login', function () {
    return view('login');
})->middleware(['guest']);
Route::group(['middleware'=>'guest'],function(){
   
    Route::post('/login', [UserController::class,'login']);
    Route::post('/menu',[MenuController::class,'store']);
});

Route::group(['middleware'=>'auth'],function(){
   
    Route::get('/home',function(){
        return view('template.layout',['content'=>'..\dashboard','title'=>'dashboard']);
    });
   
});


Route::get('/db', function () {
    
    $users = DB::select('select * from user ', );
    var_dump($users);
});


 