<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vision_mission extends Model
{
    use HasFactory;
    protected $fillable = [
        'vision',
        'mission',
        'updated_at'
    ];
}
