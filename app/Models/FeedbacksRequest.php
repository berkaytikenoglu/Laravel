<?php
// app/Models/Request.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbacksRequest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'subject',  'description', 'status_id', 'response_status', 'date', 'documents', 'address_id'];

    protected $casts = [
        'documents' => 'array',
    ];

    // İlişkiler
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(FeedbacksCategory::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
