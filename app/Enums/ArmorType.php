<?php

namespace OGame\Enums;

enum ArmorType: string
{
    // Basic Armor
    case BASIC_STEEL = 'BASIC_STEEL';
    case BASIC_COMPOSITE = 'BASIC_COMPOSITE';
    case BASIC_ALLOY = 'BASIC_ALLOY';

    // Advanced Armor
    case ADVANCED_REINFORCED = 'ADVANCED_REINFORCED';
    case ADVANCED_ABLATIVE = 'ADVANCED_ABLATIVE';
    case ADVANCED_REACTIVE = 'ADVANCED_REACTIVE';

    // Heavy Armor
    case HEAVY_CERAMIC = 'HEAVY_CERAMIC';
    case HEAVY_LAYERED = 'HEAVY_LAYERED';
    case HEAVY_COMPOSITE_MATRIX = 'HEAVY_COMPOSITE_MATRIX';

    // Specialized Armor
    case SPECIAL_ENERGY_ADAPTIVE = 'SPECIAL_ENERGY_ADAPTIVE';
    case SPECIAL_PLASMA_RESISTANT = 'SPECIAL_PLASMA_RESISTANT';
    case SPECIAL_RADIATION_SHIELDED = 'SPECIAL_RADIATION_SHIELDED';

    // Exotic Armor
    case EXOTIC_METAMATERIAL = 'EXOTIC_METAMATERIAL';
    case EXOTIC_QUANTUM_LATTICE = 'EXOTIC_QUANTUM_LATTICE';
    case EXOTIC_DIMENSIONAL = 'EXOTIC_DIMENSIONAL';

    // Ascendant Armor
    case ASCENDANT_REALITY_WOVEN = 'ASCENDANT_REALITY_WOVEN';
    case ASCENDANT_INFINITE = 'ASCENDANT_INFINITE';

    public function getDescription(): string
    {
        return match ($this) {
            self::BASIC_STEEL => 'Standard steel armor plating',
            self::BASIC_COMPOSITE => 'Composite material armor',
            self::BASIC_ALLOY => 'Lightweight alloy armor',
            
            self::ADVANCED_REINFORCED => 'Reinforced multi-layer armor',
            self::ADVANCED_ABLATIVE => 'Ablative heat-resistant armor',
            self::ADVANCED_REACTIVE => 'Reactive impact armor',
            
            self::HEAVY_CERAMIC => 'Dense ceramic plating',
            self::HEAVY_LAYERED => 'Multi-layered heavy armor',
            self::HEAVY_COMPOSITE_MATRIX => 'Advanced composite matrix armor',
            
            self::SPECIAL_ENERGY_ADAPTIVE => 'Adapts to energy weapons',
            self::SPECIAL_PLASMA_RESISTANT => 'Resistant to plasma damage',
            self::SPECIAL_RADIATION_SHIELDED => 'Shields against radiation',
            
            self::EXOTIC_METAMATERIAL => 'Metamaterial negative mass armor',
            self::EXOTIC_QUANTUM_LATTICE => 'Quantum-locked lattice structure',
            self::EXOTIC_DIMENSIONAL => 'Dimensionally-shifted armor',
            
            self::ASCENDANT_REALITY_WOVEN => 'Reality-woven protective layer',
            self::ASCENDANT_INFINITE => 'Infinite regenerating armor',
        };
    }

    public function getTier(): int
    {
        return match ($this) {
            self::BASIC_STEEL,
            self::BASIC_COMPOSITE,
            self::BASIC_ALLOY => 1,
            
            self::ADVANCED_REINFORCED,
            self::ADVANCED_ABLATIVE,
            self::ADVANCED_REACTIVE => 2,
            
            self::HEAVY_CERAMIC,
            self::HEAVY_LAYERED,
            self::HEAVY_COMPOSITE_MATRIX => 3,
            
            self::SPECIAL_ENERGY_ADAPTIVE,
            self::SPECIAL_PLASMA_RESISTANT,
            self::SPECIAL_RADIATION_SHIELDED => 4,
            
            self::EXOTIC_METAMATERIAL,
            self::EXOTIC_QUANTUM_LATTICE,
            self::EXOTIC_DIMENSIONAL => 5,
            
            self::ASCENDANT_REALITY_WOVEN,
            self::ASCENDANT_INFINITE => 6,
        };
    }

    public function getArmorRating(): int
    {
        return match ($this) {
            self::BASIC_STEEL => 100,
            self::BASIC_COMPOSITE => 120,
            self::BASIC_ALLOY => 110,
            
            self::ADVANCED_REINFORCED => 200,
            self::ADVANCED_ABLATIVE => 220,
            self::ADVANCED_REACTIVE => 210,
            
            self::HEAVY_CERAMIC => 350,
            self::HEAVY_LAYERED => 400,
            self::HEAVY_COMPOSITE_MATRIX => 380,
            
            self::SPECIAL_ENERGY_ADAPTIVE => 300,
            self::SPECIAL_PLASMA_RESISTANT => 320,
            self::SPECIAL_RADIATION_SHIELDED => 310,
            
            self::EXOTIC_METAMATERIAL => 600,
            self::EXOTIC_QUANTUM_LATTICE => 700,
            self::EXOTIC_DIMENSIONAL => 650,
            
            self::ASCENDANT_REALITY_WOVEN => 1500,
            self::ASCENDANT_INFINITE => 5000,
        };
    }

