<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login; 
use App\Http\Controllers\Spanish; 
use App\Http\Controllers\Homecontroller; 


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

Route::get('/', function (){
    return view('welcome');
});   
Route::get('/', [Homecontroller::class, "index"]);
Route::get('/about', [Homecontroller::class, "about"]);
Route::get('/account-type', [Homecontroller::class, "types"]);
Route::get('/platform', [Homecontroller::class, "platform"]);
Route::get('/funding-method', [Homecontroller::class, "funding"]);
Route::get('/withdrawal-method', [Homecontroller::class, "withdrawal"]);
Route::get('/trading-asset', [Homecontroller::class, "asset"]);
Route::get('/partners', [Homecontroller::class, "partners"]);
Route::get('/FAQs', [Homecontroller::class, "faqs"]);
Route::get('/login', [Login::class, "index"]);
Route::get('/es/login', [Spanish::class, "login"]);
Route::get('/es/register', [Spanish::class, "register"]);
Route::get('/register', [Register::class, "index"]);

