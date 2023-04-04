<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'news_title',
        'post',
        'status',
        'feature_image',
        'status',
        'created_at',
        'updated_at'
    ];

    //get user 
    public function userName(){
        return $this->belongsTo(User::class,'users','id');
    }
}
