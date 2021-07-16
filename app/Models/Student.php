<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['account_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

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
    public function result()
    {
        return $this->hasMany(Result::class);
    }
    public function batch_student()
    {
        return $this->hasMany(Batch_student::class);
    }
}
