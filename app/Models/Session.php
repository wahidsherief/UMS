<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table="sessions";
    public function assigncourses()
    {
        return $this->hasMany(AssignCourses::class);
    }
    public function result()
    {
        return $this->hasMany(Result::class);
    }
}
