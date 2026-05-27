<?php

namespace OGame\Enums;

enum ShieldType: string
{
    // Kinetic Shields
    case KINETIC_BASIC = 'KINETIC_BASIC';
    case KINETIC_REINFORCED = 'KINETIC_REINFORCED';
    case KINETIC_ADVANCED = 'KINETIC_ADVANCED';

    // Energy Shields
    case ENERGY_BASIC = 'ENERGY_BASIC';
    case ENERGY_ENHANCED = 'ENERGY_ENHANCED';
    case ENERGY_ADAPTIVE = 'ENERGY_ADAPTIVE';

    // Plasma Shields
    case PLASMA_BASIC = 'PLASMA_BASIC';
    case PLASMA_CONTAINMENT = 'PLASMA_CONTAINMENT';
    case PLASMA_REFLECTION = 'PLASMA_REFLECTION';

    // Radiation Shields
    case RADIATION_BASIC = 'RADIATION_BASIC';
    case RADIATION_HEAVY = 'RADIATION_HEAVY';
    case RADIATION_QUANTUM = 'RADIATION_QUANTUM';

    // Deflection Shields
    case DEFLECTION_LIGHT = 'DEFLECTION_LIGHT';
    case DEFLECTION_MEDIUM = 'DEFLECTION_MEDIUM';
    case DEFLECTION_HEAVY = 'DEFLECTION_HEAVY';

    // Exotic Shields
    case EXOTIC_DIMENSIONAL = 'EXOTIC_DIMENSIONAL';
    case EXOTIC_QUANTUM_FIELD = 'EXOTIC_QUANTUM_FIELD';
    case EXOTIC_REALITY = 'EXOTIC_REALITY';

    // Ascendant Shields
    case ASCENDANT_OMNIPOTENT = 'ASCENDANT_OMNIPOTENT';
    case ASCENDANT_ABSOLUTE = 'ASCENDANT_ABSOLUTE';

    public function getDescription(): string
    {
        return match ($this) {
            self::KINETIC_BASIC => 'Basic kinetic impact protection',
            self::KINETIC_REINFORCED => 'Reinforced kinetic barrier',
            self::KINETIC_ADVANCED => 'Advanced kinetic deflection',
            
            self::ENERGY_BASIC => 'Basic energy shield',
            self::ENERGY_ENHANCED => 'Enhanced energy dissipation',
            self::ENERGY_ADAPTIVE => 'Adaptive energy field',
            
            self::PLASMA_BASIC => 'Basic plasma containment',
            self::PLASMA_CONTAINMENT => 'Advanced plasma containment',
            self::PLASMA_REFLECTION => 'Plasma reflection field',
            
            self::RADIATION_BASIC => 'Basic radiation shielding',
            self::RADIATION_HEAVY => 'Heavy radiation protection',
            self::RADIATION_QUANTUM => 'Quantum radiation barrier',
            
            self::DEFLECTION_LIGHT => 'Light deflection shield',
            self::DEFLECTION_MEDIUM => 'Medium deflection barrier',
            self::DEFLECTION_HEAVY => 'Heavy deflection field',
            
            self::EXOTIC_DIMENSIONAL => 'Dimensional phase shield',
            self::EXOTIC_QUANTUM_FIELD => 'Quantum field generator',
            self::EXOTIC_REALITY => 'Reality warping shield',
            
            self::ASCENDANT_OMNIPOTENT => 'Omnipotent protection field',
            self::ASCENDANT_ABSOLUTE => 'Absolute invulnerability',
        };
    }

    public function getTier(): int
    {
        return match ($this) {
            self::KINETIC_BASIC,
            self::ENERGY_BASIC,
            self::PLASMA_BASIC,
            self::RADIATION_BASIC,
            self::DEFLECTION_LIGHT => 1,
            
            self::KINETIC_REINFORCED,
            self::ENERGY_ENHANCED,
            self::PLASMA_CONTAINMENT,
            self::RADIATION_HEAVY,
            self::DEFLECTION_MEDIUM => 2,
            
            self::KINETIC_ADVANCED,
            self::ENERGY_ADAPTIVE,
            self::PLASMA_REFLECTION,
            self::RADIATION_QUANTUM,
            self::DEFLECTION_HEAVY => 3,
            
            self::EXOTIC_DIMENSIONAL,
            self::EXOTIC_QUANTUM_FIELD,
            self::EXOTIC_REALITY => 4,
            
            self::ASCENDANT_OMNIPOTENT,
            self::ASCENDANT_ABSOLUTE => 5,
        };
    }

    public function getShieldStrength(): int
    {
        return match ($this) {
            self::KINETIC_BASIC => 100,
            self::KINETIC_REINFORCED => 200,
            self::KINETIC_ADVANCED => 350,
            
            self::ENERGY_BASIC => 120,
            self::ENERGY_ENHANCED => 250,
            self::ENERGY_ADAPTIVE => 400,
            
            self::PLASMA_BASIC => 80,
            self::PLASMA_CONTAINMENT => 220,
            self::PLASMA_REFLECTION => 380,
            
            self::RADIATION_BASIC => 90,
            self::RADIATION_HEAVY => 240,
            self::RADIATION_QUANTUM => 420,
            
            self::DEFLECTION_LIGHT => 110,
            self::DEFLECTION_MEDIUM => 230,
            self::DEFLECTION_HEAVY => 390,
            
            self::EXOTIC_DIMENSIONAL => 700,
            self::EXOTIC_QUANTUM_FIELD => 850,
            self::EXOTIC_REALITY => 1000,
            
            self::ASCENDANT_OMNIPOTENT => 10000,
            self::ASCENDANT_ABSOLUTE => 999999,
        };
    }

