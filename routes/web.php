<?php

use App\Http\Controllers\MailController;
use App\Mail\TestMail;
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

Route::get('/', function () {
    return view('auth.login');
});

route::get('/ngu', function(){
    return view('test', ['name'=>'cc']);
});

route::get('/GameStore/env', function(){
    dd(env('mysql'));
});

Route::get('/send-mail', [MailController::class, 'sendMail']);

Route::middleware(['auth:sanctum', 'verified'])->get('/shop', function () {
    return view('Shop.Shop');
})->name('shop');
