<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Role extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Define a relação muitos-para-muitos com o modelo User.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}