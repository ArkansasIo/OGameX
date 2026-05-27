<?php

namespace OGame\Enums;

enum WeaponType: string
{
    // Ballistic Weapons
    case BALLISTIC_CANNON = 'BALLISTIC_CANNON';
    case BALLISTIC_GAUSS = 'BALLISTIC_GAUSS';
    case BALLISTIC_RAILGUN = 'BALLISTIC_RAILGUN';
    case BALLISTIC_COILGUN = 'BALLISTIC_COILGUN';

    // Energy Weapons
    case ENERGY_LASER = 'ENERGY_LASER';
    case ENERGY_BEAM = 'ENERGY_BEAM';
    case ENERGY_PULSE = 'ENERGY_PULSE';
    case ENERGY_PARTICLE = 'ENERGY_PARTICLE';

    // Plasma Weapons
    case PLASMA_CUTTER = 'PLASMA_CUTTER';
    case PLASMA_LANCE = 'PLASMA_LANCE';
    case PLASMA_CANNON = 'PLASMA_CANNON';
    case PLASMA_STORM = 'PLASMA_STORM';

    // Missile Weapons
    case MISSILE_GUIDED = 'MISSILE_GUIDED';
    case MISSILE_HOMING = 'MISSILE_HOMING';
    case MISSILE_CLUSTER = 'MISSILE_CLUSTER';
    case MISSILE_NUCLEAR = 'MISSILE_NUCLEAR';

    // Exotic Weapons
    case EXOTIC_TACHYON = 'EXOTIC_TACHYON';
    case EXOTIC_SINGULARITY = 'EXOTIC_SINGULARITY';
    case EXOTIC_DIMENSIONAL = 'EXOTIC_DIMENSIONAL';
    case EXOTIC_REALITY_TEAR = 'EXOTIC_REALITY_TEAR';

    // Area Effect Weapons
    case AREA_EMP = 'AREA_EMP';
    case AREA_SHOCKWAVE = 'AREA_SHOCKWAVE';
    case AREA_ION = 'AREA_ION';
    case AREA_RADIATION = 'AREA_RADIATION';

    public function getDescription(): string
    {
        return match ($this) {
            self::BALLISTIC_CANNON => 'Standard ballistic cannon',
            self::BALLISTIC_GAUSS => 'Gauss accelerated projectiles',
            self::BALLISTIC_RAILGUN => 'High-velocity railgun',
            self::BALLISTIC_COILGUN => 'Electromagnetic coil accelerator',
            
            self::ENERGY_LASER => 'Focused laser beam',
            self::ENERGY_BEAM => 'High-energy beam weapon',
            self::ENERGY_PULSE => 'Pulsed energy weapon',
            self::ENERGY_PARTICLE => 'Particle accelerator weapon',
            
            self::PLASMA_CUTTER => 'Plasma cutting tool',
            self::PLASMA_LANCE => 'Focused plasma lance',
            self::PLASMA_CANNON => 'Heavy plasma cannon',
            self::PLASMA_STORM => 'Plasma storm generator',
            
            self::MISSILE_GUIDED => 'Guided missile system',
            self::MISSILE_HOMING => 'Self-homing missile',
            self::MISSILE_CLUSTER => 'Cluster missile warhead',
            self::MISSILE_NUCLEAR => 'Nuclear warhead missile',
            
            self::EXOTIC_TACHYON => 'Tachyon particle weapon',
            self::EXOTIC_SINGULARITY => 'Singularity generation weapon',
            self::EXOTIC_DIMENSIONAL => 'Dimensional phasing weapon',
            self::EXOTIC_REALITY_TEAR => 'Reality warping weapon',
            
            self::AREA_EMP => 'Electromagnetic pulse',
            self::AREA_SHOCKWAVE => 'Shockwave generator',
            self::AREA_ION => 'Ion pulse generator',
            self::AREA_RADIATION => 'Radiation emitter',
        };
    }

    public function getCategory(): string
    {
        return match ($this) {
            self::BALLISTIC_CANNON,
            self::BALLISTIC_GAUSS,
            self::BALLISTIC_RAILGUN,
            self::BALLISTIC_COILGUN => 'Ballistic',
            
            self::ENERGY_LASER,
            self::ENERGY_BEAM,
            self::ENERGY_PULSE,
            self::ENERGY_PARTICLE => 'Energy',
            
            self::PLASMA_CUTTER,
            self::PLASMA_LANCE,
            self::PLASMA_CANNON,
            self::PLASMA_STORM => 'Plasma',
            
            self::MISSILE_GUIDED,
            self::MISSILE_HOMING,
            self::MISSILE_CLUSTER,
            self::MISSILE_NUCLEAR => 'Missile',
            
            self::EXOTIC_TACHYON,
            self::EXOTIC_SINGULARITY,
            self::EXOTIC_DIMENSIONAL,
            self::EXOTIC_REALITY_TEAR => 'Exotic',
            
            self::AREA_EMP,
            self::AREA_SHOCKWAVE,
            self::AREA_ION,
            self::AREA_RADIATION => 'Area Effect',
        };
    }

