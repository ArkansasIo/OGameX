<?php

namespace OGame\Enums;

enum MegastructureType: string
{
    // Energy Generation
    case DYSON_SPHERE = 'DYSON_SPHERE';
    case SOLAR_COLLECTOR = 'SOLAR_COLLECTOR';
    case FUSION_REACTOR = 'FUSION_REACTOR';
    case STELLAR_ENGINE = 'STELLAR_ENGINE';
    case TACHYON_HARVESTER = 'TACHYON_HARVESTER';

    // Matter & Resource Processing
    case MATTER_CONVERTER = 'MATTER_CONVERTER';
    case ASTEROID_PROCESSOR = 'ASTEROID_PROCESSOR';
    case ORE_EXTRACTOR = 'ORE_EXTRACTOR';
    case CRYSTAL_FORGE = 'CRYSTAL_FORGE';
    case DEUTERIUM_PLANT = 'DEUTERIUM_PLANT';

    // Defensive Systems
    case SHIELD_NEXUS = 'SHIELD_NEXUS';
    case FORTRESS_STATION = 'FORTRESS_STATION';
    case TURRET_NETWORK = 'TURRET_NETWORK';
    case BEAM_CANNON = 'BEAM_CANNON';
    case VOID_ANCHOR = 'VOID_ANCHOR';

    // Computational & Research
    case RESEARCH_MEGALAB = 'RESEARCH_MEGALAB';
    case QUANTUM_PROCESSOR = 'QUANTUM_PROCESSOR';
    case SIMULATION_ENGINE = 'SIMULATION_ENGINE';
    case AI_NEXUS = 'AI_NEXUS';
    case KNOWLEDGE_VAULT = 'KNOWLEDGE_VAULT';

    // Space Engineering
    case SPACE_DOCK_MEGA = 'SPACE_DOCK_MEGA';
    case SHIPYARD_MEGA = 'SHIPYARD_MEGA';
    case CONSTRUCTION_FACILITY = 'CONSTRUCTION_FACILITY';
    case REPAIR_FACILITY = 'REPAIR_FACILITY';
    case TELEPORT_GATE = 'TELEPORT_GATE';

    // Transportation & Logistics
    case LOGISTICS_HUB = 'LOGISTICS_HUB';
    case TRADE_NEXUS = 'TRADE_NEXUS';
    case WARP_STATION = 'WARP_STATION';
    case JUMP_GATE_MEGA = 'JUMP_GATE_MEGA';
    case DIMENSIONAL_GATEWAY = 'DIMENSIONAL_GATEWAY';

    // Bio-Engineering
    case BIOSPHERE_BANK = 'BIOSPHERE_BANK';
    case GENETIC_VAULT = 'GENETIC_VAULT';
    case TERRAFORMING_ENGINE = 'TERRAFORMING_ENGINE';
    case LIFE_GENERATOR = 'LIFE_GENERATOR';
    case EVOLUTION_LAB = 'EVOLUTION_LAB';

    // Matter & Dimension
    case BLACK_HOLE_COLLECTOR = 'BLACK_HOLE_COLLECTOR';
    case DARK_MATTER_REFINERY = 'DARK_MATTER_REFINERY';
    case WORMHOLE_STABILIZER = 'WORMHOLE_STABILIZER';
    case DIMENSIONAL_ANCHOR = 'DIMENSIONAL_ANCHOR';
    case INFINITY_CORE = 'INFINITY_CORE';

    // Ascendant Structures (Tier 8-9 only)
    case ASCENDANT_NEXUS = 'ASCENDANT_NEXUS';
    case OMNISCIENCE_TOWER = 'OMNISCIENCE_TOWER';

    public function getDescription(): string
    {
        return match ($this) {
            self::DYSON_SPHERE => 'Harnesses entire stellar output',
            self::SOLAR_COLLECTOR => 'Collects solar radiation',
            self::FUSION_REACTOR => 'Generates power through fusion',
            self::STELLAR_ENGINE => 'Moves stars across space',
            self::TACHYON_HARVESTER => 'Harvests exotic particles',
            
            self::MATTER_CONVERTER => 'Converts matter to resources',
            self::ASTEROID_PROCESSOR => 'Processes asteroids for materials',
            self::ORE_EXTRACTOR => 'Extracts ore from planets',
            self::CRYSTAL_FORGE => 'Produces synthetic crystals',
            self::DEUTERIUM_PLANT => 'Synthesizes deuterium',
            
            self::SHIELD_NEXUS => 'Massive defensive shield',
            self::FORTRESS_STATION => 'Impenetrable fortress',
            self::TURRET_NETWORK => 'Networked weapon platforms',
            self::BEAM_CANNON => 'Stellar-scale energy weapon',
            self::VOID_ANCHOR => 'Prevents dimensional breach',
            
            self::RESEARCH_MEGALAB => 'Accelerates all research',
            self::QUANTUM_PROCESSOR => 'Quantum computing facility',
            self::SIMULATION_ENGINE => 'Reality simulation system',
            self::AI_NEXUS => 'Artificial intelligence hub',
            self::KNOWLEDGE_VAULT => 'Archive of all knowledge',
            
            self::SPACE_DOCK_MEGA => 'Massive space docking facility',
            self::SHIPYARD_MEGA => 'Industrial-scale shipyard',
            self::CONSTRUCTION_FACILITY => 'Megastructure construction hub',
            self::REPAIR_FACILITY => 'Repairs any ship or structure',
            self::TELEPORT_GATE => 'Instantaneous transport gateway',
            
            self::LOGISTICS_HUB => 'Controls all trade routes',
            self::TRADE_NEXUS => 'Interstellar commerce center',
            self::WARP_STATION => 'Enables warp travel',
            self::JUMP_GATE_MEGA => 'Massive dimensional jump gate',
            self::DIMENSIONAL_GATEWAY => 'Access to other dimensions',
            
            self::BIOSPHERE_BANK => 'Stores biological samples',
            self::GENETIC_VAULT => 'Genetic engineering center',
            self::TERRAFORMING_ENGINE => 'Transforms planet biomes',
            self::LIFE_GENERATOR => 'Creates new lifeforms',
            self::EVOLUTION_LAB => 'Accelerates evolution',
            
            self::BLACK_HOLE_COLLECTOR => 'Harnesses black hole energy',
            self::DARK_MATTER_REFINERY => 'Refines dark matter',
            self::WORMHOLE_STABILIZER => 'Stabilizes wormholes',
            self::DIMENSIONAL_ANCHOR => 'Anchors multiple dimensions',
            self::INFINITY_CORE => 'Access to infinite energy',
            
            self::ASCENDANT_NEXUS => 'Gateway to ascension',
            self::OMNISCIENCE_TOWER => 'Achieves omniscience',
        };
    }

