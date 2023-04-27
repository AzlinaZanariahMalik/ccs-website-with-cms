<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniEmploymentInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'astudent_id',
        'emp_status',
        'emp_type',
        'emp_orgname',
        'emp_jobrelated',
        'emp_nyearjob',
        'emp_placeofwork',
        'emp_firstjob',
        'emp_nyfirstjob',
        'emp_findfirstjob',
        'emp_income',
        'emp_unemp',
        'created_at',
        'updated_at'
    ];
}