    public function getTier(): int
    {
        return match ($this) {
            self::BALLISTIC_CANNON => 1,
            self::BALLISTIC_GAUSS => 2,
            self::BALLISTIC_RAILGUN => 3,
            self::BALLISTIC_COILGUN => 4,
            
            self::ENERGY_LASER => 1,
            self::ENERGY_BEAM => 2,
            self::ENERGY_PULSE => 3,
            self::ENERGY_PARTICLE => 4,
            
            self::PLASMA_CUTTER => 2,
            self::PLASMA_LANCE => 3,
            self::PLASMA_CANNON => 4,
            self::PLASMA_STORM => 5,
            
            self::MISSILE_GUIDED => 2,
            self::MISSILE_HOMING => 3,
            self::MISSILE_CLUSTER => 4,
            self::MISSILE_NUCLEAR => 5,
            
            self::EXOTIC_TACHYON => 5,
            self::EXOTIC_SINGULARITY => 6,
            self::EXOTIC_DIMENSIONAL => 7,
            self::EXOTIC_REALITY_TEAR => 8,
            
            self::AREA_EMP => 3,
            self::AREA_SHOCKWAVE => 4,
            self::AREA_ION => 5,
            self::AREA_RADIATION => 6,
        };
    }

    public function getDamage(): int
    {
        return match ($this) {
            self::BALLISTIC_CANNON => 50,
            self::BALLISTIC_GAUSS => 100,
            self::BALLISTIC_RAILGUN => 200,
            self::BALLISTIC_COILGUN => 350,
            
            self::ENERGY_LASER => 60,
            self::ENERGY_BEAM => 120,
            self::ENERGY_PULSE => 240,
            self::ENERGY_PARTICLE => 400,
            
            self::PLASMA_CUTTER => 80,
            self::PLASMA_LANCE => 180,
            self::PLASMA_CANNON => 350,
            self::PLASMA_STORM => 600,
            
            self::MISSILE_GUIDED => 150,
            self::MISSILE_HOMING => 250,
            self::MISSILE_CLUSTER => 400,
            self::MISSILE_NUCLEAR => 800,
            
            self::EXOTIC_TACHYON => 500,
            self::EXOTIC_SINGULARITY => 1000,
            self::EXOTIC_DIMENSIONAL => 1500,
            self::EXOTIC_REALITY_TEAR => 3000,
            
            self::AREA_EMP => 200,
            self::AREA_SHOCKWAVE => 300,
            self::AREA_ION => 400,
            self::AREA_RADIATION => 600,
        };
    }

    public function getFireRate(): float
    {
        return match ($this) {
            self::BALLISTIC_CANNON => 2.0,
            self::BALLISTIC_GAUSS => 1.5,
            self::BALLISTIC_RAILGUN => 0.8,
            self::BALLISTIC_COILGUN => 0.5,
            
            self::ENERGY_LASER => 3.0,
            self::ENERGY_BEAM => 2.0,
            self::ENERGY_PULSE => 1.5,
            self::ENERGY_PARTICLE => 1.0,
            
            self::PLASMA_CUTTER => 1.5,
            self::PLASMA_LANCE => 1.0,
            self::PLASMA_CANNON => 0.8,
            self::PLASMA_STORM => 0.5,
            
            self::MISSILE_GUIDED => 1.0,
            self::MISSILE_HOMING => 0.8,
            self::MISSILE_CLUSTER => 0.6,
            self::MISSILE_NUCLEAR => 0.2,
            
            self::EXOTIC_TACHYON => 1.2,
            self::EXOTIC_SINGULARITY => 0.3,
            self::EXOTIC_DIMENSIONAL => 0.5,
            self::EXOTIC_REALITY_TEAR => 0.1,
            
            self::AREA_EMP => 0.5,
            self::AREA_SHOCKWAVE => 0.7,
            self::AREA_ION => 0.6,
            self::AREA_RADIATION => 0.4,
        };
    }

    public function getRange(): int
    {
        return match ($this) {
            self::BALLISTIC_CANNON => 1000,
            self::BALLISTIC_GAUSS => 1500,
            self::BALLISTIC_RAILGUN => 2000,
            self::BALLISTIC_COILGUN => 2500,
            
            self::ENERGY_LASER => 3000,
            self::ENERGY_BEAM => 4000,
            self::ENERGY_PULSE => 5000,
            self::ENERGY_PARTICLE => 6000,
            
            self::PLASMA_CUTTER => 800,
            self::PLASMA_LANCE => 1500,
            self::PLASMA_CANNON => 2000,
            self::PLASMA_STORM => 1200,
            
            self::MISSILE_GUIDED => 5000,
            self::MISSILE_HOMING => 6000,
            self::MISSILE_CLUSTER => 4000,
            self::MISSILE_NUCLEAR => 8000,
            
            self::EXOTIC_TACHYON => 7000,
            self::EXOTIC_SINGULARITY => 3000,
            self::EXOTIC_DIMENSIONAL => 2000,
            self::EXOTIC_REALITY_TEAR => 1000,
            
            self::AREA_EMP => 2000,
            self::AREA_SHOCKWAVE => 1500,
            self::AREA_ION => 1800,
            self::AREA_RADIATION => 1200,
        };
    }

