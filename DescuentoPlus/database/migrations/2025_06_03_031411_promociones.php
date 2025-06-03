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
        Schema::create('promociones', function (Blueprint $table) {
            $table->id();
            $table->string('texto');
            $table->string('email')->unique();
            $table->dateTime('fecha_desde')->nullable();
            $table->dateTime('fecha_hasta')->nullable();
            $table->integer('id_categoria_cliente');
            //revisar dia semana
            $table->integer('id_estado_promocion');
            $table->integer('id_local');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('promociones', function (Blueprint $table) {
            //
        });
    }
};
