<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table="results";


    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function session()
    {
        return $this->belongsTo(Session::class);
    }

}
