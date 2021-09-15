<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ComicController;
use App\Models\Person;
use App\Models\Product;

Route::get('/', [AuthorController::class, 'index']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/author/{author}',[AuthorController::class, 'bind']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);

Route::get('/softdelete', function () {
    Person::find(2)->delete();
});

Route::get('softdelete/get', function(){
    $person = Person::onlyTrashed()->get();
    dd($person);
});

Route::get('softdelete/store', function(){
    $result = Person::onlyTrashed()->restore();
    echo $result;
});

Route::get('softdelete/adsolute', function(){
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});

Route::get('uuid', function(){
    $products = Product::all();
    foreach($products as $product){
        echo $product.'<br>';
    }
});

Route::get('fill', [ComicController::class, 'fillComic']);
Route::get('create', [ComicController::class, 'createComic']);
Route::get('insert', [ComicController::class, 'insertComic']);