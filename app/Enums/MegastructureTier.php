<?php

namespace OGame\Enums;

enum MegastructureTier: int
{
    case TIER_1 = 1;
    case TIER_2 = 2;
    case TIER_3 = 3;
    case TIER_4 = 4;
    case TIER_5 = 5;
    case TIER_6 = 6;
    case TIER_7 = 7;
    case TIER_8 = 8;
    case TIER_9 = 9;

    public function getDescription(): string
    {
        return match ($this) {
            self::TIER_1 => 'Primitive - Basic functional structure',
            self::TIER_2 => 'Elementary - Improved efficiency',
            self::TIER_3 => 'Standard - Standard operational capacity',
            self::TIER_4 => 'Advanced - Enhanced capabilities',
            self::TIER_5 => 'Superior - Superior performance',
            self::TIER_6 => 'Elite - Elite-level operations',
            self::TIER_7 => 'Legendary - Legendary capabilities',
            self::TIER_8 => 'Mythic - Mythical power levels',
            self::TIER_9 => 'Ascendant - Transcendent reality-altering power',
        };
    }

    public function isAscendant(): bool
    {
        return $this->value >= 8;
    }

    public function getStatMultiplier(): float
    {
        return match ($this) {
            self::TIER_1 => 1.0,
            self::TIER_2 => 1.5,
            self::TIER_3 => 2.2,
            self::TIER_4 => 3.5,
            self::TIER_5 => 5.0,
            self::TIER_6 => 7.5,
            self::TIER_7 => 11.0,
            self::TIER_8 => 16.0, // Ascendant begins
            self::TIER_9 => 25.0, // Maximum ascendant
        };
    }

    public function getCostMultiplier(): float
    {
        return match ($this) {
            self::TIER_1 => 1.0,
            self::TIER_2 => 2.5,
            self::TIER_3 => 4.0,
            self::TIER_4 => 6.5,
            self::TIER_5 => 10.0,
            self::TIER_6 => 15.0,
            self::TIER_7 => 22.0,
            self::TIER_8 => 35.0, // Ascendant begins
            self::TIER_9 => 60.0, // Maximum ascendant
        };
    }

    public function getTimeMultiplier(): float
    {
        return match ($this) {
            self::TIER_1 => 1.0,
            self::TIER_2 => 1.8,
            self::TIER_3 => 3.0,
            self::TIER_4 => 4.5,
            self::TIER_5 => 6.5,
            self::TIER_6 => 9.0,
            self::TIER_7 => 12.0,
            self::TIER_8 => 18.0, // Ascendant begins
            self::TIER_9 => 30.0, // Maximum ascendant
        };
    }

    public function getUpgradeRequirements(): array
    {
        return match ($this) {
            self::TIER_1 => [
                'metal' => 1000,
                'crystal' => 500,
                'deuterium' => 250,
                'time' => 3600, // 1 hour
            ],
            self::TIER_2 => [
                'metal' => 5000,
                'crystal' => 3000,
                'deuterium' => 1500,
                'time' => 14400, // 4 hours
            ],
            self::TIER_3 => [
                'metal' => 15000,
                'crystal' => 10000,
                'deuterium' => 5000,
                'time' => 43200, // 12 hours
            ],
            self::TIER_4 => [
                'metal' => 50000,
                'crystal' => 35000,
                'deuterium' => 20000,
                'time' => 86400, // 1 day
            ],
            self::TIER_5 => [
                'metal' => 150000,
                'crystal' => 100000,
                'deuterium' => 75000,
                'time' => 172800, // 2 days
            ],
            self::TIER_6 => [
                'metal' => 500000,
                'crystal' => 350000,
                'deuterium' => 250000,
                'time' => 345600, // 4 days
            ],
            self::TIER_7 => [
                'metal' => 1500000,
                'crystal' => 1000000,
                'deuterium' => 750000,
                'time' => 691200, // 8 days
            ],
            self::TIER_8 => [
                'metal' => 5000000,
                'crystal' => 3500000,
                'deuterium' => 2500000,
                'time' => 1382400, // 16 days
                'dark_matter' => 10000,
            ],
            self::TIER_9 => [
                'metal' => 15000000,
                'crystal' => 10000000,
                'deuterium' => 7500000,
                'time' => 2764800, // 32 days
                'dark_matter' => 50000,
            ],
        };
    }

