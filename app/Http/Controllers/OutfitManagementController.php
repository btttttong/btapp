<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Outfit;
use App\Models\Color;
use App\Models\Occasion;
use App\Models\Category;

class OutfitManagementController extends Controller
{
    public function index()
    {
        $outfits = Outfit::paginate(20);
        

        return view('outfit.index', ['outfits' => $outfits]);
    }

    public function edit($id){
        $outfit = Outfit::find($id);
        $colors = Color::all();
        $occasions = Occasion::all();

        return view('outfit.edit', compact('outfit', 'colors', 'occasions'));
    }


    public function update($id, Request $request)
    {
        // get data from request
        $outfit = Outfit::find($id);

        $outfit->color_id = $request->color_id;
        $outfit->type_id = $request->type;
        $outfit->ocation_id = $request->ocation_id;
        $outfit->image_url = $request->image_url;

        $outfit->save();
        
        return redirect("/outfitmanagement");
    }

    public function destroy($id)
    {
        $outfit = Outfit::findOrFail($id);
        $outfit->delete();

        return redirect('/outfitmanagement')->with('success', 'Outfit deleted successfully');
    }

    public function create()
    {
        $colors = Color::all();
        $occasions = Occasion::all();
        $types = Category::all();
        return view('outfit.create', compact('colors', 'occasions', 'types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|integer',
            'image_url' => 'required|string',
            'color_id' => 'required|integer',
            'ocation_id' => 'required|integer',
        ]);

        $outfit = new Outfit();
        $outfit->type_id = $request->type;
        $outfit->image_url = $request->image_url;
        $outfit->color_id = $request->color_id;
        $outfit->ocation_id = $request->ocation_id;
        $outfit->user_id = 1;
        $outfit->save();

        return redirect()->route('outfits.index')->with('success', 'Outfit created successfully.');
    }
}
