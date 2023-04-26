<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniStudentInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'astudent_id',
        'asex',
        'abirthdate',
        'acivilstatus',
        'acaddress',
        'apaddress',
        'amobile',
        'afb',
        'adegree_id',
        'ayearbatch',
        'created_at',
        'updated_at'
    ];
}
