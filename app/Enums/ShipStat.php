<?php

namespace OGame\Enums;

enum ShipStat: string
{
    // Combat Stats
    case ATTACK_POWER = 'ATTACK_POWER';
    case DEFENSE_RATING = 'DEFENSE_RATING';
    case HULL_STRENGTH = 'HULL_STRENGTH';
    case ARMOR_THICKNESS = 'ARMOR_THICKNESS';
    case SHIELD_STRENGTH = 'SHIELD_STRENGTH';

    // Performance Stats
    case SPEED = 'SPEED';
    case ACCELERATION = 'ACCELERATION';
    case MANEUVERABILITY = 'MANEUVERABILITY';
    case AGILITY = 'AGILITY';
    case TURN_RATE = 'TURN_RATE';

    // Energy Stats
    case POWER_GENERATION = 'POWER_GENERATION';
    case POWER_CONSUMPTION = 'POWER_CONSUMPTION';
    case ENERGY_EFFICIENCY = 'ENERGY_EFFICIENCY';
    case FUEL_CAPACITY = 'FUEL_CAPACITY';
    case FUEL_CONSUMPTION = 'FUEL_CONSUMPTION';

    // Cargo & Capacity
    case CARGO_CAPACITY = 'CARGO_CAPACITY';
    case CREW_CAPACITY = 'CREW_CAPACITY';
    case MODULE_SLOTS = 'MODULE_SLOTS';
    case WEAPON_HARDPOINTS = 'WEAPON_HARDPOINTS';
    case DEFENSIVE_SYSTEMS = 'DEFENSIVE_SYSTEMS';

    // Sensor & Detection
    case SENSOR_RANGE = 'SENSOR_RANGE';
    case DETECTION_RATING = 'DETECTION_RATING';
    case STEALTH_RATING = 'STEALTH_RATING';
    case SIGNATURE = 'SIGNATURE';
    case EVASION = 'EVASION';

    // Support & Utility
    case REPAIR_CAPABILITY = 'REPAIR_CAPABILITY';
    case MEDICAL_FACILITIES = 'MEDICAL_FACILITIES';
    case SCIENCE_LABS = 'SCIENCE_LABS';
    case COMMUNICATION_RANGE = 'COMMUNICATION_RANGE';
    case TOWING_CAPACITY = 'TOWING_CAPACITY';

    // Advanced Stats
    case QUANTUM_JUMP_RANGE = 'QUANTUM_JUMP_RANGE';
    case WARP_FACTOR = 'WARP_FACTOR';
    case DIMENSIONAL_STABILITY = 'DIMENSIONAL_STABILITY';
    case TIME_DILATION_RESISTANCE = 'TIME_DILATION_RESISTANCE';

    public function getCategory(): string
    {
        return match ($this) {
            self::ATTACK_POWER,
            self::DEFENSE_RATING,
            self::HULL_STRENGTH,
            self::ARMOR_THICKNESS,
            self::SHIELD_STRENGTH => 'Combat',
            
            self::SPEED,
            self::ACCELERATION,
            self::MANEUVERABILITY,
            self::AGILITY,
            self::TURN_RATE => 'Performance',
            
            self::POWER_GENERATION,
            self::POWER_CONSUMPTION,
            self::ENERGY_EFFICIENCY,
            self::FUEL_CAPACITY,
            self::FUEL_CONSUMPTION => 'Energy',
            
            self::CARGO_CAPACITY,
            self::CREW_CAPACITY,
            self::MODULE_SLOTS,
            self::WEAPON_HARDPOINTS,
            self::DEFENSIVE_SYSTEMS => 'Capacity',
            
            self::SENSOR_RANGE,
            self::DETECTION_RATING,
            self::STEALTH_RATING,
            self::SIGNATURE,
            self::EVASION => 'Sensors & Detection',
            
            self::REPAIR_CAPABILITY,
            self::MEDICAL_FACILITIES,
            self::SCIENCE_LABS,
            self::COMMUNICATION_RANGE,
            self::TOWING_CAPACITY => 'Support & Utility',
            
            self::QUANTUM_JUMP_RANGE,
            self::WARP_FACTOR,
            self::DIMENSIONAL_STABILITY,
            self::TIME_DILATION_RESISTANCE => 'Advanced',
        };
    }

    public function isCombatStat(): bool
    {
        return $this->getCategory() === 'Combat';
    }

    public function isPerformanceStat(): bool
    {
        return $this->getCategory() === 'Performance';
    }

    public function isEnergyStat(): bool
    {
        return $this->getCategory() === 'Energy';
    }

    public function isUtilityStat(): bool
    {
        return $this->getCategory() === 'Support & Utility';
    }

    public function isAdvancedStat(): bool
    {
        return $this->getCategory() === 'Advanced';
    }
}
