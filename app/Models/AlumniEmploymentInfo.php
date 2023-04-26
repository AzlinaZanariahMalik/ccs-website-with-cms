<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniEmploymentInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'astudent_id',
        'emptstatus_id',
        'emp_jobtype',
        'emp_type',
        'emp_orgname',
        'emp_classification',
        'emp_jobrelated',
        'emp_designation',
        'emp_nyearjob',
        'emp_placeofwork',
        'emp_firstjob',
        'emp_income',
        'emp_selfemp',
        'emp_unemp',
        'created_at',
        'updated_at'
    ];
}
