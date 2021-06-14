<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Batch extends Model
{
    use HasFactory, Notifiable;
    protected $table="batches";
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function semester()
    {
        return $this->hasMany(Semester::class);
    }
     public function course()
    {
        return $this->hasMany(Course::class);
    }

}