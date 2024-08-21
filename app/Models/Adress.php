<?php
// app/Models/Address.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['street', 'address_user', 'city', 'state', 'country', 'postal_code'];

    // İlişkiler
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
