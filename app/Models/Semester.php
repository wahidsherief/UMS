<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $table="semesters";

    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function batchdesign()
    {
        return $this->hasMany(Batchdesign::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
