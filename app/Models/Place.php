<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
    
    public function place_images()
    {
        return $this->hasMany(Place_image::class);
    }
    
    public function accommodations()
    {
        return $this->belongsToMany(Accommodation::class);
    }
}
