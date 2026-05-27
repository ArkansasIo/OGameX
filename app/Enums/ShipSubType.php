<?php

namespace OGame\Enums;

enum ShipSubType: string
{
    // Fighter Subtypes
    case FIGHTER_INTERCEPTOR = 'FIGHTER_INTERCEPTOR';
    case FIGHTER_MULTIROLE = 'FIGHTER_MULTIROLE';
    case FIGHTER_STEALTH = 'FIGHTER_STEALTH';
    case FIGHTER_ASSAULT = 'FIGHTER_ASSAULT';

    // Corvette Subtypes
    case CORVETTE_SCOUT = 'CORVETTE_SCOUT';
    case CORVETTE_ATTACK = 'CORVETTE_ATTACK';
    case CORVETTE_SUPPORT = 'CORVETTE_SUPPORT';
    case CORVETTE_EXPLORATION = 'CORVETTE_EXPLORATION';

    // Capital Subtypes
    case CAPITAL_COMMAND = 'CAPITAL_COMMAND';
    case CAPITAL_ASSAULT = 'CAPITAL_ASSAULT';
    case CAPITAL_DEFENSE = 'CAPITAL_DEFENSE';
    case CAPITAL_ARTILLERY = 'CAPITAL_ARTILLERY';

    // Transport Subtypes
    case TRANSPORT_CARGO = 'TRANSPORT_CARGO';
    case TRANSPORT_PASSENGER = 'TRANSPORT_PASSENGER';
    case TRANSPORT_DIPLOMATIC = 'TRANSPORT_DIPLOMATIC';
    case TRANSPORT_EXPEDITION = 'TRANSPORT_EXPEDITION';

    // Support Subtypes
    case SUPPORT_MEDICAL = 'SUPPORT_MEDICAL';
    case SUPPORT_ENGINEERING = 'SUPPORT_ENGINEERING';
    case SUPPORT_LOGISTICS = 'SUPPORT_LOGISTICS';
    case SUPPORT_COMMUNICATION = 'SUPPORT_COMMUNICATION';

    // Special Subtypes
    case SPECIAL_MINING = 'SPECIAL_MINING';
    case SPECIAL_RESEARCH = 'SPECIAL_RESEARCH';
    case SPECIAL_CONSTRUCTION = 'SPECIAL_CONSTRUCTION';
    case SPECIAL_SCIENTIFIC = 'SPECIAL_SCIENTIFIC';

    public function getDescription(): string
    {
        return match ($this) {
            // Fighters
            self::FIGHTER_INTERCEPTOR => 'Fast interceptor for dogfighting',
            self::FIGHTER_MULTIROLE => 'Versatile multi-role fighter',
            self::FIGHTER_STEALTH => 'Stealthy fighter with low signature',
            self::FIGHTER_ASSAULT => 'Heavy assault fighter',

            // Corvettes
            self::CORVETTE_SCOUT => 'Light scouting corvette',
            self::CORVETTE_ATTACK => 'Attack-focused corvette',
            self::CORVETTE_SUPPORT => 'Support corvette',
            self::CORVETTE_EXPLORATION => 'Deep space exploration corvette',

            // Capital Ships
            self::CAPITAL_COMMAND => 'Command flagship vessel',
            self::CAPITAL_ASSAULT => 'Assault-focused capital ship',
            self::CAPITAL_DEFENSE => 'Defensive capital ship',
            self::CAPITAL_ARTILLERY => 'Artillery-focused capital ship',

            // Transports
            self::TRANSPORT_CARGO => 'Cargo transport vessel',
            self::TRANSPORT_PASSENGER => 'Passenger transport vessel',
            self::TRANSPORT_DIPLOMATIC => 'Diplomatic transport vessel',
            self::TRANSPORT_EXPEDITION => 'Expedition transport vessel',

            // Support
            self::SUPPORT_MEDICAL => 'Medical support vessel',
            self::SUPPORT_ENGINEERING => 'Engineering support vessel',
            self::SUPPORT_LOGISTICS => 'Logistics support vessel',
            self::SUPPORT_COMMUNICATION => 'Communication relay vessel',

            // Special
            self::SPECIAL_MINING => 'Mining and resource extraction',
            self::SPECIAL_RESEARCH => 'Mobile research laboratory',
            self::SPECIAL_CONSTRUCTION => 'Mobile construction facility',
            self::SPECIAL_SCIENTIFIC => 'Scientific research vessel',
        };
    }

