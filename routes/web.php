<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


// home page
Route::get('/', [Home::class, "index"])->name('home');


Route::post('/', function(){
    echo "Post newsletter sended.";
})->name('home');

Route::post('/form_new_contact', function(){
    echo "Post new contact sended.";
})->name('new_contact');


/* Rotas de teste
Route::get("/conection_api", function(){
    $response = Http::withoutVerifying()->get('http://192.168.0.6:5000/api/payments');

    if ($response->successful()) {
        $dados = $response->json(); 
        return response()->json($dados); 
    }

    return response()->json([
        'error' => 'Erro ao consultar a API externa'
    ], $response->status());
});
*/