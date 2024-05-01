<?php

namespace App\Http\Controllers;

use App\Models\Combination;
use Illuminate\Http\Request;

class outfitCombination extends Controller
{
    public function index()
    {
        // A combination
        $outfit = Combination::latest()->with('top', 'bottom', 'shoe')->first();

        return view('home', ['outfit' => $outfit]);
    }
}
