<?php

namespace OGame\Enums;

enum MoonClass: string
{
    // Small Moons (Size 1-2)
    case SMALL_ROCKY = 'SMALL_ROCKY';
    case SMALL_ICY = 'SMALL_ICY';
    case SMALL_CRATERS = 'SMALL_CRATERS';

    // Medium Moons (Size 3-4)
    case MEDIUM_BARREN = 'MEDIUM_BARREN';
    case MEDIUM_CRATERED = 'MEDIUM_CRATERED';
    case MEDIUM_AIRLESS = 'MEDIUM_AIRLESS';

    // Large Moons (Size 5-6)
    case LARGE_TERRESTRIAL = 'LARGE_TERRESTRIAL';
    case LARGE_VOLCANIC = 'LARGE_VOLCANIC';
    case LARGE_ICY = 'LARGE_ICY';

    public function getDescription(): string
    {
        return match ($this) {
            self::SMALL_ROCKY => 'Small Rocky Moon - Asteroid-like satellite',
            self::SMALL_ICY => 'Small Icy Moon - Frozen satellite',
            self::SMALL_CRATERS => 'Small Cratered Moon - Impact scarred satellite',
            
            self::MEDIUM_BARREN => 'Barren Moon - Lifeless satellite',
            self::MEDIUM_CRATERED => 'Cratered Moon - Ancient impact surface',
            self::MEDIUM_AIRLESS => 'Airless Moon - No atmosphere',
            
            self::LARGE_TERRESTRIAL => 'Terrestrial Moon - Planet-like satellite',
            self::LARGE_VOLCANIC => 'Volcanic Moon - Active volcanism',
            self::LARGE_ICY => 'Icy Moon - Frozen world',
        };
    }

    public function getMineralContent(): int
    {
        return match ($this) {
            self::SMALL_ROCKY => 30,
            self::SMALL_ICY => 20,
            self::SMALL_CRATERS => 25,
            self::MEDIUM_BARREN => 50,
            self::MEDIUM_CRATERED => 55,
            self::MEDIUM_AIRLESS => 45,
            self::LARGE_TERRESTRIAL => 75,
            self::LARGE_VOLCANIC => 80,
            self::LARGE_ICY => 70,
        };
    }
}
