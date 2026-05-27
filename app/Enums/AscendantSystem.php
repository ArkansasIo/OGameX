<?php

namespace OGame\Enums;

enum AscendantSystem: string
{
    // Tier 8 - Mythic Level (Gateway to Ascension)
    case MYTHIC_AWAKENING = 'MYTHIC_AWAKENING';
    case REALITY_GATE = 'REALITY_GATE';
    case INFINITE_ARCHIVE = 'INFINITE_ARCHIVE';
    case VOID_COMMUNION = 'VOID_COMMUNION';
    case STELLAR_TRANSCENDENCE = 'STELLAR_TRANSCENDENCE';

    // Tier 9 - Ascendant Level (Reality Warping)
    case OMNISCIENCE_PATH = 'OMNISCIENCE_PATH';
    case REALITY_WEAVER = 'REALITY_WEAVER';
    case DIMENSIONAL_LORD = 'DIMENSIONAL_LORD';
    case INFINITY_ENGINE = 'INFINITY_ENGINE';
    case COSMIC_ASCENSION = 'COSMIC_ASCENSION';

    public function getDescription(): string
    {
        return match ($this) {
            // Tier 8
            self::MYTHIC_AWAKENING => 'Awakening to mythic power levels',
            self::REALITY_GATE => 'Gateway to altering fundamental reality',
            self::INFINITE_ARCHIVE => 'Access to infinite knowledge',
            self::VOID_COMMUNION => 'Direct connection to the void',
            self::STELLAR_TRANSCENDENCE => 'Transcendence beyond stellar limitations',

            // Tier 9
            self::OMNISCIENCE_PATH => 'Path to omniscience and godhood',
            self::REALITY_WEAVER => 'Master of reality manipulation',
            self::DIMENSIONAL_LORD => 'Lord of all dimensions',
            self::INFINITY_ENGINE => 'Engine of infinite possibility',
            self::COSMIC_ASCENSION => 'Ultimate cosmic ascension',
        };
    }

    public function getTier(): int
    {
        return match ($this) {
            self::MYTHIC_AWAKENING,
            self::REALITY_GATE,
            self::INFINITE_ARCHIVE,
            self::VOID_COMMUNION,
            self::STELLAR_TRANSCENDENCE => 8,

            self::OMNISCIENCE_PATH,
            self::REALITY_WEAVER,
            self::DIMENSIONAL_LORD,
            self::INFINITY_ENGINE,
            self::COSMIC_ASCENSION => 9,
        };
    }

    public function getPowerLevel(): float
    {
        return match ($this) {
            // Tier 8 - Mythic (1000-9999)
            self::MYTHIC_AWAKENING => 1000.0,
            self::REALITY_GATE => 2500.0,
            self::INFINITE_ARCHIVE => 4000.0,
            self::VOID_COMMUNION => 6000.0,
            self::STELLAR_TRANSCENDENCE => 9999.0,

            // Tier 9 - Ascendant (10000+)
            self::OMNISCIENCE_PATH => 10000.0,
            self::REALITY_WEAVER => 50000.0,
            self::DIMENSIONAL_LORD => 100000.0,
            self::INFINITY_ENGINE => 500000.0,
            self::COSMIC_ASCENSION => 1000000.0,
        };
    }

    public function getAscensionProgress(): float
    {
        return match ($this) {
            // Tier 8 - 10-90%
            self::MYTHIC_AWAKENING => 0.10,
            self::REALITY_GATE => 0.25,
            self::INFINITE_ARCHIVE => 0.50,
            self::VOID_COMMUNION => 0.75,
            self::STELLAR_TRANSCENDENCE => 0.90,

            // Tier 9 - 100%+
            self::OMNISCIENCE_PATH => 1.00,
            self::REALITY_WEAVER => 1.25,
            self::DIMENSIONAL_LORD => 1.50,
            self::INFINITY_ENGINE => 2.00,
            self::COSMIC_ASCENSION => 3.00,
        };
    }

