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

Route::get('contactame',function (){

    return "Seccion de contactos";
})->name('contactos');

Route::get('/', function (){
    echo "<a href='".route('contactos')."'> Contactos 1</a><br> ";
    echo "<a href='".route('contactos')."'> Contactos 2</a><br> ";
    echo "<a href='".route('contactos')."'> Contactos 3</a><br> ";
    echo "<a href='".route('contactos')."'> Contactos 4</a><br> ";
    echo "<a href='".route('contactos')."'> Contactos 5</a><br> ";
});
Route::get('/', function () {
    $nombre = "Fabian";
    return view('home', compact('nombre') );
})->name('home');

*/

Route::view('/','home')->name('home');
Route::view('/about', 'about')->name('about');
//Route::view('/portfolio', 'portfolio',compact('portfolio'))->name('portfolio');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
//Route::view('/contact', 'contact')->name('contact');

Route::get('/contact', 'MessagesController@index' )->name('contact');
Route::post('/contact', 'MessagesController@store' );