    public function getMaintenanceCost(): float
    {
        return match ($this) {
            self::TIER_1 => 100,
            self::TIER_2 => 250,
            self::TIER_3 => 500,
            self::TIER_4 => 1000,
            self::TIER_5 => 2500,
            self::TIER_6 => 5000,
            self::TIER_7 => 10000,
            self::TIER_8 => 25000,
            self::TIER_9 => 100000,
        };
    }

    public function getPowerConsumption(): float
    {
        return match ($this) {
            self::TIER_1 => 500,
            self::TIER_2 => 1000,
            self::TIER_3 => 2000,
            self::TIER_4 => 4000,
            self::TIER_5 => 8000,
            self::TIER_6 => 16000,
            self::TIER_7 => 32000,
            self::TIER_8 => 64000,
            self::TIER_9 => 128000,
        };
    }

    public function getEfficiencyBonus(): float
    {
        return match ($this) {
            self::TIER_1 => 1.0,
            self::TIER_2 => 1.2,
            self::TIER_3 => 1.5,
            self::TIER_4 => 1.8,
            self::TIER_5 => 2.2,
            self::TIER_6 => 2.7,
            self::TIER_7 => 3.3,
            self::TIER_8 => 4.0,
            self::TIER_9 => 5.0,
        };
    }

    public function getResearchSpeedBonus(): float
    {
        return match ($this) {
            self::TIER_1 => 0.05,
            self::TIER_2 => 0.10,
            self::TIER_3 => 0.15,
            self::TIER_4 => 0.25,
            self::TIER_5 => 0.35,
            self::TIER_6 => 0.50,
            self::TIER_7 => 0.75,
            self::TIER_8 => 1.00,
            self::TIER_9 => 1.50,
        };
    }

    public function getConstructionSpeedBonus(): float
    {
        return match ($this) {
            self::TIER_1 => 0.05,
            self::TIER_2 => 0.10,
            self::TIER_3 => 0.15,
            self::TIER_4 => 0.25,
            self::TIER_5 => 0.35,
            self::TIER_6 => 0.50,
            self::TIER_7 => 0.75,
            self::TIER_8 => 1.00,
            self::TIER_9 => 1.50,
        };
    }

    public function getDefenseBonus(): float
    {
        return match ($this) {
            self::TIER_1 => 0.10,
            self::TIER_2 => 0.25,
            self::TIER_3 => 0.50,
            self::TIER_4 => 1.00,
            self::TIER_5 => 1.75,
            self::TIER_6 => 3.00,
            self::TIER_7 => 5.00,
            self::TIER_8 => 8.00,
            self::TIER_9 => 15.00,
        };
    }

    public function getStorageBonus(): float
    {
        return match ($this) {
            self::TIER_1 => 1.0,
            self::TIER_2 => 1.5,
            self::TIER_3 => 2.5,
            self::TIER_4 => 4.0,
            self::TIER_5 => 6.5,
            self::TIER_6 => 10.0,
            self::TIER_7 => 15.0,
            self::TIER_8 => 25.0,
            self::TIER_9 => 50.0,
        };
    }

    public function getRequiredTechs(): array
    {
        return match ($this) {
            self::TIER_1 => ['basic_engineering' => 1],
            self::TIER_2 => ['advanced_engineering' => 1],
            self::TIER_3 => ['quantum_mechanics' => 2],
            self::TIER_4 => ['exotic_matter' => 3],
            self::TIER_5 => ['stellar_engineering' => 4],
            self::TIER_6 => ['dimensional_physics' => 5],
            self::TIER_7 => ['reality_manipulation' => 6],
            self::TIER_8 => ['ascension_protocols' => 1, 'dimensional_transcendence' => 7],
            self::TIER_9 => ['omniscience_theory' => 1, 'infinite_energy' => 8],
        };
    }
}
