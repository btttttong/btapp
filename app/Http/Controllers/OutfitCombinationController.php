<?php

namespace App\Http\Controllers;

use App\Models\Combination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Occasion;

class outfitCombinationController extends Controller
{
    public function index()
    {
        // $occasionId = $request->input('occasion_id');
        $today = date('l');
        $day_id = DB::table('day')
        ->where('day', $today)
        ->select('id')
        ->first();

        // A combination
        // $outfit = Combination::latest()->with('top', 'bottom', 'shoe')->first();
        $outfit = DB::table('outfit as o')
            ->join('occasion as o2', 'o.ocation_id', '=', 'o2.id')
            ->join('color as c', 'o.color_id', '=', 'c.id')
            ->join('category as c2', 'o.type_id', '=', 'c2.id')
            ->select('o.id', 'c2.category_name as type_name', 'o.image_url', 'c.name as color_name', 'o2.event_name')
            ->whereIn('o.color_id', function($query) use ($day_id) {
                $query->select('color_id')
                    ->from('teller_log')
                    ->where('day_id', $day_id->id)
                    ->where('aspect_id', 2);
            })
            ->where('o.ocation_id', 1)
            ->where('o.user_id', 1)
            ->where(function ($query) {
                $query->where('c2.category_name', 'Top')
                      ->orWhere('c2.category_name', 'Bottom')
                      ->orWhere('c2.category_name', 'Shoe');
            })
            ->orderByRaw('RANDOM()') // Use RAND() for MySQL
            ->get();

            
        $outfit = collect(json_decode($outfit));

        
        $occasions = Occasion::all();
        

    // Grouping by type_name for easier access in the view
        $groupedOutfits = $outfit->groupBy('type_name')->map(function ($items) {
            return $items->first();  // Assuming you only want one of each type for display
        });

    return view('user.outfitCombination.index',compact('groupedOutfits', 'occasions') );

        // return view('user.outfitCombination.index', ['outfit' => $outfit]);


    }
}
