<?php
// app/Models/Message.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['feedbacks_request_id', 'user_id', 'content', 'view_status'];

    // İlişkiler
    public function request()
    {
        return $this->belongsTo(FeedbacksRequest::class, 'request_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
