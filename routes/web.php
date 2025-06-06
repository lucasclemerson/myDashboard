<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;


// home page
Route::get('/', [Home::class, "index"])->name('home');


Route::post('/', function(){
    echo "Post newsletter sended.";
})->name('home');

Route::post('/form_new_contact', function(){
    echo "Post new contact sended.";
})->name('new_contact');
