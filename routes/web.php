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
    $data = [
        'user' => [
            'name' => 'Valerio',
            'surname' => 'Catellani'
        ]
    ];
    return view('home', $data); //il secondo parametro è un array associativo che è possibile passare direttamente dentro la view oppure mediante una ariabile
});

Route::get('/contatti', function () {
    return view('contact');
});