    public function getCategory(): string
    {
        return match ($this) {
            self::DYSON_SPHERE,
            self::SOLAR_COLLECTOR,
            self::FUSION_REACTOR,
            self::STELLAR_ENGINE,
            self::TACHYON_HARVESTER => 'Energy Generation',
            
            self::MATTER_CONVERTER,
            self::ASTEROID_PROCESSOR,
            self::ORE_EXTRACTOR,
            self::CRYSTAL_FORGE,
            self::DEUTERIUM_PLANT => 'Resource Processing',
            
            self::SHIELD_NEXUS,
            self::FORTRESS_STATION,
            self::TURRET_NETWORK,
            self::BEAM_CANNON,
            self::VOID_ANCHOR => 'Defense Systems',
            
            self::RESEARCH_MEGALAB,
            self::QUANTUM_PROCESSOR,
            self::SIMULATION_ENGINE,
            self::AI_NEXUS,
            self::KNOWLEDGE_VAULT => 'Research & Computation',
            
            self::SPACE_DOCK_MEGA,
            self::SHIPYARD_MEGA,
            self::CONSTRUCTION_FACILITY,
            self::REPAIR_FACILITY,
            self::TELEPORT_GATE => 'Construction & Manufacturing',
            
            self::LOGISTICS_HUB,
            self::TRADE_NEXUS,
            self::WARP_STATION,
            self::JUMP_GATE_MEGA,
            self::DIMENSIONAL_GATEWAY => 'Transportation & Logistics',
            
            self::BIOSPHERE_BANK,
            self::GENETIC_VAULT,
            self::TERRAFORMING_ENGINE,
            self::LIFE_GENERATOR,
            self::EVOLUTION_LAB => 'Bio-Engineering',
            
            self::BLACK_HOLE_COLLECTOR,
            self::DARK_MATTER_REFINERY,
            self::WORMHOLE_STABILIZER,
            self::DIMENSIONAL_ANCHOR,
            self::INFINITY_CORE => 'Exotic Matter & Dimensions',
            
            self::ASCENDANT_NEXUS,
            self::OMNISCIENCE_TOWER => 'Ascendant Systems',
        };
    }

    public function getMinimumTier(): int
    {
        return match ($this) {
            // Tier 1-3 Structures
            self::SOLAR_COLLECTOR,
            self::ASTEROID_PROCESSOR,
            self::ORE_EXTRACTOR => 1,
            
            // Tier 2-4 Structures
            self::FUSION_REACTOR,
            self::MATTER_CONVERTER,
            self::CRYSTAL_FORGE => 2,
            
            // Tier 3-5 Structures
            self::RESEARCH_MEGALAB,
            self::SPACE_DOCK_MEGA,
            self::LOGISTICS_HUB,
            self::SHIELD_NEXUS => 3,
            
            // Tier 4-6 Structures
            self::SHIPYARD_MEGA,
            self::QUANTUM_PROCESSOR,
            self::TRADE_NEXUS,
            self::FORTRESS_STATION => 4,
            
            // Tier 5-7 Structures
            self::DYSON_SPHERE,
            self::STELLAR_ENGINE,
            self::REPAIR_FACILITY,
            self::WARP_STATION,
            self::GENETIC_VAULT => 5,
            
            // Tier 6-8 Structures
            self::SIMULATION_ENGINE,
            self::AI_NEXUS,
            self::KNOWLEDGE_VAULT,
            self::TELEPORT_GATE,
            self::JUMP_GATE_MEGA,
            self::TERRAFORMING_ENGINE => 6,
            
            // Tier 7-9 Structures
            self::TACHYON_HARVESTER,
            self::TURRET_NETWORK,
            self::BEAM_CANNON,
            self::CONSTRUCTION_FACILITY,
            self::BIOSPHERE_BANK,
            self::BLACK_HOLE_COLLECTOR => 7,
            
            // Tier 8-9 Only
            self::DEUTERIUM_PLANT,
            self::VOID_ANCHOR,
            self::DIMENSIONAL_GATEWAY,
            self::LIFE_GENERATOR,
            self::EVOLUTION_LAB,
            self::DARK_MATTER_REFINERY,
            self::WORMHOLE_STABILIZER,
            self::DIMENSIONAL_ANCHOR => 8,
            
            // Tier 9 Only (Ascendant)
            self::INFINITY_CORE,
            self::ASCENDANT_NEXUS,
            self::OMNISCIENCE_TOWER => 9,
        };
    }

    public function isAscendant(): bool
    {
        return $this->getMinimumTier() >= 8;
    }
}
