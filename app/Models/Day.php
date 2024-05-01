<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $table = 'day';

    public function aspects() {
        return $this->belongsToMany(Aspect::class, 'teller_log', 'day_id', 'aspect_id');
    }
    
    public function colors() {
        return $this->belongsToMany(Color::class, 'teller_log', 'day_id', 'color_id');
    }
    
}
