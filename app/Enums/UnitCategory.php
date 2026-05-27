<?php

namespace OGame\Enums;

enum UnitCategory: string
{
    // ========== MILITARY UNITS (30 categories) ==========
    
    // Fighter Class
    case MILITARY_FIGHTER_LIGHT = 'MILITARY_FIGHTER_LIGHT';
    case MILITARY_FIGHTER_HEAVY = 'MILITARY_FIGHTER_HEAVY';
    case MILITARY_FIGHTER_INTERCEPTOR = 'MILITARY_FIGHTER_INTERCEPTOR';
    case MILITARY_FIGHTER_BOMBER = 'MILITARY_FIGHTER_BOMBER';
    case MILITARY_FIGHTER_ELITE = 'MILITARY_FIGHTER_ELITE';
    
    // Capital Ships
    case MILITARY_CAPITAL_FRIGATE = 'MILITARY_CAPITAL_FRIGATE';
    case MILITARY_CAPITAL_DESTROYER = 'MILITARY_CAPITAL_DESTROYER';
    case MILITARY_CAPITAL_CRUISER = 'MILITARY_CAPITAL_CRUISER';
    case MILITARY_CAPITAL_BATTLESHIP = 'MILITARY_CAPITAL_BATTLESHIP';
    case MILITARY_CAPITAL_DREADNOUGHT = 'MILITARY_CAPITAL_DREADNOUGHT';
    
    // Support Vessels
    case MILITARY_SUPPORT_TRANSPORT = 'MILITARY_SUPPORT_TRANSPORT';
    case MILITARY_SUPPORT_LOGISTICS = 'MILITARY_SUPPORT_LOGISTICS';
    case MILITARY_SUPPORT_REPAIR = 'MILITARY_SUPPORT_REPAIR';
    case MILITARY_SUPPORT_SUPPLY = 'MILITARY_SUPPORT_SUPPLY';
    case MILITARY_SUPPORT_COMMAND = 'MILITARY_SUPPORT_COMMAND';
    
    // Specialty Units
    case MILITARY_SPECIALTY_SCOUT = 'MILITARY_SPECIALTY_SCOUT';
    case MILITARY_SPECIALTY_INFILTRATOR = 'MILITARY_SPECIALTY_INFILTRATOR';
    case MILITARY_SPECIALTY_MINE_LAYER = 'MILITARY_SPECIALTY_MINE_LAYER';
    case MILITARY_SPECIALTY_STEALTH = 'MILITARY_SPECIALTY_STEALTH';
    case MILITARY_SPECIALTY_EW = 'MILITARY_SPECIALTY_EW';
    
    // Ground Forces
    case MILITARY_GROUND_INFANTRY = 'MILITARY_GROUND_INFANTRY';
    case MILITARY_GROUND_ARMOR = 'MILITARY_GROUND_ARMOR';
    case MILITARY_GROUND_ARTILLERY = 'MILITARY_GROUND_ARTILLERY';
    case MILITARY_GROUND_SPECIAL = 'MILITARY_GROUND_SPECIAL';
    case MILITARY_GROUND_ELITE = 'MILITARY_GROUND_ELITE';
    
    // Defense Systems
    case MILITARY_DEFENSE_STATIONARY = 'MILITARY_DEFENSE_STATIONARY';
    case MILITARY_DEFENSE_MISSILE = 'MILITARY_DEFENSE_MISSILE';
    case MILITARY_DEFENSE_ENERGY = 'MILITARY_DEFENSE_ENERGY';
    case MILITARY_DEFENSE_SHIELD = 'MILITARY_DEFENSE_SHIELD';
    case MILITARY_DEFENSE_FORTRESS = 'MILITARY_DEFENSE_FORTRESS';

    // ========== CIVILIAN UNITS (30 categories) ==========
    
    // Mining & Extraction
    case CIVILIAN_MINING_ORE = 'CIVILIAN_MINING_ORE';
    case CIVILIAN_MINING_CRYSTAL = 'CIVILIAN_MINING_CRYSTAL';
    case CIVILIAN_MINING_GAS = 'CIVILIAN_MINING_GAS';
    case CIVILIAN_MINING_DEEP = 'CIVILIAN_MINING_DEEP';
    case CIVILIAN_MINING_AUTOMATED = 'CIVILIAN_MINING_AUTOMATED';
    
    // Manufacturing
    case CIVILIAN_MANUFACTURING_BASIC = 'CIVILIAN_MANUFACTURING_BASIC';
    case CIVILIAN_MANUFACTURING_ADVANCED = 'CIVILIAN_MANUFACTURING_ADVANCED';
    case CIVILIAN_MANUFACTURING_SPECIALIST = 'CIVILIAN_MANUFACTURING_SPECIALIST';
    case CIVILIAN_MANUFACTURING_CRAFT = 'CIVILIAN_MANUFACTURING_CRAFT';
    case CIVILIAN_MANUFACTURING_FACTORY = 'CIVILIAN_MANUFACTURING_FACTORY';
    
