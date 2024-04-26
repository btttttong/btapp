<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    use HasFactory;

    protected $table = 'occasion';

    public function outfits(){
        return $this->belongsToMany(Outfit::class);
    }
}
