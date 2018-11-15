<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
   public function menu_name(){
    	 return $this->belongsTo('App\menu','menu_id','id');
    }
}
