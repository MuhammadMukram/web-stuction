<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPassword extends Model
{
    use HasFactory;

    protected $table = 'user_password';
    protected $primaryKey = 'id';
    

    protected $fillable = [
        'password',
        'old_password',
    ];

    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }

    

    // public function getAuthPassword()
    // {
    //     return $this->password;
    // }

    // public function getRememberToken()
    // {
    //     return $this->remember_token;
    // }
}
