<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
  
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the quiz ratings for the student.
     */
    public function student_quiz_ratings()
    {
        return $this->hasMany(QuizRating::class);
    }

    /**
     * Get the enrollments for the student.
     */
    public function studentEnrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
