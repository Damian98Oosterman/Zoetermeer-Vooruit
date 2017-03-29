<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question as Question;

class Quiz extends Model
{
    protected $table = 'quiz';
	
	public function answers() {
		return $this->hasMany(Question::class);
	}
}