    // Agriculture
    case CIVILIAN_AGRICULTURE_FARMER = 'CIVILIAN_AGRICULTURE_FARMER';
    case CIVILIAN_AGRICULTURE_RANCHER = 'CIVILIAN_AGRICULTURE_RANCHER';
    case CIVILIAN_AGRICULTURE_AQUACULTURE = 'CIVILIAN_AGRICULTURE_AQUACULTURE';
    case CIVILIAN_AGRICULTURE_BIOTECH = 'CIVILIAN_AGRICULTURE_BIOTECH';
    case CIVILIAN_AGRICULTURE_GENE = 'CIVILIAN_AGRICULTURE_GENE';
    
    // Commerce & Trade
    case CIVILIAN_COMMERCE_MERCHANT = 'CIVILIAN_COMMERCE_MERCHANT';
    case CIVILIAN_COMMERCE_TRADER = 'CIVILIAN_COMMERCE_TRADER';
    case CIVILIAN_COMMERCE_BROKER = 'CIVILIAN_COMMERCE_BROKER';
    case CIVILIAN_COMMERCE_BANKER = 'CIVILIAN_COMMERCE_BANKER';
    case CIVILIAN_COMMERCE_ENTREPRENEUR = 'CIVILIAN_COMMERCE_ENTREPRENEUR';
    
    // Science & Research
    case CIVILIAN_SCIENCE_RESEARCHER = 'CIVILIAN_SCIENCE_RESEARCHER';
    case CIVILIAN_SCIENCE_ENGINEER = 'CIVILIAN_SCIENCE_ENGINEER';
    case CIVILIAN_SCIENCE_TECHNICIAN = 'CIVILIAN_SCIENCE_TECHNICIAN';
    case CIVILIAN_SCIENCE_SCIENTIST = 'CIVILIAN_SCIENCE_SCIENTIST';
    case CIVILIAN_SCIENCE_SPECIALIST = 'CIVILIAN_SCIENCE_SPECIALIST';
    
    // Transportation & Logistics
    case CIVILIAN_TRANSPORT_WORKER = 'CIVILIAN_TRANSPORT_WORKER';
    case CIVILIAN_TRANSPORT_PILOT = 'CIVILIAN_TRANSPORT_PILOT';
    case CIVILIAN_TRANSPORT_CAPTAIN = 'CIVILIAN_TRANSPORT_CAPTAIN';
    case CIVILIAN_TRANSPORT_COORDINATOR = 'CIVILIAN_TRANSPORT_COORDINATOR';
    case CIVILIAN_TRANSPORT_LOGISTICS = 'CIVILIAN_TRANSPORT_LOGISTICS';
    
    // Infrastructure & Construction
    case CIVILIAN_INFRA_WORKER = 'CIVILIAN_INFRA_WORKER';
    case CIVILIAN_INFRA_ENGINEER = 'CIVILIAN_INFRA_ENGINEER';
    case CIVILIAN_INFRA_ARCHITECT = 'CIVILIAN_INFRA_ARCHITECT';
    case CIVILIAN_INFRA_MANAGER = 'CIVILIAN_INFRA_MANAGER';
    case CIVILIAN_INFRA_DIRECTOR = 'CIVILIAN_INFRA_DIRECTOR';

    // ========== GOVERNMENT UNITS (30 categories) ==========
    
    // Administration
    case GOVERNMENT_ADMIN_CLERK = 'GOVERNMENT_ADMIN_CLERK';
    case GOVERNMENT_ADMIN_OFFICER = 'GOVERNMENT_ADMIN_OFFICER';
    case GOVERNMENT_ADMIN_MANAGER = 'GOVERNMENT_ADMIN_MANAGER';
    case GOVERNMENT_ADMIN_DIRECTOR = 'GOVERNMENT_ADMIN_DIRECTOR';
    case GOVERNMENT_ADMIN_OFFICIAL = 'GOVERNMENT_ADMIN_OFFICIAL';
    
    // Diplomacy & Relations
    case GOVERNMENT_DIPLOMACY_ENVOY = 'GOVERNMENT_DIPLOMACY_ENVOY';
    case GOVERNMENT_DIPLOMACY_AMBASSADOR = 'GOVERNMENT_DIPLOMACY_AMBASSADOR';
    case GOVERNMENT_DIPLOMACY_NEGOTIATOR = 'GOVERNMENT_DIPLOMACY_NEGOTIATOR';
    case GOVERNMENT_DIPLOMACY_LIAISON = 'GOVERNMENT_DIPLOMACY_LIAISON';
    case GOVERNMENT_DIPLOMACY_ADVISOR = 'GOVERNMENT_DIPLOMACY_ADVISOR';
    
