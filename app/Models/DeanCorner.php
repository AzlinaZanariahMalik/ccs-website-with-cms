<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeanCorner extends Model
{
    use HasFactory;

    protected $fillable = [
        'dean_image',
        'dean_title',
        'dean_desc',
        'created_at',
        'updated_at'
    ];
}
  