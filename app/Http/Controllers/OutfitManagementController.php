<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Outfit;

class OutfitManagementController extends Controller
{
    public function index()
    {
        $outfits = Outfit::paginate(20);
        

        return view('outfit.index', ['outfits' => $outfits]);
    }

    public function edit($id){
        $outfit = Outfit::find($id);
        return view('outfit.edit', ['outfit'=> $outfit]);
    }


    public function update($id, Request $request)
    {
        // get data from request
        $outfit = Outfit::find($id);

        $outfit->color = $request->color;
        $outfit->type = $request->type;
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
        return view('outfit.create');
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
