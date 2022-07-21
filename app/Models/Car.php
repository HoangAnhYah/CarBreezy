<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'car';
    protected $primaryKey = 'car_id';
    public $timestamps = false;
    protected $fillable =[
        'car_name',
        'car_company',
        'car_model',
        'car_price_in',
        'car_price_out',
        'car_type',
        'car_img_name',
        'car_engine',
        'car_fuel_type',
        'car_weight',
        'car_color',
        'car_gear',
        'car_drive_system',
        'car_brake',
        'car_cylinder_capacity',
        'car_hp',
        'car_content',
        'car_manufacturer_year',
        'car_emission_level'
    ];
}
