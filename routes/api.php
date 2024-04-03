<?php

use App\Http\Controllers\CoaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('coa/list-group-modul', 'App\Http\Controllers\CoaController@storeGroupModul')->name('group_modul.store');

Route::prefix('coa')->group(function () {
    Route::put('group-modul/{id}', [CoaController::class, 'updateGroupModul'])->name('group_modul.update');
});
Route::delete('group-modul/{id}', [CoaController::class, 'deleteGroupModul'])->name('group_modul.delete');












Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
