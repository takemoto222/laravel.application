<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'nationality'];


public function relate(Request $request) //追記
    {
        $items = Author::all();
        return view('author.index', ['items' => $items]);
    }
    public function book(){
        return $this->hasOne('App\Models\Book');
    }
    public function books(){
        return $this->hasMary('App\Models\Book');
    }
}

