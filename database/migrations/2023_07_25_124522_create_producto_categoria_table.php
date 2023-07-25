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
        Schema::create('producto_categoria', function (Blueprint $table) {
            $table->id();
             
            $table->foreignId('producto_id')
            ->nulleable()
            ->cobstrained('productos')
            ->cascadeOnUpdate()
            ->nullOnDellete();
            
            $table->foreignId('categoria_id')
            ->nulleable()
            ->cobstrained('categorias')
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
        Schema::dropIfExists('producto_categoria');
    }
};
