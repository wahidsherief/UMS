<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch_student extends Model
{
    use HasFactory;
    protected $table = "batch_students";
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
