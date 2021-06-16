<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursetype extends Model
{
    use HasFactory;
    protected $table="coursetypes";
    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
