<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;//追記
use App\Http\Controllers\SessionController;
use App\Models\Person;

Route::get('/' , [AuthorController::class, 'index']);
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);


Route::get('/softdelete', function(){
    Person::find(1)->delete();
});