<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;

    protected $table = 'outfit';

    public function occasions(){
        return $this->belongsToMany(Occasion::class);
    }

    public function color()
{
    return $this->belongsTo(Color::class, 'color_id');
}


}
