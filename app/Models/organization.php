<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'org_name',
        'org_desc',
        'org_image',
        'org_link',
        'created_at',
        'updated_at'
    ];
}
