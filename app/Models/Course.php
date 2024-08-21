<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    /**
     * Get the modules for the course.
     */
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    /**
     * Get the enrollments for the course.
     */
    public function courseEnrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
