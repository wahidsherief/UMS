<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    protected $table="activities";
    use HasFactory;
    public function batchdesign()
    {
        return $this->hasMany(Batchdesign::class);
    }
}
