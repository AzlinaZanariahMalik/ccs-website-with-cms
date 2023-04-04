<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'dept_name',
        'dept_desc',
        'dept_image',
        'dept_link',
        'created_at',
        'updated_at'
    ];
}
