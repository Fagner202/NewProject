<?php

namespace App\Models;

// use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\DB;
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

    public static function getEventosPorUsuario($usuarioId)
    {
        // Execute a consulta usando o Query Builder
        $eventos = DB::table('eventos as e')
            ->leftJoin('evento_usuario as eu', 'e.id', '=', 'eu.evento_id')
            ->leftJoin('users as u', 'eu.usuario_id', '=', 'u.id')
            ->where('u.id', '=', $usuarioId)
            ->select('e.*')
            ->get();

        return $eventos; // Não use `response()->json()` no modelo; faça isso no controlador
    }
}