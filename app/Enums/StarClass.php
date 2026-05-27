<?php

namespace OGame\Enums;

enum StarClass: string
{
    case O_CLASS = 'O_CLASS'; // Blue
    case B_CLASS = 'B_CLASS'; // Blue-white
    case A_CLASS = 'A_CLASS'; // White
    case F_CLASS = 'F_CLASS'; // Yellow-white
    case G_CLASS = 'G_CLASS'; // Yellow (like Sol)
    case K_CLASS = 'K_CLASS'; // Orange
    case M_CLASS = 'M_CLASS'; // Red
    case NEUTRON_STAR = 'NEUTRON_STAR';
    case BLACK_HOLE = 'BLACK_HOLE';
    case PULSAR = 'PULSAR';

    public function getDescription(): string
    {
        return match ($this) {
            self::O_CLASS => 'O-Class Star - Blue hypergiant',
            self::B_CLASS => 'B-Class Star - Blue-white giant',
            self::A_CLASS => 'A_CLASS - White star',
            self::F_CLASS => 'F-Class Star - Yellow-white star',
            self::G_CLASS => 'G-Class Star - Yellow star (Sol-like)',
            self::K_CLASS => 'K-Class Star - Orange dwarf',
            self::M_CLASS => 'M-Class Star - Red dwarf',
            self::NEUTRON_STAR => 'Neutron Star - Collapsed core',
            self::BLACK_HOLE => 'Black Hole - Gravitational anomaly',
            self::PULSAR => 'Pulsar - Rotating neutron star',
        };
    }

    public function getTemperature(): int
    {
        return match ($this) {
            self::O_CLASS => 30000,
            self::B_CLASS => 12000,
            self::A_CLASS => 7500,
            self::F_CLASS => 6000,
            self::G_CLASS => 5778,
            self::K_CLASS => 3700,
            self::M_CLASS => 2400,
            self::NEUTRON_STAR => 6000000,
            self::BLACK_HOLE => 0,
            self::PULSAR => 5000000,
        };
    }
}
