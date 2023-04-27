<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniSurvey extends Model
{
    use HasFactory;
    protected $fillable = [
        'astudent_id',
        'surv_exp',
        'surv_comment',
        'surv_suggestion',
        'display',
        'created_at',
        'updated_at'
    ];
}
