<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $table = "semesters";

    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function assigncourses()
    {
        return $this->hasMany(AssignCourses::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function batch()
    {
        return $this->hasMany(Batch::class);
    }
    public function result()
    {
        return $this->hasMany(Result::class);
    }
    public function batch_semester()
    {
        return $this->hasMany(Batch_semester::class);
    }
}
