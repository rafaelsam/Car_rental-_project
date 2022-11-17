<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'carName',
        'MakeCompany',
        'price',
        'stockId',
        'EngineType',
        'ProductionYear',
        'color',
        'seat',
        'door',
        'bodyType',
        'Dimension',
        'mileage',
        'chasis',
        'drive',
        'office',
        'transmission',
        'EngineCapacity',
        'steering',
        'weight',
        'fuel',
        'airbag',
        'p_steering',
        'p_window',
        'radio',
        'cd_player',
        'back_camera',
        'power_seat',
        'back_tire',
        'grill_guard',
        'wheel_sp',
        'push_start',
        'fog_light',
        'P_mirror',
        'sp_tire',
        'side_airbag',
        'navigation',
        'a_c',
        'sun_roof',
        'leather_seat',
        'alloy_wh',
        'jack',
        'body_kit',
        'cover_p'

    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    
}
