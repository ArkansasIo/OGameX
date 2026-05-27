<?php

namespace OGame\Enums;

enum ShipClass: string
{
    // Fighter Class Ships
    case FIGHTER = 'FIGHTER';
    case CORVETTE = 'CORVETTE';
    case INTERCEPTOR = 'INTERCEPTOR';
    case SCOUT = 'SCOUT';
    case RECON = 'RECON';

    // Support Class Ships
    case TRANSPORT = 'TRANSPORT';
    case CARGO = 'CARGO';
    case SUPPLY = 'SUPPLY';
    case REPAIR = 'REPAIR';
    case REFUELING = 'REFUELING';

    // Capital Class Ships
    case FRIGATE = 'FRIGATE';
    case DESTROYER = 'DESTROYER';
    case CRUISER = 'CRUISER';
    case BATTLESHIP = 'BATTLESHIP';
    case CARRIER = 'CARRIER';

    // Special Class Ships
    case STEALTH = 'STEALTH';
    case MINING = 'MINING';
    case EXPLORATION = 'EXPLORATION';
    case RESEARCH = 'RESEARCH';
    case DIPLOMAT = 'DIPLOMAT';

    public function getDescription(): string
    {
        return match ($this) {
            self::FIGHTER => 'Small agile combat vessel',
            self::CORVETTE => 'Light attack ship',
            self::INTERCEPTOR => 'High-speed pursuit vessel',
            self::SCOUT => 'Long-range reconnaissance ship',
            self::RECON => 'Advanced spy and observer',
            
            self::TRANSPORT => 'General cargo transport',
            self::CARGO => 'Heavy cargo hauler',
            self::SUPPLY => 'Supply and munitions vessel',
            self::REPAIR => 'Mobile repair platform',
            self::REFUELING => 'Fuel and resource tanker',
            
            self::FRIGATE => 'Light capital ship',
            self::DESTROYER => 'Fast capital warship',
            self::CRUISER => 'Medium capital warship',
            self::BATTLESHIP => 'Heavy capital warship',
            self::CARRIER => 'Aircraft and drone carrier',
            
            self::STEALTH => 'Cloaked combat vessel',
            self::MINING => 'Resource extraction ship',
            self::EXPLORATION => 'Deep space explorer',
            self::RESEARCH => 'Scientific research vessel',
            self::DIPLOMAT => 'Diplomatic envoy ship',
        };
    }

    public function getSize(): int
    {
        return match ($this) {
            self::FIGHTER, self::SCOUT => 1,
            self::CORVETTE, self::INTERCEPTOR, self::RECON => 2,
            self::TRANSPORT, self::CARGO, self::MINING => 3,
            self::SUPPLY, self::REPAIR, self::REFUELING, self::STEALTH => 4,
            self::EXPLORATION, self::RESEARCH, self::DIPLOMAT => 5,
            self::FRIGATE => 6,
            self::DESTROYER => 7,
            self::CRUISER => 8,
            self::CARRIER => 9,
            self::BATTLESHIP => 10,
        };
    }
}
