<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('universes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('seed')->unique(); // Procedural generation seed
            $table->integer('galaxy_count')->default(90);
            $table->integer('quadrant_count')->default(4);
            $table->integer('sector_count')->default(499);
            $table->integer('system_per_sector')->default(20);
            $table->integer('planet_per_system')->default(8);
            $table->timestamps();
            $table->index('seed');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('universes');
    }
};
