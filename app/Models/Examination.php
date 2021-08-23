<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;
    protected $table = "examinations";
    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
