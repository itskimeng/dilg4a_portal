<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AppItemController;
use App\Http\Controllers\PurchaseRequestController;
use App\Models\AppItemModel;
use App\Models\PurchaseRequestItemModel;
use App\Models\PurchaseRequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});
Route::middleware('api')->group(function () {
    Route::get('fetchAppData', [AppItemController::class, 'fetchAppData']);
});

Route::middleware('api')->group(function () {
    Route::get('get_purchase_request_details', [PurchaseRequestController::class, 'getPurchaseRequestDetails']);
    
});
Route::middleware('api')->group(function () {
    Route::get('appitems', [AppItemController::class, 'getAppData']);

});
Route::middleware('api')->group(function () {
    Route::get('generatePurchaseRequestNo', [PurchaseRequestController::class, 'generatePurchaseRequestNo']);

});

Route::middleware('api')->group(function () {
    Route::get('generateStockNumber', [AppItemController::class, 'generateStockNumber']);
});



Route::middleware('api')->group(function () {
    Route::get('countTotalItem/{cur_year}', [AppItemController::class, 'countTotalItem']);
});

Route::middleware('api')->group(function () {
    Route::get('viewPurchaseRequest/{id}', [PurchaseRequestController::class, 'viewPurchaseRequest']);
});

Route::post('login',[UserController::class,'login']);
Route::post('post_add_appItem',[AppItemController::class,'post_add_appItem']);
Route::post('post_insert_pritem',[PurchaseRequestController::class,'post_insert_pritem']);
Route::post('post_remove_pritem',[PurchaseRequestController::class,'post_remove_pritem']);
Route::post('post_insert_purchaseNo',[PurchaseRequestController::class,'post_insert_purchaseNo']);
Route::post('post_update_purchaseRequestDetails',[PurchaseRequestController::class,'post_update_purchaseRequestDetails']);
Route::post('fetchCart', [PurchaseRequestController::class, 'fetchCart']);
Route::post('fetchPurchaseReqData', [PurchaseRequestController::class, 'fetchPurchaseReqData']);
Route::post('total_amount', [PurchaseRequestController::class, 'total_amount']);

// E X P O R T
// routes/web.php or routes/api.php
Route::middleware('api')->group(function () {
    Route::get('export-purchase-request/{id}', [PurchaseRequestController::class, 'viewPurchaseRequest']);
});







