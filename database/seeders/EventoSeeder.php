<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::transaction(function () {
            // Desabilita temporariamente as verificações de chave estrangeira
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            
            // Deleta todos os registros da tabela
            Evento::query()->delete();
            
            // Reabilita as verificações de chave estrangeira
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            // Usando a factory para criar 10 registros
            Evento::factory()->count(10)->create();
        });
    }
}
