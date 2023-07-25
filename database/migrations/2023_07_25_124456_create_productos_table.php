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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150);
            $table->string('detalle',250);
            $table->double('precio', 8, 2);
            $table->binary('imagen');
            $table->foreignId('marca_id')
            ->nulleable()
            ->cobstrained('marcas')
            ->cascadeOnUpdate()
            ->nullOnDellete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
