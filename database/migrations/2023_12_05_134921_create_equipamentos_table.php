<?php

// Arquivo: database/migrations/[timestamp]_create_equipamentos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentosTable extends Migration
{
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id(); // Isso cria uma chave primária auto_increment chamada 'id'
            $table->string('nome');
            $table->integer('tipoCalendario');
            $table->decimal('preco');
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipamentos');
    }
}
