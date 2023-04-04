<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website_setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_name',
        'website_abbv_name',
        'website_logo',
        'website_icon',
    ];

   
}
 