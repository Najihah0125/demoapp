<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyapi;
use App\Http\Controllers\demoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get list of purchase req
Route::get("list", [demoController::class, 'getlist']);

//get specific purchase req
Route::get("findPurchaseReq/{id}", [demoController::class, 'findPurchaseReq']);

//post - create new purchase req
Route::post('createRequest', [demoController::class, 'createReq']);

//display purchase req form
Route::get('purchaseForm', function () {
    return view('purchaseForm');
});

//update - update existing purchase req


//delete - delete existing purchase req