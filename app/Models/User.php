<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
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

     /**
     * Get the courses for the seller.
     */
    public function sellerCourses()
    {
        return $this->hasMany(Course::class);
    }
}
