<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\RetraitController;
use App\Http\Controllers\TransfertController;
use App\Http\Controllers\TransactionController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route pour effectuer un transfert d'argent
Route::post('/transfert', [TransfertController::class, 'effectuerTransfert']);

Route::post('/retrait', [RetraitController::class, 'effectuerRetrait']);

// Route pour effectuer un dépôt d'argent
Route::post('/depo', [DepotController::class, 'effectuerDepot']);

Route::post('/depot', [TransactionController::class, 'faireDepot']);
