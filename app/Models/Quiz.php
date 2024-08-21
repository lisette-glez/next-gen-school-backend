<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    
    /**
    * Get the questions for the quiz.
    */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    
    /**
    * Get the quiz ratings for the quiz.
    */
    public function quiz_ratings()
    {
        return $this->hasMany(QuizRating::class);
    }
}
