<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';
    protected $primaryKey = 'feedback_id, feedback_cus, feedback_car';
    public $timestamps = false;
    protected $fillable =[
        'feedback_content',
        'feedback_rating',
        'feedback_date'
    ];
}