    // Law Enforcement
    case GOVERNMENT_LAWENFORCE_OFFICER = 'GOVERNMENT_LAWENFORCE_OFFICER';
    case GOVERNMENT_LAWENFORCE_DETECTIVE = 'GOVERNMENT_LAWENFORCE_DETECTIVE';
    case GOVERNMENT_LAWENFORCE_INSPECTOR = 'GOVERNMENT_LAWENFORCE_INSPECTOR';
    case GOVERNMENT_LAWENFORCE_COMMANDER = 'GOVERNMENT_LAWENFORCE_COMMANDER';
    case GOVERNMENT_LAWENFORCE_MARSHAL = 'GOVERNMENT_LAWENFORCE_MARSHAL';
    
    // Intelligence & Security
    case GOVERNMENT_INTEL_AGENT = 'GOVERNMENT_INTEL_AGENT';
    case GOVERNMENT_INTEL_SPY = 'GOVERNMENT_INTEL_SPY';
    case GOVERNMENT_INTEL_ANALYST = 'GOVERNMENT_INTEL_ANALYST';
    case GOVERNMENT_INTEL_OPERATIVE = 'GOVERNMENT_INTEL_OPERATIVE';
    case GOVERNMENT_INTEL_DIRECTOR = 'GOVERNMENT_INTEL_DIRECTOR';
    
    // Public Services
    case GOVERNMENT_PUBLIC_HEALTH = 'GOVERNMENT_PUBLIC_HEALTH';
    case GOVERNMENT_PUBLIC_EDUCATION = 'GOVERNMENT_PUBLIC_EDUCATION';
    case GOVERNMENT_PUBLIC_INFRASTRUCTURE = 'GOVERNMENT_PUBLIC_INFRASTRUCTURE';
    case GOVERNMENT_PUBLIC_WELFARE = 'GOVERNMENT_PUBLIC_WELFARE';
    case GOVERNMENT_PUBLIC_EMERGENCY = 'GOVERNMENT_PUBLIC_EMERGENCY';
    
    // Treasury & Finance
    case GOVERNMENT_TREASURY_ACCOUNTANT = 'GOVERNMENT_TREASURY_ACCOUNTANT';
    case GOVERNMENT_TREASURY_AUDITOR = 'GOVERNMENT_TREASURY_AUDITOR';
    case GOVERNMENT_TREASURY_CONTROLLER = 'GOVERNMENT_TREASURY_CONTROLLER';
    case GOVERNMENT_TREASURY_TREASURER = 'GOVERNMENT_TREASURY_TREASURER';
    case GOVERNMENT_TREASURY_MINISTER = 'GOVERNMENT_TREASURY_MINISTER';
    
    // Judiciary
    case GOVERNMENT_JUDICIARY_JUDGE = 'GOVERNMENT_JUDICIARY_JUDGE';
    case GOVERNMENT_JUDICIARY_MAGISTRATE = 'GOVERNMENT_JUDICIARY_MAGISTRATE';
    case GOVERNMENT_JUDICIARY_PROSECUTOR = 'GOVERNMENT_JUDICIARY_PROSECUTOR';
    case GOVERNMENT_JUDICIARY_LAWYER = 'GOVERNMENT_JUDICIARY_LAWYER';
    case GOVERNMENT_JUDICIARY_COURT = 'GOVERNMENT_JUDICIARY_COURT';
    
    // Council & Leadership
    case GOVERNMENT_COUNCIL_COUNCILLOR = 'GOVERNMENT_COUNCIL_COUNCILLOR';
    case GOVERNMENT_COUNCIL_SENATOR = 'GOVERNMENT_COUNCIL_SENATOR';
    case GOVERNMENT_COUNCIL_GOVERNOR = 'GOVERNMENT_COUNCIL_GOVERNOR';
    case GOVERNMENT_COUNCIL_PREMIER = 'GOVERNMENT_COUNCIL_PREMIER';
    case GOVERNMENT_COUNCIL_SUPREME = 'GOVERNMENT_COUNCIL_SUPREME';

