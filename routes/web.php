<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
    "title"=>"Hello Word",
    "descriptio"=>"Prova bla bla bla",
    "pages"=>[
        "HOME" => "home",
        "ABOUT" => "about"
    ]
    ];
    return view('home',$data);
})->name("home");

Route::get('/about', function () {
    $data = [
    "title"=>"Hello Word",
    "descriptio"=>"Prova bla bla bla",
    "pages"=>[
        "HOME" => "home",
        "ABOUT" => "about"
    ]
    ];
    return view('about',$data);
})->name("about");
