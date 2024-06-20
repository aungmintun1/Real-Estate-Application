<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $casts = [
        'features' => 'array'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ListingImage::class);
    }

    public function savedByUsers()
    {
        return $this->belongsToMany(User::class, 'listing_user', 'listing_id', 'user_id')->withTimestamps();
    }
}
