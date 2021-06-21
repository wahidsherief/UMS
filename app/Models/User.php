<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'picture',
        'password',
        'account_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getPictureAttribute($value)
    {
        if ($value) {
            return asset('users/images/' . $value);
        } else {
            return asset('users/images/no-image.jpg');
        }
    }

    public function notice()
    {
        return $this->hasMany(Notice::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
