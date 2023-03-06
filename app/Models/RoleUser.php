<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    protected $table = 'role_users';
    protected $guarded = [];

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
