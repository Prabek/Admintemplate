<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    //
    public function news()
    {
    	return $this->hasMany(News::class)->orderBy('created_at','desc')->take(3);
    }
}
