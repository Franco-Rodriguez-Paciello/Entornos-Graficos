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
         Schema::create('novedades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->dateTime('fecha_desde')->nullable();
            $table->dateTime('fecha_hasta')->nullable();
            $table->integer('id_categoria_cliente');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::table('novedades', function (Blueprint $table) {
            //
        });
    }
};
