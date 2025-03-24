<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carousel extends Model
{
    use HasFactory;
    protected $table = 'home_carousel';

    protected $fillable = [
        'title',
        'image_path',
        'category',
        'user_id'
    ];

    // RELATION TO USER
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}