    public function getCategory(): string
    {
        return match ($this) {
            self::MILITARY_FIGHTER_LIGHT,
            self::MILITARY_FIGHTER_HEAVY,
            self::MILITARY_FIGHTER_INTERCEPTOR,
            self::MILITARY_FIGHTER_BOMBER,
            self::MILITARY_FIGHTER_ELITE => 'Fighter Aircraft',
            
            self::MILITARY_CAPITAL_FRIGATE,
            self::MILITARY_CAPITAL_DESTROYER,
            self::MILITARY_CAPITAL_CRUISER,
            self::MILITARY_CAPITAL_BATTLESHIP,
            self::MILITARY_CAPITAL_DREADNOUGHT => 'Capital Ships',
            
            self::MILITARY_SUPPORT_TRANSPORT,
            self::MILITARY_SUPPORT_LOGISTICS,
            self::MILITARY_SUPPORT_REPAIR,
            self::MILITARY_SUPPORT_SUPPLY,
            self::MILITARY_SUPPORT_COMMAND => 'Support Vessels',
            
            self::MILITARY_SPECIALTY_SCOUT,
            self::MILITARY_SPECIALTY_INFILTRATOR,
            self::MILITARY_SPECIALTY_MINE_LAYER,
            self::MILITARY_SPECIALTY_STEALTH,
            self::MILITARY_SPECIALTY_EW => 'Specialty Units',
            
            self::MILITARY_GROUND_INFANTRY,
            self::MILITARY_GROUND_ARMOR,
            self::MILITARY_GROUND_ARTILLERY,
            self::MILITARY_GROUND_SPECIAL,
            self::MILITARY_GROUND_ELITE => 'Ground Forces',
            
            self::MILITARY_DEFENSE_STATIONARY,
            self::MILITARY_DEFENSE_MISSILE,
            self::MILITARY_DEFENSE_ENERGY,
            self::MILITARY_DEFENSE_SHIELD,
            self::MILITARY_DEFENSE_FORTRESS => 'Defense Systems',
            
            self::CIVILIAN_MINING_ORE,
            self::CIVILIAN_MINING_CRYSTAL,
            self::CIVILIAN_MINING_GAS,
            self::CIVILIAN_MINING_DEEP,
            self::CIVILIAN_MINING_AUTOMATED => 'Mining & Extraction',
            
            self::CIVILIAN_MANUFACTURING_BASIC,
            self::CIVILIAN_MANUFACTURING_ADVANCED,
            self::CIVILIAN_MANUFACTURING_SPECIALIST,
            self::CIVILIAN_MANUFACTURING_CRAFT,
            self::CIVILIAN_MANUFACTURING_FACTORY => 'Manufacturing',
            
            self::CIVILIAN_AGRICULTURE_FARMER,
            self::CIVILIAN_AGRICULTURE_RANCHER,
            self::CIVILIAN_AGRICULTURE_AQUACULTURE,
            self::CIVILIAN_AGRICULTURE_BIOTECH,
            self::CIVILIAN_AGRICULTURE_GENE => 'Agriculture',
            
            self::CIVILIAN_COMMERCE_MERCHANT,
            self::CIVILIAN_COMMERCE_TRADER,
            self::CIVILIAN_COMMERCE_BROKER,
            self::CIVILIAN_COMMERCE_BANKER,
            self::CIVILIAN_COMMERCE_ENTREPRENEUR => 'Commerce & Trade',
            
            self::CIVILIAN_SCIENCE_RESEARCHER,
            self::CIVILIAN_SCIENCE_ENGINEER,
            self::CIVILIAN_SCIENCE_TECHNICIAN,
            self::CIVILIAN_SCIENCE_SCIENTIST,
            self::CIVILIAN_SCIENCE_SPECIALIST => 'Science & Research',
            
            self::CIVILIAN_TRANSPORT_WORKER,
            self::CIVILIAN_TRANSPORT_PILOT,
            self::CIVILIAN_TRANSPORT_CAPTAIN,
            self::CIVILIAN_TRANSPORT_COORDINATOR,
            self::CIVILIAN_TRANSPORT_LOGISTICS => 'Transportation & Logistics',
            
            self::CIVILIAN_INFRA_WORKER,
            self::CIVILIAN_INFRA_ENGINEER,
            self::CIVILIAN_INFRA_ARCHITECT,
            self::CIVILIAN_INFRA_MANAGER,
            self::CIVILIAN_INFRA_DIRECTOR => 'Infrastructure & Construction',
            
            self::GOVERNMENT_ADMIN_CLERK,
            self::GOVERNMENT_ADMIN_OFFICER,
            self::GOVERNMENT_ADMIN_MANAGER,
            self::GOVERNMENT_ADMIN_DIRECTOR,
            self::GOVERNMENT_ADMIN_OFFICIAL => 'Administration',
            
            self::GOVERNMENT_DIPLOMACY_ENVOY,
            self::GOVERNMENT_DIPLOMACY_AMBASSADOR,
            self::GOVERNMENT_DIPLOMACY_NEGOTIATOR,
            self::GOVERNMENT_DIPLOMACY_LIAISON,
            self::GOVERNMENT_DIPLOMACY_ADVISOR => 'Diplomacy & Relations',
            
            self::GOVERNMENT_LAWENFORCE_OFFICER,
            self::GOVERNMENT_LAWENFORCE_DETECTIVE,
            self::GOVERNMENT_LAWENFORCE_INSPECTOR,
            self::GOVERNMENT_LAWENFORCE_COMMANDER,
            self::GOVERNMENT_LAWENFORCE_MARSHAL => 'Law Enforcement',
            
            self::GOVERNMENT_INTEL_AGENT,
            self::GOVERNMENT_INTEL_SPY,
            self::GOVERNMENT_INTEL_ANALYST,
            self::GOVERNMENT_INTEL_OPERATIVE,
            self::GOVERNMENT_INTEL_DIRECTOR => 'Intelligence & Security',
            
            self::GOVERNMENT_PUBLIC_HEALTH,
            self::GOVERNMENT_PUBLIC_EDUCATION,
            self::GOVERNMENT_PUBLIC_INFRASTRUCTURE,
            self::GOVERNMENT_PUBLIC_WELFARE,
            self::GOVERNMENT_PUBLIC_EMERGENCY => 'Public Services',
            
            self::GOVERNMENT_TREASURY_ACCOUNTANT,
            self::GOVERNMENT_TREASURY_AUDITOR,
            self::GOVERNMENT_TREASURY_CONTROLLER,
            self::GOVERNMENT_TREASURY_TREASURER,
            self::GOVERNMENT_TREASURY_MINISTER => 'Treasury & Finance',
            
            self::GOVERNMENT_JUDICIARY_JUDGE,
            self::GOVERNMENT_JUDICIARY_MAGISTRATE,
            self::GOVERNMENT_JUDICIARY_PROSECUTOR,
            self::GOVERNMENT_JUDICIARY_LAWYER,
            self::GOVERNMENT_JUDICIARY_COURT => 'Judiciary',
            
            self::GOVERNMENT_COUNCIL_COUNCILLOR,
            self::GOVERNMENT_COUNCIL_SENATOR,
            self::GOVERNMENT_COUNCIL_GOVERNOR,
            self::GOVERNMENT_COUNCIL_PREMIER,
            self::GOVERNMENT_COUNCIL_SUPREME => 'Council & Leadership',
        };
    }

