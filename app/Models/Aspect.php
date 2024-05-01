<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspect extends Model
{
    use HasFactory;

    protected $table = 'aspect';

    public function days() {
        return $this->belongsToMany(Day::class, 'teller_log', 'aspect_id', 'day_id');
    }
    
    public function colors() {
        return $this->belongsToMany(Color::class, 'teller_log', 'aspect_id', 'color_id');
    }
    
    
}
