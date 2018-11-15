<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photogallery extends Model
{
    public function catname(){
    	 return $this->belongsTo('App\gallerycategory','pgallery_cat','gallerycat_id');
    }

}
