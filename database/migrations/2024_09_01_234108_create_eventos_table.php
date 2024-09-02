<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do evento
            $table->text('descricao')->nullable(); // Descrição do evento
            $table->date('data'); // Data do evento
            $table->time('hora_inicio')->nullable(); // Hora de início do evento
            $table->time('hora_fim')->nullable(); // Hora de término do evento
            $table->string('localizacao')->nullable(); // Localização do evento
            $table->string('imagem')->nullable(); // URL ou caminho para a imagem do evento
            $table->integer('vagas')->nullable(); // Número máximo de vagas para o evento
            $table->boolean('ativo')->default(true); // Se o evento está ativo ou não
            $table->timestamps(); // Colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
