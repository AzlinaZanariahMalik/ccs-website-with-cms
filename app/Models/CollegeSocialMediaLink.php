<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeSocialMediaLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'college_fblink',
        'college_twitterlink',
    ];
}
