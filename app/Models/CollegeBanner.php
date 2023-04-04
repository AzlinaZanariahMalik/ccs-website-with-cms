<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_image',
        'banner_tagline',
        'created_at',
        'updated_at'
    ];
}
