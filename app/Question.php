<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz as Quiz;

class Question extends Model
{
  protected $table = 'question';

    public function answers(){
        return $this->hasMany('App\Answer');
    }

	public function quiz() {
		return $this->belongsToOne(Quiz::class);
    }
}
