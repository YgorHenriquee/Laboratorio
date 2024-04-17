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
        Schema::create('linreservas', function (Blueprint $table) {
            $table->id();
            $table->integer('numReserva');
            $table->date('dataReserva');
            $table->integer('tempo');
            $table->integer('idEquipamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linreservas');
    }
};
