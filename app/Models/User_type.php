<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    //declare
    public function user(){
        return $this->hasMany(User::class);
    }

}
