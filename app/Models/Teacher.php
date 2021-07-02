<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table="teachers";
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
        return $this->hasMany(Batch::class);
    }
    // public function Batchdesign()
    // {
    //     return $this->hasMany(Batchdesign::class,'batchdesign_id');
    // }
}
