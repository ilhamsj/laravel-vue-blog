<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $fillable = [
        'user_id',
        'article_id',
        'categories_id'
    ];
}
