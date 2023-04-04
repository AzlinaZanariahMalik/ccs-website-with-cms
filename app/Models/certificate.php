<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    use HasFactory;
    protected $fillable = [    
        'cert_image',
        'created_at',
        'updated_at'
    ];
}