    public function getType(): string
    {
        return match ($this) {
            self::MILITARY_FIGHTER_LIGHT => 'Light Fighter',
            self::MILITARY_FIGHTER_HEAVY => 'Heavy Fighter',
            self::MILITARY_FIGHTER_INTERCEPTOR => 'Interceptor',
            self::MILITARY_FIGHTER_BOMBER => 'Bomber',
            self::MILITARY_FIGHTER_ELITE => 'Elite Fighter',
            
            self::MILITARY_CAPITAL_FRIGATE => 'Frigate',
            self::MILITARY_CAPITAL_DESTROYER => 'Destroyer',
            self::MILITARY_CAPITAL_CRUISER => 'Cruiser',
            self::MILITARY_CAPITAL_BATTLESHIP => 'Battleship',
            self::MILITARY_CAPITAL_DREADNOUGHT => 'Dreadnought',
            
            self::MILITARY_SUPPORT_TRANSPORT => 'Transport',
            self::MILITARY_SUPPORT_LOGISTICS => 'Logistics Vessel',
            self::MILITARY_SUPPORT_REPAIR => 'Repair Ship',
            self::MILITARY_SUPPORT_SUPPLY => 'Supply Ship',
            self::MILITARY_SUPPORT_COMMAND => 'Command Vessel',
            
            self::MILITARY_SPECIALTY_SCOUT => 'Scout',
            self::MILITARY_SPECIALTY_INFILTRATOR => 'Infiltrator',
            self::MILITARY_SPECIALTY_MINE_LAYER => 'Mine Layer',
            self::MILITARY_SPECIALTY_STEALTH => 'Stealth Craft',
            self::MILITARY_SPECIALTY_EW => 'Electronic Warfare',
            
            self::MILITARY_GROUND_INFANTRY => 'Infantry',
            self::MILITARY_GROUND_ARMOR => 'Armor',
            self::MILITARY_GROUND_ARTILLERY => 'Artillery',
            self::MILITARY_GROUND_SPECIAL => 'Special Forces',
            self::MILITARY_GROUND_ELITE => 'Elite Guard',
            
            self::MILITARY_DEFENSE_STATIONARY => 'Stationary Defense',
            self::MILITARY_DEFENSE_MISSILE => 'Missile Defense',
            self::MILITARY_DEFENSE_ENERGY => 'Energy Weapon',
            self::MILITARY_DEFENSE_SHIELD => 'Shield Generator',
            self::MILITARY_DEFENSE_FORTRESS => 'Fortress',
            
            self::CIVILIAN_MINING_ORE => 'Ore Miner',
            self::CIVILIAN_MINING_CRYSTAL => 'Crystal Miner',
            self::CIVILIAN_MINING_GAS => 'Gas Extractor',
            self::CIVILIAN_MINING_DEEP => 'Deep Mine Worker',
            self::CIVILIAN_MINING_AUTOMATED => 'Automated Mining',
            
            self::CIVILIAN_MANUFACTURING_BASIC => 'Basic Worker',
            self::CIVILIAN_MANUFACTURING_ADVANCED => 'Advanced Worker',
            self::CIVILIAN_MANUFACTURING_SPECIALIST => 'Specialist',
            self::CIVILIAN_MANUFACTURING_CRAFT => 'Craftsperson',
            self::CIVILIAN_MANUFACTURING_FACTORY => 'Factory Manager',
            
            self::CIVILIAN_AGRICULTURE_FARMER => 'Farmer',
            self::CIVILIAN_AGRICULTURE_RANCHER => 'Rancher',
            self::CIVILIAN_AGRICULTURE_AQUACULTURE => 'Aquaculturist',
            self::CIVILIAN_AGRICULTURE_BIOTECH => 'Biotech Specialist',
            self::CIVILIAN_AGRICULTURE_GENE => 'Genetic Engineer',
            
            self::CIVILIAN_COMMERCE_MERCHANT => 'Merchant',
            self::CIVILIAN_COMMERCE_TRADER => 'Trader',
            self::CIVILIAN_COMMERCE_BROKER => 'Broker',
            self::CIVILIAN_COMMERCE_BANKER => 'Banker',
            self::CIVILIAN_COMMERCE_ENTREPRENEUR => 'Entrepreneur',
            
            self::CIVILIAN_SCIENCE_RESEARCHER => 'Researcher',
            self::CIVILIAN_SCIENCE_ENGINEER => 'Engineer',
            self::CIVILIAN_SCIENCE_TECHNICIAN => 'Technician',
            self::CIVILIAN_SCIENCE_SCIENTIST => 'Scientist',
            self::CIVILIAN_SCIENCE_SPECIALIST => 'Research Specialist',
            
            self::CIVILIAN_TRANSPORT_WORKER => 'Transport Worker',
            self::CIVILIAN_TRANSPORT_PILOT => 'Pilot',
            self::CIVILIAN_TRANSPORT_CAPTAIN => 'Captain',
            self::CIVILIAN_TRANSPORT_COORDINATOR => 'Coordinator',
            self::CIVILIAN_TRANSPORT_LOGISTICS => 'Logistics Officer',
            
            self::CIVILIAN_INFRA_WORKER => 'Construction Worker',
            self::CIVILIAN_INFRA_ENGINEER => 'Infrastructure Engineer',
            self::CIVILIAN_INFRA_ARCHITECT => 'Architect',
            self::CIVILIAN_INFRA_MANAGER => 'Construction Manager',
            self::CIVILIAN_INFRA_DIRECTOR => 'Director',
            
            self::GOVERNMENT_ADMIN_CLERK => 'Administrative Clerk',
            self::GOVERNMENT_ADMIN_OFFICER => 'Administrative Officer',
            self::GOVERNMENT_ADMIN_MANAGER => 'Administrative Manager',
            self::GOVERNMENT_ADMIN_DIRECTOR => 'Administrative Director',
            self::GOVERNMENT_ADMIN_OFFICIAL => 'Government Official',
            
            self::GOVERNMENT_DIPLOMACY_ENVOY => 'Envoy',
            self::GOVERNMENT_DIPLOMACY_AMBASSADOR => 'Ambassador',
            self::GOVERNMENT_DIPLOMACY_NEGOTIATOR => 'Negotiator',
            self::GOVERNMENT_DIPLOMACY_LIAISON => 'Liaison Officer',
            self::GOVERNMENT_DIPLOMACY_ADVISOR => 'Diplomatic Advisor',
            
            self::GOVERNMENT_LAWENFORCE_OFFICER => 'Law Officer',
            self::GOVERNMENT_LAWENFORCE_DETECTIVE => 'Detective',
            self::GOVERNMENT_LAWENFORCE_INSPECTOR => 'Inspector',
            self::GOVERNMENT_LAWENFORCE_COMMANDER => 'Law Commander',
            self::GOVERNMENT_LAWENFORCE_MARSHAL => 'Marshal',
            
            self::GOVERNMENT_INTEL_AGENT => 'Intelligence Agent',
            self::GOVERNMENT_INTEL_SPY => 'Spy',
            self::GOVERNMENT_INTEL_ANALYST => 'Intelligence Analyst',
            self::GOVERNMENT_INTEL_OPERATIVE => 'Operative',
            self::GOVERNMENT_INTEL_DIRECTOR => 'Intelligence Director',
            
            self::GOVERNMENT_PUBLIC_HEALTH => 'Health Officer',
            self::GOVERNMENT_PUBLIC_EDUCATION => 'Education Officer',
            self::GOVERNMENT_PUBLIC_INFRASTRUCTURE => 'Infrastructure Officer',
            self::GOVERNMENT_PUBLIC_WELFARE => 'Welfare Officer',
            self::GOVERNMENT_PUBLIC_EMERGENCY => 'Emergency Officer',
            
            self::GOVERNMENT_TREASURY_ACCOUNTANT => 'Accountant',
            self::GOVERNMENT_TREASURY_AUDITOR => 'Auditor',
            self::GOVERNMENT_TREASURY_CONTROLLER => 'Controller',
            self::GOVERNMENT_TREASURY_TREASURER => 'Treasurer',
            self::GOVERNMENT_TREASURY_MINISTER => 'Finance Minister',
            
            self::GOVERNMENT_JUDICIARY_JUDGE => 'Judge',
            self::GOVERNMENT_JUDICIARY_MAGISTRATE => 'Magistrate',
            self::GOVERNMENT_JUDICIARY_PROSECUTOR => 'Prosecutor',
            self::GOVERNMENT_JUDICIARY_LAWYER => 'Lawyer',
            self::GOVERNMENT_JUDICIARY_COURT => 'Court Administrator',
            
            self::GOVERNMENT_COUNCIL_COUNCILLOR => 'Councillor',
            self::GOVERNMENT_COUNCIL_SENATOR => 'Senator',
            self::GOVERNMENT_COUNCIL_GOVERNOR => 'Governor',
            self::GOVERNMENT_COUNCIL_PREMIER => 'Premier',
            self::GOVERNMENT_COUNCIL_SUPREME => 'Supreme Leader',
        };
    }

