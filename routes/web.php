<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;

//view list of purchase req
Route::get('/home',[demoController::class, 'index']);

//view purchase form
Route::get('/purchaseForm', function () {
    return view('purchaseForm');
});

//create purchase req
Route::POST('/createRequest', [demoController::class, 'createReq']);

//view purchase req to be updated
Route::get('/updateForm/{purchase_id}', [demoController::class, 'toUpdPurchase']);

//submit updated purchase req
Route::POST('/update', [demoController::class, 'updatePurchase']);

//delete purchase req
Route::get('delete/{purchase_id}', [demoController::class, 'deletePurchase']);