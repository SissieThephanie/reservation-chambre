<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('acceuil');
});


Route::prefix('clients')->controller(ClientController::class)->group(function(){
    Route::get('/' ,'index');
    Route::get('/create' ,'create');
    Route::post('/create' ,'ajoutClient');
    Route::get('/{id}/update' ,'update');
    Route::put('/{id}/update','modifeClient');
    Route::get('/{id}/delete','delete');
});