    public function getRequiredMegastructures(): array
    {
        return match ($this) {
            // Tier 8 Requirements
            self::MYTHIC_AWAKENING => [
                'RESEARCH_MEGALAB' => 8,
                'QUANTUM_PROCESSOR' => 8,
            ],
            self::REALITY_GATE => [
                'DIMENSIONAL_ANCHOR' => 8,
                'WORMHOLE_STABILIZER' => 8,
                'REALITY_GATE' => 1,
            ],
            self::INFINITE_ARCHIVE => [
                'KNOWLEDGE_VAULT' => 8,
                'AI_NEXUS' => 8,
                'SIMULATION_ENGINE' => 8,
            ],
            self::VOID_COMMUNION => [
                'INFINITY_CORE' => 1,
                'BLACK_HOLE_COLLECTOR' => 8,
                'DARK_MATTER_REFINERY' => 8,
            ],
            self::STELLAR_TRANSCENDENCE => [
                'DYSON_SPHERE' => 8,
                'STELLAR_ENGINE' => 8,
                'TACHYON_HARVESTER' => 8,
            ],

            // Tier 9 Requirements
            self::OMNISCIENCE_PATH => [
                'OMNISCIENCE_TOWER' => 1,
                'KNOWLEDGE_VAULT' => 9,
                'AI_NEXUS' => 9,
            ],
            self::REALITY_WEAVER => [
                'ASCENDANT_NEXUS' => 1,
                'REALITY_GATE' => 9,
                'DIMENSIONAL_ANCHOR' => 9,
                'WORMHOLE_STABILIZER' => 9,
            ],
            self::DIMENSIONAL_LORD => [
                'DIMENSIONAL_GATEWAY' => 9,
                'JUMP_GATE_MEGA' => 9,
                'WARP_STATION' => 9,
            ],
            self::INFINITY_ENGINE => [
                'INFINITY_CORE' => 9,
                'DARK_MATTER_REFINERY' => 9,
                'TACHYON_HARVESTER' => 9,
            ],
            self::COSMIC_ASCENSION => [
                'OMNISCIENCE_TOWER' => 9,
                'ASCENDANT_NEXUS' => 9,
                'INFINITY_CORE' => 9,
            ],
        };
    }

    public function getUnlockableTechs(): array
    {
        return match ($this) {
            self::MYTHIC_AWAKENING => [
                'mythic_protocols',
                'reality_perception_level_1',
            ],
            self::REALITY_GATE => [
                'reality_warping_basics',
                'dimensional_navigation_level_1',
            ],
            self::INFINITE_ARCHIVE => [
                'total_knowledge_access',
                'omniscience_protocols_level_1',
            ],
            self::VOID_COMMUNION => [
                'void_energy_manipulation',
                'infinite_energy_access',
            ],
            self::STELLAR_TRANSCENDENCE => [
                'stellar_god_powers',
                'universal_engineering_level_1',
            ],
            self::OMNISCIENCE_PATH => [
                'true_omniscience',
                'godhood_protocols_level_1',
            ],
            self::REALITY_WEAVER => [
                'advanced_reality_manipulation',
                'universe_reconstruction',
            ],
            self::DIMENSIONAL_LORD => [
                'dimensional_mastery',
                'multiversal_navigation',
            ],
            self::INFINITY_ENGINE => [
                'infinite_energy_production',
                'infinite_matter_generation',
            ],
            self::COSMIC_ASCENSION => [
                'cosmic_godhood',
                'universal_omnipotence',
                'reality_rewrite',
            ],
        };
    }

    public function getPassiveEffects(): array
    {
        return match ($this) {
            // Tier 8 Effects
            self::MYTHIC_AWAKENING => [
                'power_generation_multiplier' => 5.0,
                'tech_research_speed' => 0.75,
            ],
            self::REALITY_GATE => [
                'travel_speed_multiplier' => 3.0,
                'dimension_perception' => 1.0,
            ],
            self::INFINITE_ARCHIVE => [
                'knowledge_gain_multiplier' => 10.0,
                'tech_discovery_rate' => 2.0,
            ],
            self::VOID_COMMUNION => [
                'energy_efficiency' => 0.5,
                'resource_efficiency' => 0.6,
            ],
            self::STELLAR_TRANSCENDENCE => [
                'stellar_control' => 1.0,
                'planetary_management' => 5.0,
            ],

            // Tier 9 Effects
            self::OMNISCIENCE_PATH => [
                'all_knowledge' => true,
                'technology_understanding' => 1.0,
                'universe_perception' => 1.0,
            ],
            self::REALITY_WEAVER => [
                'reality_manipulation_power' => 10.0,
                'matter_energy_conversion' => 1.0,
                'dimension_alteration' => 1.0,
            ],
            self::DIMENSIONAL_LORD => [
                'multidimensional_presence' => 1.0,
                'dimension_creation' => 1.0,
                'parallel_universe_access' => 1.0,
            ],
            self::INFINITY_ENGINE => [
                'infinite_resource_generation' => 1.0,
                'infinite_energy_production' => 1.0,
                'infinite_matter_production' => 1.0,
            ],
            self::COSMIC_ASCENSION => [
                'godhood' => 1.0,
                'universal_omnipotence' => 1.0,
                'timeline_manipulation' => 1.0,
                'reality_recreation' => 1.0,
            ],
        };
    }

    public function isMaxAscension(): bool
    {
        return $this === self::COSMIC_ASCENSION;
    }

    public function isFullyAscendant(): bool
    {
        return $this->getTier() === 9;
    }
}
