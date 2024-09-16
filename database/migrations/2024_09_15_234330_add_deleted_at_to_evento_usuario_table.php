<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToEventoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evento_usuario', function (Blueprint $table) {
            $table->softDeletes(); // Adiciona a coluna deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evento_usuario', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Remove a coluna deleted_at caso necessário
        });
    }
}
