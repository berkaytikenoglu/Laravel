<?php
// app/Models/FeedbacksCategory.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbacksCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // İlişkiler
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
