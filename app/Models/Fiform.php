<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiform extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'ffile',
        'created_at',
        'updated_at'
    ];
}
