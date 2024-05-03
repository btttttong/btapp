<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'color';

    public function outfits()
{
    return $this->hasMany(Outfit::class, 'color_id');
}

    // public function color(){
    //     return $this->belongsToMany(Outfit::class);
    // }

    // public function days() {
    //     return $this->belongsToMany(Day::class, 'teller_log', 'color_id', 'day_id');
    // }
    
    // public function aspects() {
    //     return $this->belongsToMany(Aspect::class, 'teller_log', 'color_id', 'aspect_id');
    // }
    
}
