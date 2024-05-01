<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TellerLog extends Model
{
    use HasFactory;
    protected $table = 'teller_log';

    public function day() {
        return $this->belongsTo(Day::class, 'day_id');
    }
    
    public function aspect() {
        return $this->belongsTo(Aspect::class, 'aspect_id');
    }
    
    public function color() {
        return $this->belongsTo(Color::class, 'color_id');
    }
    
}
