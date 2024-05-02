<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Outfit;

class OutfitManagementController extends Controller
{
    public function index()
    {
        $outfits = Outfit::paginate(10);
        

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
}
