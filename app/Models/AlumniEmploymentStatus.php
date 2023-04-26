<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniEmploymentStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'employed',
        'self-employed',
        'unemployed',
        'created_at',
        'updated_at'
    ];
}
