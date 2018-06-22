<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    public function catagory()
    {
    	return $this->belongsTo(Catagory::class);
    }
}
 