<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Occasion;

class OccasionController extends Controller
{
    public function index()
    {
        $occasion = Occasion::all();

        return view('components.occasion', ['occasion' => $occasion]);
    }

    public function show($id)
{
    $occasion = Occasion::find($id);

    if ($occasion) {
        return view('components.occasion', ['occasion' => $occasion]);
    } else {
        return redirect('/')->withErrors('Occasion not found!');
    }
}

}
