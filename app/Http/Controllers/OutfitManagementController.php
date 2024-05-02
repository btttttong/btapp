<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outfit;

class OutfitManagementController extends Controller
{
    public function index()
    {
        $outfits = Outfit::all();

        return view('outfit.index', ['outfits' => $outfits]);
    }
}