    public function getWeight(): float
    {
        return match ($this) {
            self::BASIC_STEEL => 1.0,
            self::BASIC_COMPOSITE => 0.8,
            self::BASIC_ALLOY => 0.7,
            
            self::ADVANCED_REINFORCED => 1.3,
            self::ADVANCED_ABLATIVE => 1.2,
            self::ADVANCED_REACTIVE => 1.4,
            
            self::HEAVY_CERAMIC => 1.8,
            self::HEAVY_LAYERED => 2.0,
            self::HEAVY_COMPOSITE_MATRIX => 1.9,
            
            self::SPECIAL_ENERGY_ADAPTIVE => 1.5,
            self::SPECIAL_PLASMA_RESISTANT => 1.6,
            self::SPECIAL_RADIATION_SHIELDED => 1.7,
            
            self::EXOTIC_METAMATERIAL => 0.5,
            self::EXOTIC_QUANTUM_LATTICE => 0.3,
            self::EXOTIC_DIMENSIONAL => 0.1,
            
            self::ASCENDANT_REALITY_WOVEN => 0.0,
            self::ASCENDANT_INFINITE => -1.0, // Negative mass
        };
    }

    public function getResistance(): array
    {
        return match ($this) {
            self::BASIC_STEEL => [
                'ballistic' => 1.0,
                'energy' => 0.8,
                'plasma' => 0.6,
                'explosive' => 0.9,
            ],
            self::BASIC_COMPOSITE => [
                'ballistic' => 1.1,
                'energy' => 0.7,
                'plasma' => 0.5,
                'explosive' => 1.0,
            ],
            self::BASIC_ALLOY => [
                'ballistic' => 0.9,
                'energy' => 0.8,
                'plasma' => 0.6,
                'explosive' => 0.8,
            ],
            
            self::ADVANCED_REINFORCED => [
                'ballistic' => 1.3,
                'energy' => 1.0,
                'plasma' => 0.8,
                'explosive' => 1.2,
            ],
            self::ADVANCED_ABLATIVE => [
                'ballistic' => 1.0,
                'energy' => 1.3,
                'plasma' => 1.0,
                'explosive' => 0.9,
            ],
            self::ADVANCED_REACTIVE => [
                'ballistic' => 1.2,
                'energy' => 1.1,
                'plasma' => 0.9,
                'explosive' => 1.4,
            ],
            
            self::HEAVY_CERAMIC => [
                'ballistic' => 1.5,
                'energy' => 0.9,
                'plasma' => 0.7,
                'explosive' => 1.3,
            ],
            self::HEAVY_LAYERED => [
                'ballistic' => 1.6,
                'energy' => 1.0,
                'plasma' => 0.8,
                'explosive' => 1.5,
            ],
            self::HEAVY_COMPOSITE_MATRIX => [
                'ballistic' => 1.5,
                'energy' => 1.1,
                'plasma' => 0.9,
                'explosive' => 1.4,
            ],
            
            self::SPECIAL_ENERGY_ADAPTIVE => [
                'ballistic' => 1.0,
                'energy' => 2.0,
                'plasma' => 1.2,
                'explosive' => 0.8,
            ],
            self::SPECIAL_PLASMA_RESISTANT => [
                'ballistic' => 1.0,
                'energy' => 1.0,
                'plasma' => 2.0,
                'explosive' => 0.9,
            ],
            self::SPECIAL_RADIATION_SHIELDED => [
                'ballistic' => 0.9,
                'energy' => 1.2,
                'plasma' => 1.5,
                'explosive' => 1.0,
            ],
            
            self::EXOTIC_METAMATERIAL => [
                'ballistic' => 1.8,
                'energy' => 1.8,
                'plasma' => 1.5,
                'explosive' => 1.8,
            ],
            self::EXOTIC_QUANTUM_LATTICE => [
                'ballistic' => 2.0,
                'energy' => 2.0,
                'plasma' => 2.0,
                'explosive' => 2.0,
            ],
            self::EXOTIC_DIMENSIONAL => [
                'ballistic' => 2.5,
                'energy' => 2.5,
                'plasma' => 2.5,
                'explosive' => 2.5,
            ],
            
            self::ASCENDANT_REALITY_WOVEN => [
                'ballistic' => 5.0,
                'energy' => 5.0,
                'plasma' => 5.0,
                'explosive' => 5.0,
            ],
            self::ASCENDANT_INFINITE => [
                'ballistic' => 100.0,
                'energy' => 100.0,
                'plasma' => 100.0,
                'explosive' => 100.0,
            ],
        };
    }

    public function getCost(): int
    {
        return match ($this) {
            self::BASIC_STEEL => 1000,
            self::BASIC_COMPOSITE => 1500,
            self::BASIC_ALLOY => 1200,
            
            self::ADVANCED_REINFORCED => 5000,
            self::ADVANCED_ABLATIVE => 6000,
            self::ADVANCED_REACTIVE => 5500,
            
            self::HEAVY_CERAMIC => 15000,
            self::HEAVY_LAYERED => 18000,
            self::HEAVY_COMPOSITE_MATRIX => 17000,
            
            self::SPECIAL_ENERGY_ADAPTIVE => 20000,
            self::SPECIAL_PLASMA_RESISTANT => 22000,
            self::SPECIAL_RADIATION_SHIELDED => 21000,
            
            self::EXOTIC_METAMATERIAL => 100000,
            self::EXOTIC_QUANTUM_LATTICE => 150000,
            self::EXOTIC_DIMENSIONAL => 200000,
            
            self::ASCENDANT_REALITY_WOVEN => 1000000,
            self::ASCENDANT_INFINITE => 10000000,
        };
    }
}
