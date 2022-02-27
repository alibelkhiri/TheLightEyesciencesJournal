<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Chapitre extends Model
{
    use Notifiable;
    protected $table = "sammury_chapter";
    protected $fillable = [
         'id','	title','chapitre_parent'
     ];

    
       public function Parent(){
        return $this->belongsTo('App\Chapitre','chapitre_parent');
                           }

}
