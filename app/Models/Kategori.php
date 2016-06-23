<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model implements AuthenticatableContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'Kategori';
    protected $fillable = ['id_kategori', 'nama', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_kategori';
    public $timestamps = true;
}
