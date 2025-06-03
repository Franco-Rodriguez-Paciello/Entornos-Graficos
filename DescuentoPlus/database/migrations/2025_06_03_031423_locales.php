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
        Schema::create('locales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ubicacion');
            $table->dateTime('fecha_desde')->nullable();
            $table->dateTime('fecha_hasta')->nullable();
            $table->integer('id_categoria_cliente');
            //revisar dia semana
            $table->integer('id_rubro');
            $table->integer('id_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('locales', function (Blueprint $table) {
            //
        });
    }
};
