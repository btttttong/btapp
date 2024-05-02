<?php

namespace App\Http\Controllers;

use App\Models\Combination;
use Illuminate\Http\Request;

class outfitCombinationController extends Controller
{
    public function index()
    {
        // A combination
        $outfit = Combination::latest()->with('top', 'bottom', 'shoe')->first();

        return view('user.outfitCombination.index', ['outfit' => $outfit]);
    }
}
