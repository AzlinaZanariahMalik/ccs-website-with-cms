<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'college_address',
        'college_email',
        'college_telephone',
        'college_mobile',
        'created_at',
        'updated_at',
    ];
}
