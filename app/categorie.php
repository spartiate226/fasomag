<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable=['nom'];
    function Articles(){
        return $this->hasMany(Article::class);
    }
}
