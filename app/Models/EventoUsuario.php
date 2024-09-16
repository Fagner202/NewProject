<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoUsuario extends Model
{
    use HasFactory;

    protected $table = 'evento_usuario'; // Nome da tabela no banco de dados

    protected $fillable = ['usuario_id', 'evento_id']; // Colunas permitidas para serem inseridas no banco de dados
}