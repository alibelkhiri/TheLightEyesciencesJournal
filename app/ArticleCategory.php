<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ArticleCategory extends Model
{
    use Notifiable;
    protected $table = "article_category";
    protected $fillable = [
         'id','category'

     ];
}
