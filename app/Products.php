<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function color()
    {
    	return $this->hasOne(Color::class);
    }

}




