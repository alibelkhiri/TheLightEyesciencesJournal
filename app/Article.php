<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Article extends Model
{
    use Notifiable;
    protected $table = "article";
    protected $fillable = [
         'id','	title','category','image','artical','created_by','sammury_chapter'
     ];

     public function getcategory(){
        return $this->belongsTo('App\ArticleCategory','category');
                           }
       public function Chapter(){
        return $this->belongsTo('App\Chapitre','category');
                           }

}
