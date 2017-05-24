<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz as Quiz;
use App\Answer as Answer;

class Question extends Model
{
  protected $table = 'question';

	public function quiz() {
		return $this->belongsToOne(Quiz::class);
    }

  public function answers() {
    return $this->hasMany(Answer::class);
  }
}
