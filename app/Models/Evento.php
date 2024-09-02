<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PhpParser\Builder\Class_;

Class Evento extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

     // Define o relacionamento muitos-para-muitos com usuarios
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'evento_usuario');
    }
}