    public function getCostMultiplier(): float
    {
        return match ($this) {
            self::FIGHTER_INTERCEPTOR => 1.0,
            self::FIGHTER_MULTIROLE => 1.1,
            self::FIGHTER_STEALTH => 1.3,
            self::FIGHTER_ASSAULT => 1.2,

            self::CORVETTE_SCOUT => 1.5,
            self::CORVETTE_ATTACK => 1.7,
            self::CORVETTE_SUPPORT => 1.6,
            self::CORVETTE_EXPLORATION => 1.8,

            self::CAPITAL_COMMAND => 2.5,
            self::CAPITAL_ASSAULT => 2.2,
            self::CAPITAL_DEFENSE => 2.4,
            self::CAPITAL_ARTILLERY => 2.3,

            self::TRANSPORT_CARGO => 1.8,
            self::TRANSPORT_PASSENGER => 1.9,
            self::TRANSPORT_DIPLOMATIC => 2.0,
            self::TRANSPORT_EXPEDITION => 2.1,

            self::SUPPORT_MEDICAL => 2.0,
            self::SUPPORT_ENGINEERING => 2.1,
            self::SUPPORT_LOGISTICS => 2.2,
            self::SUPPORT_COMMUNICATION => 1.9,

            self::SPECIAL_MINING => 2.2,
            self::SPECIAL_RESEARCH => 2.4,
            self::SPECIAL_CONSTRUCTION => 2.5,
            self::SPECIAL_SCIENTIFIC => 2.3,
        };
    }

    public function getSpeedModifier(): float
    {
        return match ($this) {
            self::FIGHTER_INTERCEPTOR => 1.5,
            self::FIGHTER_MULTIROLE => 1.0,
            self::FIGHTER_STEALTH => 1.1,
            self::FIGHTER_ASSAULT => 0.9,

            self::CORVETTE_SCOUT => 1.3,
            self::CORVETTE_ATTACK => 0.9,
            self::CORVETTE_SUPPORT => 0.8,
            self::CORVETTE_EXPLORATION => 1.1,

            self::CAPITAL_COMMAND => 0.7,
            self::CAPITAL_ASSAULT => 0.8,
            self::CAPITAL_DEFENSE => 0.6,
            self::CAPITAL_ARTILLERY => 0.65,

            self::TRANSPORT_CARGO => 0.6,
            self::TRANSPORT_PASSENGER => 0.7,
            self::TRANSPORT_DIPLOMATIC => 0.75,
            self::TRANSPORT_EXPEDITION => 0.8,

            self::SUPPORT_MEDICAL => 0.7,
            self::SUPPORT_ENGINEERING => 0.75,
            self::SUPPORT_LOGISTICS => 0.7,
            self::SUPPORT_COMMUNICATION => 0.8,

            self::SPECIAL_MINING => 0.5,
            self::SPECIAL_RESEARCH => 0.6,
            self::SPECIAL_CONSTRUCTION => 0.55,
            self::SPECIAL_SCIENTIFIC => 0.65,
        };
    }

    public function getArmorModifier(): float
    {
        return match ($this) {
            self::FIGHTER_INTERCEPTOR => 0.8,
            self::FIGHTER_MULTIROLE => 1.0,
            self::FIGHTER_STEALTH => 0.7,
            self::FIGHTER_ASSAULT => 1.3,

            self::CORVETTE_SCOUT => 0.9,
            self::CORVETTE_ATTACK => 1.2,
            self::CORVETTE_SUPPORT => 1.0,
            self::CORVETTE_EXPLORATION => 0.9,

            self::CAPITAL_COMMAND => 1.3,
            self::CAPITAL_ASSAULT => 1.2,
            self::CAPITAL_DEFENSE => 1.5,
            self::CAPITAL_ARTILLERY => 1.1,

            self::TRANSPORT_CARGO => 0.9,
            self::TRANSPORT_PASSENGER => 1.0,
            self::TRANSPORT_DIPLOMATIC => 0.8,
            self::TRANSPORT_EXPEDITION => 0.9,

            self::SUPPORT_MEDICAL => 0.8,
            self::SUPPORT_ENGINEERING => 0.9,
            self::SUPPORT_LOGISTICS => 1.0,
            self::SUPPORT_COMMUNICATION => 0.8,

            self::SPECIAL_MINING => 0.7,
            self::SPECIAL_RESEARCH => 0.7,
            self::SPECIAL_CONSTRUCTION => 0.8,
            self::SPECIAL_SCIENTIFIC => 0.75,
        };
    }

