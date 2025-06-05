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
            $table->dateTime('fecha_desde')->nullable();
            $table->dateTime('fecha_hasta')->nullable();
            $table->foreignId('categoria_cliente_id')->constrained('categoria_clientes')->onDelete('cascade');
            $table->foreignId('estado_promocion_id')->constrained('estado_promociones')->onDelete('cascade');
            $table->foreignId('local_id')->constrained('locales')->onDelete('cascade');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            //revisar dia semana
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
