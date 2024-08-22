<?php
// app/Models/Request.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbacksRequest extends Model
{
    use HasFactory;

    protected $fillable = ['user', 'feedbacks_category', 'subject',  'description', 'status_id', 'response_status', 'date', 'documents', 'address_id', 'address_description', 'address_insidedoor', 'address_outdoor', 'address_street', 'address_neighbourhood', 'address_city', 'address_province', 'address_country', 'address_postal_code'];

    protected $casts = [
        'documents' => 'array',
    ];

    // İlişkiler
    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }

    public function feedbacks_category()
    {
        return $this->belongsTo(FeedbacksCategory::class, 'feedbacks_category');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender');
    }
}
