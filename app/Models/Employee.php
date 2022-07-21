<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $primaryKey = 'emp_id';
    public $timestamps = false;
    protected $fillable =[
        'emp_name',
        'emp_contact',
        'emp_salary',
        'emp_email'
    ];
}
