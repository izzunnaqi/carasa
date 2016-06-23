<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class Dummy extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'Person';
    protected $fillable = ['id', 'username', 'password', 'nama', 'alamat', 'email', 'hp', 'role', 'created_at', 'updated_at', 'hospital_id', 'remember_token'];
    protected $hidden = ['password', 'remember_token'];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
