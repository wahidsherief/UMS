<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table="courses";

    public function department()
    {
        return $this->belongsTo(Department::class);
    }


    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }


}
