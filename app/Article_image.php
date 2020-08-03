<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_image extends Model
{
    protected $fillable=['article_id','chemin'];

    function Article(){
        return $this->belongsTo(Article::class);
    }
}
