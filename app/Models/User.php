<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Point ;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasUlids ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phone',
        'type',
        'status'
    ];

    public function points(){
        return $this -> hasMany( Point::class );
    }

    public function visits(){
        return $this -> hasMany( Visit::class );
    }

    public function links(){
        return $this -> hasMany( Link::class );
    }

    public function views(){
        return $this -> hasMany( View::class );
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

     public $timestamps = true;
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
        'phone_verified_at' => 'datetime',
        'password' => 'hashed',
     ];
}
