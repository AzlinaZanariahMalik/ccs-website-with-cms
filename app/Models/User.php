<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'extend_name',
        'username',
        'email',
        'password', 
        'user_type',
        'rank',
        'designation',
        'title',
        'qualification',
        'publish_permission',
        'department_id',
        'profile',
        'status',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //get user type
    public function userType(){
        return $this->belongsTo(User_Type::class,'user_type','id');
    }

    //get picture
    public function getPictureAttribute($value){
        if($value){
            return asset('/images/user/'.$value);
        }else{
            //if empty display default picture
            return asset('/images/user/defaultprofileimg.jpg');
        }
    }

    //search method
    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('name','like', $term)
                  ->orwhere('email','like', $term);
                 
                 
        });
    }

}
