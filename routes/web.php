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
    return view('home');
})->name('homepage');

Route::get('/about', function () {
    $data = [
        'title' => 'pagina About',
        'argomento' => 'questa è la pagina ... '
    ];
    return view('about', $data);
})->name('chi-siamo');

Route::get('/contact', function () {
    $data = [
        'title' => 'pagina contatti',
        'nomi' => ['Pippo', 'Pluto', 'Paperino']
    ];
    return view('contatti', $data);
})->name('nostri-contatti');

