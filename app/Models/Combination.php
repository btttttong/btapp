<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    use HasFactory;
    protected $table = 'outfitCombination';

    public function top(){
        return $this->hasOne(Outfit::class, 'id', 'top_id');
    }

    public function bottom(){
        return $this->hasOne(Outfit::class, 'id', 'bottom_id');
    }

    public function shoe(){
        return $this->hasOne(Outfit::class, 'id', 'shoe_id');
    }

}
