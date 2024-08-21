<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the payments for the enrollment.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    /**
    * Get the progress for the enrollment.
    */
    public function enrollmentProgress()
    {
        return $this->hasMany(Progress::class);
    }
}
