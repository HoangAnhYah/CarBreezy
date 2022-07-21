<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer_account';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;
    protected $fillable =[
        'customer_name',
        'customer_email',
        'customer_contact',
        'customer_pwd',
        'customer_img_name',
        'customer_address',
        'customer_point',
        'gender_type'
    ];
}
