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

// route home
Route::get('/', function () {
    $data = [
        'users' => [
            [
                'name' => 'Vittorio',
                'surname' => 'Aquilino'
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Bianchi'
            ],
            [
                'name' => 'Luca',
                'surname' => 'Verdi'
            ],
            [
                'name' => 'Giuseppe',
                'surname' => 'Rossi'
            ],
            [
                'name' => 'Valentina',
                'surname' => 'Giusti'
            ],
        ],
    ];
    return view('home', $data);
})->name('home');

// route about
Route::get('about', function () {
    return view('about');
})->name('about-us');
