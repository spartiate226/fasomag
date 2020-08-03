<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded=[];

    function image(){
        return $this->hasOne(Article_image::class,'article_id');
    }

    function Categorie(){
        return $this->belongsTo(categorie::class);
    }
}
