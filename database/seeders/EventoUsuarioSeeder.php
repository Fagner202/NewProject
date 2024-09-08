<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class EventoUsuarioSeeder extends Seeder
{
    public function run()
    {
        // Defina o ID do usuário
        $usuarioId = 1;

        // Crie 5 registros na tabela evento_usuario
        foreach (range(1, 5) as $index) {
            DB::table('evento_usuario')->insert([
                'usuario_id' => $usuarioId,
                'evento_id' => Arr::random(range(1, 10)), // Escolhe um valor aleatório entre 1 e 10
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
