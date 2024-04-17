<?php

// database/migrations/xxxx_xx_xx_add_tempo_minimo_to_equipamentos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTempoMinimoToEquipamentosTable extends Migration
{
    public function up()
    {
        Schema::table('equipamentos', function (Blueprint $table) {
            $table->integer('tempo_minimo')->default(60); // Adicionando o campo de tempo mínimo (em minutos)
        });
    }

    public function down()
    {
        Schema::table('equipamentos', function (Blueprint $table) {
            $table->dropColumn('tempo_minimo');
        });
    }
}
