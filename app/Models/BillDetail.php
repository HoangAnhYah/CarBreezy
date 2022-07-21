<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    use HasFactory;
    protected $table = 'bill_detail';
    protected $primaryKey = 'bill_id, car_id';
    public $timestamps = false;
    protected $fillable =[
        'bill_quantity',
        'bill_total_payment',
        'bill_status'
    ];
}