    public function getShieldModifier(): float
    {
        return match ($this) {
            self::FIGHTER_INTERCEPTOR => 0.9,
            self::FIGHTER_MULTIROLE => 1.0,
            self::FIGHTER_STEALTH => 0.6,
            self::FIGHTER_ASSAULT => 1.1,

            self::CORVETTE_SCOUT => 0.8,
            self::CORVETTE_ATTACK => 1.0,
            self::CORVETTE_SUPPORT => 0.9,
            self::CORVETTE_EXPLORATION => 0.85,

            self::CAPITAL_COMMAND => 1.2,
            self::CAPITAL_ASSAULT => 1.1,
            self::CAPITAL_DEFENSE => 1.4,
            self::CAPITAL_ARTILLERY => 0.95,

            self::TRANSPORT_CARGO => 0.8,
            self::TRANSPORT_PASSENGER => 0.9,
            self::TRANSPORT_DIPLOMATIC => 0.85,
            self::TRANSPORT_EXPEDITION => 0.8,

            self::SUPPORT_MEDICAL => 1.0,
            self::SUPPORT_ENGINEERING => 0.9,
            self::SUPPORT_LOGISTICS => 0.95,
            self::SUPPORT_COMMUNICATION => 0.85,

            self::SPECIAL_MINING => 0.6,
            self::SPECIAL_RESEARCH => 0.7,
            self::SPECIAL_CONSTRUCTION => 0.75,
            self::SPECIAL_SCIENTIFIC => 0.7,
        };
    }

    public function getDamageModifier(): float
    {
        return match ($this) {
            self::FIGHTER_INTERCEPTOR => 1.2,
            self::FIGHTER_MULTIROLE => 1.0,
            self::FIGHTER_STEALTH => 1.0,
            self::FIGHTER_ASSAULT => 1.4,

            self::CORVETTE_SCOUT => 0.8,
            self::CORVETTE_ATTACK => 1.2,
            self::CORVETTE_SUPPORT => 0.5,
            self::CORVETTE_EXPLORATION => 0.6,

            self::CAPITAL_COMMAND => 0.9,
            self::CAPITAL_ASSAULT => 1.3,
            self::CAPITAL_DEFENSE => 1.0,
            self::CAPITAL_ARTILLERY => 1.4,

            self::TRANSPORT_CARGO => 0.0,
            self::TRANSPORT_PASSENGER => 0.0,
            self::TRANSPORT_DIPLOMATIC => 0.1,
            self::TRANSPORT_EXPEDITION => 0.2,

            self::SUPPORT_MEDICAL => 0.0,
            self::SUPPORT_ENGINEERING => 0.2,
            self::SUPPORT_LOGISTICS => 0.0,
            self::SUPPORT_COMMUNICATION => 0.0,

            self::SPECIAL_MINING => 0.0,
            self::SPECIAL_RESEARCH => 0.0,
            self::SPECIAL_CONSTRUCTION => 0.0,
            self::SPECIAL_SCIENTIFIC => 0.0,
        };
    }

    public function getCargoCapacityModifier(): float
    {
        return match ($this) {
            self::FIGHTER_INTERCEPTOR => 0.2,
            self::FIGHTER_MULTIROLE => 0.3,
            self::FIGHTER_STEALTH => 0.15,
            self::FIGHTER_ASSAULT => 0.25,

            self::CORVETTE_SCOUT => 0.4,
            self::CORVETTE_ATTACK => 0.3,
            self::CORVETTE_SUPPORT => 0.5,
            self::CORVETTE_EXPLORATION => 0.6,

            self::CAPITAL_COMMAND => 1.0,
            self::CAPITAL_ASSAULT => 0.8,
            self::CAPITAL_DEFENSE => 0.7,
            self::CAPITAL_ARTILLERY => 0.6,

            self::TRANSPORT_CARGO => 3.0,
            self::TRANSPORT_PASSENGER => 1.5,
            self::TRANSPORT_DIPLOMATIC => 1.0,
            self::TRANSPORT_EXPEDITION => 1.2,

            self::SUPPORT_MEDICAL => 1.2,
            self::SUPPORT_ENGINEERING => 1.5,
            self::SUPPORT_LOGISTICS => 2.5,
            self::SUPPORT_COMMUNICATION => 0.8,

            self::SPECIAL_MINING => 2.0,
            self::SPECIAL_RESEARCH => 1.5,
            self::SPECIAL_CONSTRUCTION => 1.8,
            self::SPECIAL_SCIENTIFIC => 1.3,
        };
    }
}
