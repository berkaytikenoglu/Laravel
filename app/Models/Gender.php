<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'color'];
    // İlişkiler
    public function users()
    {
        return $this->hasMany(User::class, 'user');
    }
}
