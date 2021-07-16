<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batch_semester extends Model
{
    use HasFactory;
    protected $table = "batch_semesters";
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
