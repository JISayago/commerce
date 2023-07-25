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
        Schema::create('user_rol', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')
            ->nulleable()
            ->cobstrained('users')
            ->cascadeOnUpdate()
            ->nullOnDellete();
            
            $table->foreignId('rol_id')
            ->nulleable()
            ->cobstrained('roles')
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
        Schema::dropIfExists('user_rol');
    }
};
