<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeGoogleMapLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'college_googlemap',
    ];
}