    public function getRechargeRate(): float
    {
        return match ($this) {
            self::KINETIC_BASIC => 5.0,
            self::KINETIC_REINFORCED => 8.0,
            self::KINETIC_ADVANCED => 12.0,
            
            self::ENERGY_BASIC => 6.0,
            self::ENERGY_ENHANCED => 10.0,
            self::ENERGY_ADAPTIVE => 15.0,
            
            self::PLASMA_BASIC => 4.0,
            self::PLASMA_CONTAINMENT => 7.0,
            self::PLASMA_REFLECTION => 11.0,
            
            self::RADIATION_BASIC => 4.5,
            self::RADIATION_HEAVY => 8.0,
            self::RADIATION_QUANTUM => 14.0,
            
            self::DEFLECTION_LIGHT => 5.5,
            self::DEFLECTION_MEDIUM => 9.0,
            self::DEFLECTION_HEAVY => 13.0,
            
            self::EXOTIC_DIMENSIONAL => 20.0,
            self::EXOTIC_QUANTUM_FIELD => 25.0,
            self::EXOTIC_REALITY => 30.0,
            
            self::ASCENDANT_OMNIPOTENT => 1000.0,
            self::ASCENDANT_ABSOLUTE => 10000.0,
        };
    }

    public function getEnergyConsumption(): int
    {
        return match ($this) {
            self::KINETIC_BASIC => 50,
            self::KINETIC_REINFORCED => 100,
            self::KINETIC_ADVANCED => 200,
            
            self::ENERGY_BASIC => 75,
            self::ENERGY_ENHANCED => 150,
            self::ENERGY_ADAPTIVE => 300,
            
            self::PLASMA_BASIC => 100,
            self::PLASMA_CONTAINMENT => 200,
            self::PLASMA_REFLECTION => 400,
            
            self::RADIATION_BASIC => 80,
            self::RADIATION_HEAVY => 160,
            self::RADIATION_QUANTUM => 320,
            
            self::DEFLECTION_LIGHT => 60,
            self::DEFLECTION_MEDIUM => 120,
            self::DEFLECTION_HEAVY => 240,
            
            self::EXOTIC_DIMENSIONAL => 800,
            self::EXOTIC_QUANTUM_FIELD => 1200,
            self::EXOTIC_REALITY => 1600,
            
            self::ASCENDANT_OMNIPOTENT => 50000,
            self::ASCENDANT_ABSOLUTE => 100000,
        };
    }

    public function getDamageReduction(): float
    {
        return match ($this) {
            self::KINETIC_BASIC => 0.15,
            self::KINETIC_REINFORCED => 0.30,
            self::KINETIC_ADVANCED => 0.50,
            
            self::ENERGY_BASIC => 0.18,
            self::ENERGY_ENHANCED => 0.35,
            self::ENERGY_ADAPTIVE => 0.55,
            
            self::PLASMA_BASIC => 0.12,
            self::PLASMA_CONTAINMENT => 0.28,
            self::PLASMA_REFLECTION => 0.48,
            
            self::RADIATION_BASIC => 0.14,
            self::RADIATION_HEAVY => 0.32,
            self::RADIATION_QUANTUM => 0.52,
            
            self::DEFLECTION_LIGHT => 0.16,
            self::DEFLECTION_MEDIUM => 0.33,
            self::DEFLECTION_HEAVY => 0.51,
            
            self::EXOTIC_DIMENSIONAL => 0.75,
            self::EXOTIC_QUANTUM_FIELD => 0.85,
            self::EXOTIC_REALITY => 0.95,
            
            self::ASCENDANT_OMNIPOTENT => 0.99,
            self::ASCENDANT_ABSOLUTE => 1.0,
        };
    }

    public function getCost(): int
    {
        return match ($this) {
            self::KINETIC_BASIC => 1500,
            self::KINETIC_REINFORCED => 4000,
            self::KINETIC_ADVANCED => 10000,
            
            self::ENERGY_BASIC => 2000,
            self::ENERGY_ENHANCED => 5000,
            self::ENERGY_ADAPTIVE => 12000,
            
            self::PLASMA_BASIC => 2500,
            self::PLASMA_CONTAINMENT => 6000,
            self::PLASMA_REFLECTION => 14000,
            
            self::RADIATION_BASIC => 2200,
            self::RADIATION_HEAVY => 5500,
            self::RADIATION_QUANTUM => 13000,
            
            self::DEFLECTION_LIGHT => 1800,
            self::DEFLECTION_MEDIUM => 4500,
            self::DEFLECTION_HEAVY => 11000,
            
            self::EXOTIC_DIMENSIONAL => 150000,
            self::EXOTIC_QUANTUM_FIELD => 250000,
            self::EXOTIC_REALITY => 400000,
            
            self::ASCENDANT_OMNIPOTENT => 5000000,
            self::ASCENDANT_ABSOLUTE => 50000000,
        };
    }

    public function isAscendant(): bool
    {
        return $this->getTier() >= 5;
    }
}
