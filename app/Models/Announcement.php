<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = [
        'an_image',
        'an_title',
        'an_desc',
        'an_for',
        'an_user',
        'created_at',
        'updated_at'
    ];

    //get user 
    public function userName(){
        return $this->belongsTo(User::class,'an_user','id');
    }
}
