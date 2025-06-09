<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\PaymentsModel;
//use App\Http\Controller\Payments;

// SELECT
Route::get("/payments", function(){
	$payments = PaymentsModel::all();
    return response()->json($payments);
});

// CREATE


Route::post('/payments', function(){
	$data = ['amount'=>10, 'description'=>"Uber / 99", 'month'=>'06'];
	PaymentsModel::create($data);
	echo json_encode([
    	'status'=>200,
    	'data'=>$data
    ]);
});





