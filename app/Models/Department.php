<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Department extends Model
{
    use HasFactory  ,Notifiable;
    protected $table="departments";

    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function coursetype()
    {
        return $this->hasMany(Coursetype::class);
    }

}
