<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/home', function () {
    return view('home',['name' => "Muskan"]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', [GreetingController::class, 'index']);

Route::get('/about', function () {

//1. using row sql queries
 //$users = DB::select('select * from users');
 //dd($users);

//2. Query Builder
$users= DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
dd($users);

//3. Eloquent ORM

});
