<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;




    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission');
    }

    // İlişkiler
    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tc_identity',
        'firstname',
        'lastname',
        'name',
        'email',
        'password',
        'big_avatar',
        'normal_avatar',
        'min_avatar',
        'big_banner',
        'normal_banner',
        'min_banner',
        'phonenumber',
        'permission',
        'gender',
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
}
