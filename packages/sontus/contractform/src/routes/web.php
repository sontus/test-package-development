<?php


use Illuminate\Support\Facades\Route;
use Sontus\Contractform\Http\Controllers\ContractFormController;

Route::group(['middleware' => ['web','guest']], function () {
    Route::get('/contract',[ContractFormController::class,'create']);
    Route::post('/submit-message',[ContractFormController::class,'store'])->name('submit-message')->middleware('throttle:5,1');;
});

