<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToEventosTable extends Migration
{
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable()->after('ativo');
        });
    }

    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
