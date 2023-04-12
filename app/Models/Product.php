<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'manufacture_id',
        'model_id',
        'body_type_id',
        'transmission_id',
        'fuel_type_id',
        'drive_system_id',
        'chassis_id',
        'enginecc_id',
        'door_id',
        'seating_capacity_id',
        'gear_id',
        'package_id',
        'company_id',
        'status',
    ];
    protected $with = ['fueltype', 'bodytype', 'drivesystem', 'manufacture', 'model', 'chasis', 'enginecc', 'seat'];

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class, 'manufacture_id', 'id');
    }
    public function model()
    {
        return $this->belongsTo(VehicleModel::class, 'model_id', 'id');
    }
    public function chasis()
    {
        return $this->belongsTo(VehicleChassisCode::class, 'chassis_id', 'id');
    }
    public function enginecc()
    {
        return $this->belongsTo(DisplacementEngine::class, 'enginecc_id', 'id');
    }
    public function seat()
    {
        return $this->belongsTo(SeatingCapacity::class, 'seating_capacity_id', 'id');
    }
    public function transmission()
    {
        return $this->belongsTo(Transmission::class, 'transmission_id', 'id');
    }
    public function fueltype()
    {
        return $this->belongsTo(FuelType::class, 'fuel_type_id', 'id');
    }
    public function bodytype()
    {
        return $this->belongsTo(BodyType::class, 'body_type_id', 'id');
    }
    public function drivesystem()
    {
        return $this->belongsTo(DriveSystem::class, 'drive_system_id', 'id');
    }
    public function gear()
    {
        return $this->belongsTo(Gear::class, 'gear_id', 'id');
    }
    public function package()
    {
        return $this->belongsTo(PackageTrimVariant::class, 'package_id', 'id');
    }


    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {

            $query->where('name', 'like', $term)
                // ->orWhere('millage', 'like', $term)
                ->orWhereHas('bodytype', function ($query) use ($term) {
                    $query->where('type_name', 'like', $term);
                })
                ->orWhereHas('fueltype', function ($query) use ($term) {
                    $query->where('fuel_type', 'like', $term);
                })
                ->orWhereHas('model', function ($query) use ($term) {
                    $query->where('name', 'like', $term);
                })
                ->orWhereHas('chasis', function ($query) use ($term) {
                    $query->where('chassis_code', 'like', $term);
                })
                ->orWhereHas('manufacture', function ($query) use ($term) {
                    $query->where('name', 'like', $term);
                });
        });
    }
}
