<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    /**
    * Get the quizzes for the lesson.
    */
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
