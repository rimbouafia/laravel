<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\villeController;
use App\Http\Controllers\faculteController;
use App\Http\Controllers\diplomeController;
use App\Http\Controllers\technologieController;
use App\Http\Controllers\etatController;
use App\Http\Controllers\inscriptionController;




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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| inscription Routes
|--------------------------------------------------------------------------
*/
//-------------------GET----------------//
// Get all diplome
Route::get('formation',[diplomeController::class, 'getdiplome'] );
// Get all etat
Route::get('etat',[etatController::class, 'getetat'] );
// Get all faculte
Route::get('faculte',[faculteController::class, 'getfaculte'] );
// Get all inscription
Route::get('inscription',[inscriptionController::class, 'getinscriptions'] );
// Get all ville
Route::get('ville',[villeController::class, 'getville'] );
// Get all technologie
Route::get('technologie',[technologieController::class, 'gettechnologie'] );

//-----------------ADD-----------------------//
//add diplome
Route::post('creatediplome' , [diplomeController::class, 'creatediplome']);
//add etat
Route::post('createetat' , [etatController::class, 'createetat']);
//add faculte
Route::post('createfaculte' , [faculteController::class, 'createfaculte']);
//add technologie
Route::post('createtechnologie' , [technologieController::class, 'createtechnologie']);
//add inscription
Route::post('createinscription' , [inscriptionController::class, 'addinscription']);
//add ville
Route::post('createville' , [villeController::class, 'createville']);


//----------------UPDATE----------------------//
//update diplome by id
Route::put('updatediplome/{id}' , [diplomeController::class, 'update']);
//update etat by id
Route::put('updateetat/{id}' , [etatController::class, 'update']);
//update faculte by id
Route::put('updatefaculte/{id}' , [faculteController::class, 'update']);
//update technologie by id
Route::put('updatetechnologie/{id}' , [technologieController::class, 'update']);
//update ville by id
Route::put('updateville/{id}' , [villeController::class, 'update']);
//update inscription by id
Route::put('updateinscription/{id}' , [inscriptionController::class, 'update']);

//-----------------DELETE---------------------//
// delete diplome by id
Route::delete('diplome/{id}', [diplomeController::class, 'delete']);
// delete etat by id
Route::delete('etat/{id}', [etatController::class, 'delete']);
// delete faculté by id
Route::delete('faculte/{id}', [faculteController::class, 'delete']);
// delete technologie by id
Route::delete('technologie/{id}', [technologieController::class, 'delete']);
// delete ville by id
Route::delete('ville/{id}', [villeController::class, 'delete']);
// delete inscription by id
Route::delete('inscription/{id}', [inscriptionController::class, 'delete']);