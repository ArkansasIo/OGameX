<?php

namespace OGame\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OGame\Enums\MegastructureTier;
use OGame\Enums\MegastructureType;

/**
 * @property int $id
 * @property int $user_id
 * @property int $planet_id
 * @property string $type
 * @property int $tier
 * @property string $name
 * @property string $description
 * @property bool $is_active
 * @property bool $is_constructing
 * @property int $construction_progress
 * @property float $power_output
 * @property float $power_consumption
 * @property float $resource_generation
 * @property float $defense_strength
 * @property float $construction_speed_bonus
 * @property float $research_speed_bonus
 * @property float $storage_capacity
 * @property float $efficiency
 * @property float $quantum_efficiency
 * @property float $dimensional_stability
 * @property float $temporal_distortion
 * @property float $exotic_particle_manipulation
 * @property float $ascension_factor
 * @property float $omniscience_level
 * @property float $reality_manipulation
 * @property float $dimension_traversal
 * @property float $maintenance_cost
 * @property float $upgrade_cost
 * @property int $upgrade_time
 */
class Megastructure extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'planet_id',
        'type',
        'tier',
        'name',
        'description',
        'is_active',
        'is_constructing',
        'construction_progress',
        'power_output',
        'power_consumption',
        'resource_generation',
        'defense_strength',
        'construction_speed_bonus',
        'research_speed_bonus',
        'storage_capacity',
        'efficiency',
        'quantum_efficiency',
        'dimensional_stability',
        'temporal_distortion',
        'exotic_particle_manipulation',
        'ascension_factor',
        'omniscience_level',
        'reality_manipulation',
        'dimension_traversal',
        'maintenance_cost',
        'upgrade_cost',
        'upgrade_time',
        'operational_cycles',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_constructing' => 'boolean',
        'construction_started_at' => 'datetime',
        'construction_completed_at' => 'datetime',
        'last_maintenance' => 'datetime',
        'last_active_at' => 'datetime',
        'stats_data' => 'json',
        'upgrade_chain' => 'json',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function planet(): BelongsTo
    {
        return $this->belongsTo(Planet::class);
    }

    public function getMegastructureType(): MegastructureType
    {
        return MegastructureType::from($this->type);
    }

    public function getTierEnum(): MegastructureTier
    {
        return MegastructureTier::from($this->tier);
    }

    public function upgradeToNextTier(): void
    {
        if ($this->tier < 9) {
            $this->tier += 1;
            $this->recalculateStats();
            $this->save();
        }
    }

    public function recalculateStats(): void
    {
        $tier = $this->getTierEnum();
        $multiplier = $tier->getStatMultiplier();

        // Recalculate all stats based on tier
        $this->power_output *= $multiplier;
        $this->power_consumption = $tier->getPowerConsumption();
        $this->efficiency = $tier->getEfficiencyBonus();
        $this->construction_speed_bonus = $tier->getConstructionSpeedBonus();
        $this->research_speed_bonus = $tier->getResearchSpeedBonus();
        $this->defense_strength *= $multiplier;
        $this->storage_capacity *= $tier->getStorageBonus();

        if ($tier->isAscendant()) {
            $this->ascension_factor = ($this->tier - 7) * 50;
            $this->omniscience_level = ($this->tier - 7) * 25;
            $this->reality_manipulation = ($this->tier - 7) * 40;
            $this->dimension_traversal = ($this->tier - 7) * 35;
        }
    }

    public function startConstruction(): void
    {
        $this->is_constructing = true;
        $this->construction_progress = 0;
        $this->construction_started_at = now();
        $this->save();
    }

    public function completeConstruction(): void
    {
        $this->is_constructing = false;
        $this->construction_progress = 100;
        $this->construction_completed_at = now();
        $this->is_active = true;
        $this->save();
    }

    public function isAscendant(): bool
    {
        return $this->tier >= 8;
    }

    public function canUpgrade(): bool
    {
        return !$this->is_constructing && $this->tier < 9;
    }

    public function getMaintenanceStatus(): string
    {
        if (!$this->last_maintenance) {
            return 'Never Maintained';
        }

        $daysSinceLastMaintenance = now()->diffInDays($this->last_maintenance);

        return match (true) {
            $daysSinceLastMaintenance < 1 => 'Excellent',
            $daysSinceLastMaintenance < 7 => 'Good',
            $daysSinceLastMaintenance < 30 => 'Fair',
            $daysSinceLastMaintenance < 90 => 'Poor',
            default => 'Critical',
        };
    }

    public function performMaintenance(): void
    {
        $this->last_maintenance = now();
        $this->save();
    }

    public function getCategory(): string
    {
        return $this->getMegastructureType()->getCategory();
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeConstructing(Builder $query): Builder
    {
        return $query->where('is_constructing', true);
    }

    public function scopeAscendant(Builder $query): Builder
    {
        return $query->where('tier', '>=', 8);
    }

    public function scopeByType(Builder $query, MegastructureType $type): Builder
    {
        return $query->where('type', $type->value);
    }

    public function scopeByTier(Builder $query, int $tier): Builder
    {
        return $query->where('tier', $tier);
    }

    public function scopeForUser(Builder $query, User $user): Builder
    {
        return $query->where('user_id', $user->id);
    }
}