    public function getEnergyConsumption(): int
    {
        return match ($this) {
            self::BALLISTIC_CANNON => 50,
            self::BALLISTIC_GAUSS => 100,
            self::BALLISTIC_RAILGUN => 200,
            self::BALLISTIC_COILGUN => 350,
            
            self::ENERGY_LASER => 100,
            self::ENERGY_BEAM => 200,
            self::ENERGY_PULSE => 300,
            self::ENERGY_PARTICLE => 500,
            
            self::PLASMA_CUTTER => 150,
            self::PLASMA_LANCE => 250,
            self::PLASMA_CANNON => 400,
            self::PLASMA_STORM => 600,
            
            self::MISSILE_GUIDED => 80,
            self::MISSILE_HOMING => 120,
            self::MISSILE_CLUSTER => 150,
            self::MISSILE_NUCLEAR => 200,
            
            self::EXOTIC_TACHYON => 500,
            self::EXOTIC_SINGULARITY => 1000,
            self::EXOTIC_DIMENSIONAL => 800,
            self::EXOTIC_REALITY_TEAR => 1500,
            
            self::AREA_EMP => 300,
            self::AREA_SHOCKWAVE => 250,
            self::AREA_ION => 350,
            self::AREA_RADIATION => 400,
        };
    }

    public function getAccuracy(): float
    {
        return match ($this) {
            self::BALLISTIC_CANNON => 0.80,
            self::BALLISTIC_GAUSS => 0.85,
            self::BALLISTIC_RAILGUN => 0.90,
            self::BALLISTIC_COILGUN => 0.92,
            
            self::ENERGY_LASER => 0.95,
            self::ENERGY_BEAM => 0.92,
            self::ENERGY_PULSE => 0.88,
            self::ENERGY_PARTICLE => 0.85,
            
            self::PLASMA_CUTTER => 0.75,
            self::PLASMA_LANCE => 0.80,
            self::PLASMA_CANNON => 0.78,
            self::PLASMA_STORM => 1.0, // Area effect
            
            self::MISSILE_GUIDED => 0.98,
            self::MISSILE_HOMING => 0.99,
            self::MISSILE_CLUSTER => 0.70,
            self::MISSILE_NUCLEAR => 0.95,
            
            self::EXOTIC_TACHYON => 0.92,
            self::EXOTIC_SINGULARITY => 1.0, // Always hits
            self::EXOTIC_DIMENSIONAL => 0.85,
            self::EXOTIC_REALITY_TEAR => 1.0, // Always hits
            
            self::AREA_EMP => 1.0,
            self::AREA_SHOCKWAVE => 1.0,
            self::AREA_ION => 1.0,
            self::AREA_RADIATION => 1.0,
        };
    }

    public function getAmmo(): int
    {
        return match ($this) {
            self::BALLISTIC_CANNON => 500,
            self::BALLISTIC_GAUSS => 300,
            self::BALLISTIC_RAILGUN => 150,
            self::BALLISTIC_COILGUN => 75,
            
            self::ENERGY_LASER => 0, // No ammo
            self::ENERGY_BEAM => 0,
            self::ENERGY_PULSE => 0,
            self::ENERGY_PARTICLE => 0,
            
            self::PLASMA_CUTTER => 0,
            self::PLASMA_LANCE => 0,
            self::PLASMA_CANNON => 0,
            self::PLASMA_STORM => 0,
            
            self::MISSILE_GUIDED => 50,
            self::MISSILE_HOMING => 40,
            self::MISSILE_CLUSTER => 30,
            self::MISSILE_NUCLEAR => 10,
            
            self::EXOTIC_TACHYON => 20,
            self::EXOTIC_SINGULARITY => 5,
            self::EXOTIC_DIMENSIONAL => 15,
            self::EXOTIC_REALITY_TEAR => 3,
            
            self::AREA_EMP => 0,
            self::AREA_SHOCKWAVE => 0,
            self::AREA_ION => 0,
            self::AREA_RADIATION => 0,
        };
    }

    public function isMissile(): bool
    {
        return $this->getCategory() === 'Missile';
    }

    public function isEnergy(): bool
    {
        return $this->getCategory() === 'Energy' || 
               $this->getCategory() === 'Plasma' || 
               $this->getCategory() === 'Area Effect';
    }

    public function isExotic(): bool
    {
        return $this->getCategory() === 'Exotic';
    }
}
