<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function accommodation_images()
    {
        return $this->hasMany(Accommodation_image::class);
    }
    
    public function places()
    {
        return $this->belongsToMany(Place::class);
    }
}
