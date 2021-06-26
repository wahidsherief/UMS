<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batchdesign extends Model
{
    use HasFactory;
    protected $table="batchdesigns";
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
    // public function teacher()
    // {
    //     return $this->belongsTo(Teacher::class, 'teacher_id');
    // }
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
