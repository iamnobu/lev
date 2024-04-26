<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_image extends Model
{
    use HasFactory;
    
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
