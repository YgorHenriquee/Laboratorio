<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Labs extends Migration
{
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sala');
            $table->string('username');
    
            $table->string('equipment');
            $table->text('purpose');
            
        });
    }

    public function down()
    {
       
    }
}
