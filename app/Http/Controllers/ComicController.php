<?php

namespace App\Http\Controllers;


use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ComicController extends Controller
{
    public function fillComic() {
        $comic = new Comic();
        $uuid = (string)Str::uuid();
        $comic->fill([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'FillComic',
            'price' => 1500,
        ]) ;
        $comic->save();
    }
    public function createComic() {
        $uuid = (string)Str::uuid();
        Comic::create([
            'uuid' =>  $uuid,
            'name' => 'CreateComic',
            'price' => 1200,
        ]);
    } 
    public function insertComic() {
        $comic = new Comic();
        $uuid = (string)Str::uuid();
        $comic::insert([
            'uuid' =>  $uuid,
            'name' => 'InsertBook',
            'price' => 1800,
        ]);
    }
    
}
