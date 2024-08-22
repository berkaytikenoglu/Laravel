<?php
// app/Models/Address.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['user', 'description', 'insidedoor', 'outdoor', 'street', 'neighbourhood', 'city', 'province', 'country', 'postal_code', 'status'];


    // İlişkiler
    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }
}
