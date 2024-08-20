<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'unique_id',
        'filename',
        'size',
        'uploaded_at',
        'owner_id',
        'type',
    ];

    protected $dates = [
        'uploaded_at',
    ];

    // Eğer documents tablosunda owner_id bir kullanıcının ID'sini temsil ediyorsa,
    // ve kullanıcı modeli User ise, ilişkiyi tanımlayabilirsiniz.
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
