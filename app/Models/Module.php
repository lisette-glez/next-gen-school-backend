<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    /**
    * Get the lessons for the module.
    */
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    /**
    * Get the progress for the module.
    */
    public function moduleProgress()
    {
        return $this->hasMany(Progress::class);
    }
}