    public function getLevel(): int
    {
        return match ($this) {
            // Military Fighters - Escalating levels
            self::MILITARY_FIGHTER_LIGHT => 1,
            self::MILITARY_FIGHTER_HEAVY => 2,
            self::MILITARY_FIGHTER_INTERCEPTOR => 2,
            self::MILITARY_FIGHTER_BOMBER => 3,
            self::MILITARY_FIGHTER_ELITE => 4,
            
            // Military Capital Ships - Escalating levels
            self::MILITARY_CAPITAL_FRIGATE => 3,
            self::MILITARY_CAPITAL_DESTROYER => 4,
            self::MILITARY_CAPITAL_CRUISER => 5,
            self::MILITARY_CAPITAL_BATTLESHIP => 6,
            self::MILITARY_CAPITAL_DREADNOUGHT => 7,
            
            // Support Vessels
            self::MILITARY_SUPPORT_TRANSPORT => 2,
            self::MILITARY_SUPPORT_LOGISTICS => 3,
            self::MILITARY_SUPPORT_REPAIR => 3,
            self::MILITARY_SUPPORT_SUPPLY => 2,
            self::MILITARY_SUPPORT_COMMAND => 5,
            
            // Specialty Units
            self::MILITARY_SPECIALTY_SCOUT => 1,
            self::MILITARY_SPECIALTY_INFILTRATOR => 4,
            self::MILITARY_SPECIALTY_MINE_LAYER => 3,
            self::MILITARY_SPECIALTY_STEALTH => 5,
            self::MILITARY_SPECIALTY_EW => 4,
            
            // Ground Forces
            self::MILITARY_GROUND_INFANTRY => 1,
            self::MILITARY_GROUND_ARMOR => 3,
            self::MILITARY_GROUND_ARTILLERY => 3,
            self::MILITARY_GROUND_SPECIAL => 4,
            self::MILITARY_GROUND_ELITE => 5,
            
            // Defense Systems
            self::MILITARY_DEFENSE_STATIONARY => 2,
            self::MILITARY_DEFENSE_MISSILE => 3,
            self::MILITARY_DEFENSE_ENERGY => 4,
            self::MILITARY_DEFENSE_SHIELD => 5,
            self::MILITARY_DEFENSE_FORTRESS => 6,
            
            // Civilian Units - Generally lower levels
            self::CIVILIAN_MINING_ORE => 1,
            self::CIVILIAN_MINING_CRYSTAL => 1,
            self::CIVILIAN_MINING_GAS => 2,
            self::CIVILIAN_MINING_DEEP => 3,
            self::CIVILIAN_MINING_AUTOMATED => 4,
            
            self::CIVILIAN_MANUFACTURING_BASIC => 1,
            self::CIVILIAN_MANUFACTURING_ADVANCED => 2,
            self::CIVILIAN_MANUFACTURING_SPECIALIST => 3,
            self::CIVILIAN_MANUFACTURING_CRAFT => 3,
            self::CIVILIAN_MANUFACTURING_FACTORY => 4,
            
            self::CIVILIAN_AGRICULTURE_FARMER => 1,
            self::CIVILIAN_AGRICULTURE_RANCHER => 1,
            self::CIVILIAN_AGRICULTURE_AQUACULTURE => 2,
            self::CIVILIAN_AGRICULTURE_BIOTECH => 3,
            self::CIVILIAN_AGRICULTURE_GENE => 4,
            
            self::CIVILIAN_COMMERCE_MERCHANT => 1,
            self::CIVILIAN_COMMERCE_TRADER => 2,
            self::CIVILIAN_COMMERCE_BROKER => 3,
            self::CIVILIAN_COMMERCE_BANKER => 4,
            self::CIVILIAN_COMMERCE_ENTREPRENEUR => 5,
            
            self::CIVILIAN_SCIENCE_RESEARCHER => 2,
            self::CIVILIAN_SCIENCE_ENGINEER => 2,
            self::CIVILIAN_SCIENCE_TECHNICIAN => 1,
            self::CIVILIAN_SCIENCE_SCIENTIST => 4,
            self::CIVILIAN_SCIENCE_SPECIALIST => 5,
            
            self::CIVILIAN_TRANSPORT_WORKER => 1,
            self::CIVILIAN_TRANSPORT_PILOT => 2,
            self::CIVILIAN_TRANSPORT_CAPTAIN => 3,
            self::CIVILIAN_TRANSPORT_COORDINATOR => 4,
            self::CIVILIAN_TRANSPORT_LOGISTICS => 5,
            
            self::CIVILIAN_INFRA_WORKER => 1,
            self::CIVILIAN_INFRA_ENGINEER => 2,
            self::CIVILIAN_INFRA_ARCHITECT => 3,
            self::CIVILIAN_INFRA_MANAGER => 4,
            self::CIVILIAN_INFRA_DIRECTOR => 5,
            
            // Government Units - Variable levels
            self::GOVERNMENT_ADMIN_CLERK => 1,
            self::GOVERNMENT_ADMIN_OFFICER => 2,
            self::GOVERNMENT_ADMIN_MANAGER => 3,
            self::GOVERNMENT_ADMIN_DIRECTOR => 4,
            self::GOVERNMENT_ADMIN_OFFICIAL => 5,
            
            self::GOVERNMENT_DIPLOMACY_ENVOY => 2,
            self::GOVERNMENT_DIPLOMACY_AMBASSADOR => 4,
            self::GOVERNMENT_DIPLOMACY_NEGOTIATOR => 3,
            self::GOVERNMENT_DIPLOMACY_LIAISON => 2,
            self::GOVERNMENT_DIPLOMACY_ADVISOR => 4,
            
            self::GOVERNMENT_LAWENFORCE_OFFICER => 1,
            self::GOVERNMENT_LAWENFORCE_DETECTIVE => 2,
            self::GOVERNMENT_LAWENFORCE_INSPECTOR => 3,
            self::GOVERNMENT_LAWENFORCE_COMMANDER => 4,
            self::GOVERNMENT_LAWENFORCE_MARSHAL => 5,
            
            self::GOVERNMENT_INTEL_AGENT => 2,
            self::GOVERNMENT_INTEL_SPY => 3,
            self::GOVERNMENT_INTEL_ANALYST => 2,
            self::GOVERNMENT_INTEL_OPERATIVE => 4,
            self::GOVERNMENT_INTEL_DIRECTOR => 5,
            
            self::GOVERNMENT_PUBLIC_HEALTH => 2,
            self::GOVERNMENT_PUBLIC_EDUCATION => 2,
            self::GOVERNMENT_PUBLIC_INFRASTRUCTURE => 3,
            self::GOVERNMENT_PUBLIC_WELFARE => 2,
            self::GOVERNMENT_PUBLIC_EMERGENCY => 3,
            
            self::GOVERNMENT_TREASURY_ACCOUNTANT => 2,
            self::GOVERNMENT_TREASURY_AUDITOR => 3,
            self::GOVERNMENT_TREASURY_CONTROLLER => 4,
            self::GOVERNMENT_TREASURY_TREASURER => 4,
            self::GOVERNMENT_TREASURY_MINISTER => 5,
            
            self::GOVERNMENT_JUDICIARY_JUDGE => 4,
            self::GOVERNMENT_JUDICIARY_MAGISTRATE => 3,
            self::GOVERNMENT_JUDICIARY_PROSECUTOR => 3,
            self::GOVERNMENT_JUDICIARY_LAWYER => 2,
            self::GOVERNMENT_JUDICIARY_COURT => 1,
            
            self::GOVERNMENT_COUNCIL_COUNCILLOR => 3,
            self::GOVERNMENT_COUNCIL_SENATOR => 4,
            self::GOVERNMENT_COUNCIL_GOVERNOR => 5,
            self::GOVERNMENT_COUNCIL_PREMIER => 5,
            self::GOVERNMENT_COUNCIL_SUPREME => 6,
        };
    }

    public function getCost(): int
    {
        return $this->getLevel() * 100;
    }

    public function getTrainingTime(): int
    {
        return $this->getLevel() * 3600; // In seconds
    }

    public function isMilitaryUnit(): bool
    {
        return str_starts_with($this->value, 'MILITARY_');
    }

    public function isCivilianUnit(): bool
    {
        return str_starts_with($this->value, 'CIVILIAN_');
    }

    public function isGovernmentUnit(): bool
    {
        return str_starts_with($this->value, 'GOVERNMENT_');
    }
}
