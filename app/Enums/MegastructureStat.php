<?php

namespace OGame\Enums;

enum MegastructureStat: string
{
    // Primary Stats
    case POWER_OUTPUT = 'POWER_OUTPUT';
    case RESOURCE_GENERATION = 'RESOURCE_GENERATION';
    case DEFENSE_STRENGTH = 'DEFENSE_STRENGTH';
    case CONSTRUCTION_SPEED = 'CONSTRUCTION_SPEED';
    case RESEARCH_SPEED = 'RESEARCH_SPEED';
    case STORAGE_CAPACITY = 'STORAGE_CAPACITY';
    case TRANSPORTATION_CAPACITY = 'TRANSPORTATION_CAPACITY';
    case EFFICIENCY = 'EFFICIENCY';
    
    // Secondary Stats (Sub-Stats)
    case COOLING_EFFICIENCY = 'COOLING_EFFICIENCY';
    case HEAT_DISSIPATION = 'HEAT_DISSIPATION';
    case STRUCTURAL_INTEGRITY = 'STRUCTURAL_INTEGRITY';
    case MATERIAL_DURABILITY = 'MATERIAL_DURABILITY';
    
    // Tertiary Stats
    case ENERGY_CONSUMPTION = 'ENERGY_CONSUMPTION';
    case MAINTENANCE_COST = 'MAINTENANCE_COST';
    case UPGRADE_COST = 'UPGRADE_COST';
    case BUILD_TIME = 'BUILD_TIME';
    
    // Advanced Stats
    case QUANTUM_EFFICIENCY = 'QUANTUM_EFFICIENCY';
    case DIMENSIONAL_STABILITY = 'DIMENSIONAL_STABILITY';
    case TEMPORAL_DISTORTION = 'TEMPORAL_DISTORTION';
    case EXOTIC_PARTICLE_MANIPULATION = 'EXOTIC_PARTICLE_MANIPULATION';
    
    // Ascendant Stats (Tier 8-9)
    case ASCENSION_FACTOR = 'ASCENSION_FACTOR';
    case OMNISCIENCE_LEVEL = 'OMNISCIENCE_LEVEL';
    case REALITY_MANIPULATION = 'REALITY_MANIPULATION';
    case DIMENSION_TRAVERSAL = 'DIMENSION_TRAVERSAL';

    public function getDescription(): string
    {
        return match ($this) {
            self::POWER_OUTPUT => 'Total energy produced per cycle',
            self::RESOURCE_GENERATION => 'Rate of resource production',
            self::DEFENSE_STRENGTH => 'Defensive capability rating',
            self::CONSTRUCTION_SPEED => 'Speed of structure construction',
            self::RESEARCH_SPEED => 'Technology research acceleration',
            self::STORAGE_CAPACITY => 'Maximum resource storage',
            self::TRANSPORTATION_CAPACITY => 'Cargo transport capability',
            self::EFFICIENCY => 'Overall operational efficiency',
            
            self::COOLING_EFFICIENCY => 'Heat management effectiveness',
            self::HEAT_DISSIPATION => 'Waste heat removal rate',
            self::STRUCTURAL_INTEGRITY => 'Physical durability rating',
            self::MATERIAL_DURABILITY => 'Material resistance to damage',
            
            self::ENERGY_CONSUMPTION => 'Energy usage per cycle',
            self::MAINTENANCE_COST => 'Periodic maintenance cost',
            self::UPGRADE_COST => 'Cost to upgrade tier',
            self::BUILD_TIME => 'Time to construct',
            
            self::QUANTUM_EFFICIENCY => 'Quantum operation effectiveness',
            self::DIMENSIONAL_STABILITY => 'Stability across dimensions',
            self::TEMPORAL_DISTORTION => 'Time manipulation capability',
            self::EXOTIC_PARTICLE_MANIPULATION => 'Control of exotic particles',
            
            self::ASCENSION_FACTOR => 'Progress towards ascension',
            self::OMNISCIENCE_LEVEL => 'Knowledge acquisition rate',
            self::REALITY_MANIPULATION => 'Ability to manipulate reality',
            self::DIMENSION_TRAVERSAL => 'Cross-dimensional travel capability',
        };
    }

    public function getStatType(): string
    {
        return match ($this) {
            self::POWER_OUTPUT,
            self::RESOURCE_GENERATION,
            self::DEFENSE_STRENGTH,
            self::CONSTRUCTION_SPEED,
            self::RESEARCH_SPEED,
            self::STORAGE_CAPACITY,
            self::TRANSPORTATION_CAPACITY,
            self::EFFICIENCY => 'Primary',
            
            self::COOLING_EFFICIENCY,
            self::HEAT_DISSIPATION,
            self::STRUCTURAL_INTEGRITY,
            self::MATERIAL_DURABILITY => 'Secondary',
            
            self::ENERGY_CONSUMPTION,
            self::MAINTENANCE_COST,
            self::UPGRADE_COST,
            self::BUILD_TIME => 'Tertiary',
            
            self::QUANTUM_EFFICIENCY,
            self::DIMENSIONAL_STABILITY,
            self::TEMPORAL_DISTORTION,
            self::EXOTIC_PARTICLE_MANIPULATION => 'Advanced',
            
            self::ASCENSION_FACTOR,
            self::OMNISCIENCE_LEVEL,
            self::REALITY_MANIPULATION,
            self::DIMENSION_TRAVERSAL => 'Ascendant',
        };
    }

    public function isAdvanced(): bool
    {
        return $this->getStatType() === 'Advanced';
    }

    public function isAscendant(): bool
    {
        return $this->getStatType() === 'Ascendant';
    }
}
