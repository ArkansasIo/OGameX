<?php

namespace OGame\Enums;

enum PlanetClass: string
{
    // A-Class Planets (Molten/Volcanic)
    case A_MOLTEN = 'A_MOLTEN';
    case A_VOLCANIC = 'A_VOLCANIC';
    case A_LAVA = 'A_LAVA';

    // B-Class Planets (Barren/Rocky)
    case B_BARREN = 'B_BARREN';
    case B_ROCKY = 'B_ROCKY';
    case B_ASTEROID = 'B_ASTEROID';

    // C-Class Planets (Toxic/Irradiated)
    case C_TOXIC = 'C_TOXIC';
    case C_IRRADIATED = 'C_IRRADIATED';
    case C_RADIOACTIVE = 'C_RADIOACTIVE';

    // D-Class Planets (Temperate/Paradise)
    case D_TEMPERATE = 'D_TEMPERATE';
    case D_PARADISE = 'D_PARADISE';
    case D_LUSH = 'D_LUSH';

    // E-Class Planets (Frozen/Icy)
    case E_FROZEN = 'E_FROZEN';
    case E_ICY = 'E_ICY';
    case E_SNOW = 'E_SNOW';

    // F-Class Planets (Aquatic/Water)
    case F_AQUATIC = 'F_AQUATIC';
    case F_OCEAN = 'F_OCEAN';
    case F_SWAMP = 'F_SWAMP';

    // G-Class Planets (Exotic)
    case G_EXOTIC = 'G_EXOTIC';
    case G_MUSHROOM = 'G_MUSHROOM';
    case G_CRYSTALLINE = 'G_CRYSTALLINE';

    // H-Class Planets (Gas Giants)
    case H_GAS_GIANT = 'H_GAS_GIANT';
    case H_ICE_GIANT = 'H_ICE_GIANT';
    case H_STORM = 'H_STORM';

    // I-Class Planets (Rogue/Dead)
    case I_ROGUE = 'I_ROGUE';
    case I_DEAD = 'I_DEAD';
    case I_VOID = 'I_VOID';

    // Z-Class Planets (Unique/Anomaly)
    case Z_ANOMALY = 'Z_ANOMALY';
    case Z_GATEWAY = 'Z_GATEWAY';
    case Z_SENTINEL = 'Z_SENTINEL';

    public function getDescription(): string
    {
        return match ($this) {
            self::A_MOLTEN => 'Molten World - Extreme heat and volcanic activity',
            self::A_VOLCANIC => 'Volcanic Planet - Active volcanoes and lava flows',
            self::A_LAVA => 'Lava World - Covered in molten rock',
            
            self::B_BARREN => 'Barren Rock - Lifeless rocky terrain',
            self::B_ROCKY => 'Rocky World - Rocky mountains and plains',
            self::B_ASTEROID => 'Asteroid Field - Dense asteroid concentration',
            
            self::C_TOXIC => 'Toxic World - Acidic atmosphere',
            self::C_IRRADIATED => 'Irradiated Planet - Radioactive radiation',
            self::C_RADIOACTIVE => 'Radioactive Wasteland - Extreme radiation',
            
            self::D_TEMPERATE => 'Temperate World - Mild climate',
            self::D_PARADISE => 'Paradise Planet - Beautiful and fertile',
            self::D_LUSH => 'Lush World - Abundant vegetation',
            
            self::E_FROZEN => 'Frozen World - Ice covered landscape',
            self::E_ICY => 'Icy Planet - Perpetual winter',
            self::E_SNOW => 'Snow World - Heavy snow and blizzards',
            
            self::F_AQUATIC => 'Aquatic World - Water covered',
            self::F_OCEAN => 'Ocean Planet - Vast oceans',
            self::F_SWAMP => 'Swamp World - Murky wetlands',
            
            self::G_EXOTIC => 'Exotic World - Unusual features',
            self::G_MUSHROOM => 'Mushroom Forest - Fungal ecosystem',
            self::G_CRYSTALLINE => 'Crystalline Planet - Crystal formations',
            
            self::H_GAS_GIANT => 'Gas Giant - Massive gas planet',
            self::H_ICE_GIANT => 'Ice Giant - Frozen gas giant',
            self::H_STORM => 'Storm Planet - Severe storms',
            
            self::I_ROGUE => 'Rogue Planet - Wandering world',
            self::I_DEAD => 'Dead World - Lifeless husk',
            self::I_VOID => 'Void World - Empty and barren',
            
            self::Z_ANOMALY => 'Anomaly - Strange properties',
            self::Z_GATEWAY => 'Gateway World - Ancient structures',
            self::Z_SENTINEL => 'Sentinel World - Dangerous defense systems',
        };
    }

    public function getBiome(): string
    {
        return match ($this) {
            self::A_MOLTEN, self::A_VOLCANIC, self::A_LAVA => 'Volcanic',
            self::B_BARREN, self::B_ROCKY, self::B_ASTEROID => 'Rocky',
            self::C_TOXIC, self::C_IRRADIATED, self::C_RADIOACTIVE => 'Toxic',
            self::D_TEMPERATE, self::D_PARADISE, self::D_LUSH => 'Temperate',
            self::E_FROZEN, self::E_ICY, self::E_SNOW => 'Frozen',
            self::F_AQUATIC, self::F_OCEAN, self::F_SWAMP => 'Aquatic',
            self::G_EXOTIC, self::G_MUSHROOM, self::G_CRYSTALLINE => 'Exotic',
            self::H_GAS_GIANT, self::H_ICE_GIANT, self::H_STORM => 'Gas',
            self::I_ROGUE, self::I_DEAD, self::I_VOID => 'Rogue',
            self::Z_ANOMALY, self::Z_GATEWAY, self::Z_SENTINEL => 'Anomaly',
        };
    }

    public function getHabitability(): int
    {
        return match ($this) {
            self::D_PARADISE => 100,
            self::D_TEMPERATE => 80,
            self::D_LUSH => 75,
            self::F_AQUATIC => 70,
            self::F_OCEAN => 65,
            self::E_FROZEN => 40,
            self::B_ROCKY => 20,
            self::C_TOXIC => 10,
            self::C_IRRADIATED => 5,
            default => 0,
        };
    }
}
