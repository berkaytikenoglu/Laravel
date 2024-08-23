<?php
// app/Models/FeedbacksCategory.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbacksCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'color', 'icon'];

    // İlişkiler

    public function requests()
    {
        return $this->hasMany(FeedbacksRequest::class);
    }
}
