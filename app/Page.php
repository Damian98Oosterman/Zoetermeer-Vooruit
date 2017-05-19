<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "page";
    
    public function getOwner() {
    	return $this->belongsTo(User::class);
    }
}
