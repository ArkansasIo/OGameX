<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('planet_id')->nullable();
            $table->unsignedBigInteger('fleet_id')->nullable();
            
            $table->string('name');
            $table->string('class'); // ShipClass enum
            $table->string('sub_type'); // ShipSubType enum
            $table->integer('level')->default(1);
            $table->boolean('is_mothership')->default(false);
            
            // Combat Stats
            $table->integer('attack_power')->default(0);
            $table->integer('defense_rating')->default(0);
            $table->integer('hull_strength')->default(0);
            $table->integer('armor_thickness')->default(0);
            $table->integer('shield_strength')->default(0);
            
            // Performance Stats
            $table->float('speed')->default(0);
            $table->float('acceleration')->default(0);
            $table->float('maneuverability')->default(0);
            $table->float('agility')->default(0);
            $table->float('turn_rate')->default(0);
            
            // Energy Stats
            $table->integer('power_generation')->default(0);
            $table->integer('power_consumption')->default(0);
            $table->float('energy_efficiency')->default(1.0);
            $table->integer('fuel_capacity')->default(0);
            $table->integer('fuel_consumption')->default(0);
            $table->integer('fuel_current')->default(0);
            
            // Capacity
            $table->integer('cargo_capacity')->default(0);
            $table->integer('cargo_current')->default(0);
            $table->integer('crew_capacity')->default(0);
            $table->integer('crew_current')->default(0);
            $table->integer('module_slots')->default(0);
            $table->integer('weapon_hardpoints')->default(0);
            $table->integer('defensive_systems')->default(0);
            
            // Sensors
            $table->float('sensor_range')->default(0);
            $table->float('detection_rating')->default(0);
            $table->float('stealth_rating')->default(0);
            $table->float('signature')->default(0);
            $table->float('evasion')->default(0);
            
            // Support & Utility
            $table->float('repair_capability')->default(0);
            $table->float('medical_facilities')->default(0);
            $table->float('science_labs')->default(0);
            $table->float('communication_range')->default(0);
            $table->float('towing_capacity')->default(0);
            
            // Advanced Stats
            $table->float('quantum_jump_range')->default(0);
            $table->float('warp_factor')->default(0);
            $table->float('dimensional_stability')->default(0);
            $table->float('time_dilation_resistance')->default(0);
            
            // Status
            $table->boolean('is_active')->default(true);
            $table->boolean('is_in_combat')->default(false);
            $table->float('hull_current')->default(0);
            $table->float('shield_current')->default(0);
            
            // Metadata
            $table->json('modules')->nullable();
            $table->json('weapons')->nullable();
            $table->json('upgrades')->nullable();
            $table->json('stats_data')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('planet_id')->references('id')->on('planets')->onDelete('set null');
            $table->index('user_id');
            $table->index('planet_id');
            $table->index('class');
            $table->index('is_mothership');
            $table->index('is_active');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ships');
    }
};
