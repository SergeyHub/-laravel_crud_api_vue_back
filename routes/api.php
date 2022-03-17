<?php

use App\Http\Controllers\ContactController;
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
//  Contacts
Route::get('contacts', [ContactController::class, 'contacts']);
Route::get('get_contact/{id}', [ContactController::class, 'getContact']);
Route::post('add_contact', [ContactController::class, 'addContact']);
Route::delete('delete_contact/{id}', [ContactController::class, 'deleteContact']);
Route::post('update_contact/{id}', [ContactController::class, 'updateContact']);

//  Companies
Route::apiResource('companies' \App\Http\Controllers\Api\CompanyController::)
