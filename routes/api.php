<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyapi;
use App\Http\Controllers\demoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get list of purchase req
Route::get("listPurchaseReq", [demoController::class, 'listPurchaseReq']);

//search specific purchase req - for update & delete button
Route::get("findPurchaseReqId/{id}", [demoController::class, 'findPurchaseReqId']);

//search specific purchase req - for users to search
Route::get("findPurchaseReqName/{name}", [demoController::class, 'findPurchaseReqName']);

//post - create new purchase req
Route::post('createRequest', [demoController::class, 'createReq']);

//display purchase req form
Route::get('purchaseForm', function () {
    return view('purchaseForm');
});

//update - update existing purchase req 
Route::put('updatePurchase/{id}', [demoController::class, 'updatePurchase']);

//delete - delete existing purchase req
Route::delete('deletePurchase/{id}', [demoController::class, 'deletePurchase']);