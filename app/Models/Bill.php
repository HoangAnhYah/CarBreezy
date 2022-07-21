<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bill';
    protected $primaryKey = 'bill_id';
    public $timestamps = false;
    protected $fillable =[
        'bill_date',
        'bill_total',
    ];
}
