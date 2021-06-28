<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignCourses extends Model
{
    use HasFactory;
    protected $table="assign_courses";

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
