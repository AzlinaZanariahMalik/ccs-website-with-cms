<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_name',
        'program_abbv',
        'program_desc',
        'program_type',
        'created_at',
        'updated_at'
    ];
}
