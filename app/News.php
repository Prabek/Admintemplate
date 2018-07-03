<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;


class News extends Model
{
    
	use Viewable;
    //
    public function catagory()
    {
    	return $this->belongsTo(Catagory::class);
    }
    
   

}
 