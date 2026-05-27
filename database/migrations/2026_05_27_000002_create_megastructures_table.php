<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('megastructures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('planet_id')->nullable();
            $table->string('type'); // MegastructureType enum
            $table->integer('tier')->default(1); // 1-9
            $table->string('name');
            $table->text('description')->nullable();
            
            // Status and Progress
            $table->boolean('is_active')->default(true);
            $table->boolean('is_constructing')->default(false);
            $table->integer('construction_progress')->default(0); // 0-100
            $table->timestamp('construction_started_at')->nullable();
            $table->timestamp('construction_completed_at')->nullable();
            
            // Stats
            $table->float('power_output')->default(0);
            $table->float('power_consumption')->default(0);
            $table->float('resource_generation')->default(0);
            $table->float('defense_strength')->default(0);
            $table->float('construction_speed_bonus')->default(0);
            $table->float('research_speed_bonus')->default(0);
            $table->float('storage_capacity')->default(0);
            $table->float('efficiency')->default(1.0);
            
            // Advanced Stats
            $table->float('quantum_efficiency')->default(0);
            $table->float('dimensional_stability')->default(0);
            $table->float('temporal_distortion')->default(0);
            $table->float('exotic_particle_manipulation')->default(0);
            
            // Ascendant Stats (Tier 8-9)
            $table->float('ascension_factor')->default(0);
            $table->float('omniscience_level')->default(0);
            $table->float('reality_manipulation')->default(0);
            $table->float('dimension_traversal')->default(0);
            
            // Resources and Costs
            $table->double('maintenance_cost')->default(0);
            $table->double('upgrade_cost')->default(0);
            $table->integer('upgrade_time')->default(0); // In seconds
            
            // Operational Data
            $table->timestamp('last_maintenance')->nullable();
            $table->timestamp('last_active_at')->nullable();
            $table->integer('operational_cycles')->default(0);
            
            // Metadata
            $table->json('stats_data')->nullable();
            $table->json('upgrade_chain')->nullable(); // Track upgrade history
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('planet_id')->references('id')->on('planets')->onDelete('cascade');
            $table->index('user_id');
            $table->index('planet_id');
            $table->index('type');
            $table->index('tier');
            $table->index('is_active');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('megastructures');
    }
};
