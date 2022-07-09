<?php

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
    $cards = config('comics');
    return view('home', compact('cards'));
})->name('home');

//set parameter root
Route::get('/card/{id}', function($id) {
    $cards = config('comics');
    //error condition
    if($id >= count($cards)) {
        abort('404');
    }
    //set $card as id (passed parameter) of $cards
    $card = $cards[$id];    
    return view('card-page', compact('card'));
})->name('card')->where('id', '[0-9]+'); //regex for num > 0