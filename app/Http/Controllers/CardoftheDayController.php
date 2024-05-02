<?php

namespace App\Http\Controllers;
use App\Models\Card;
use Illuminate\Http\Request;

class CardoftheDayController extends Controller
{
    public function index()
    {
        // A combination
        $card = Card::inRandomOrder()->first();
        return view('card.show', compact('card'));
    }
}
