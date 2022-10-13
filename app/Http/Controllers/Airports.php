<?php

namespace App\Http\Controllers;

use App\Models\Airports as ModelsAirports;
use Illuminate\Http\Request;

class Airports extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'countries_id' => 'required',
            'coords' => 'required'
        ]);

        $airport = ModelsAirports::create([
            'name' => $request->name,
            'countries_id' => $request->countries_id,
            'coords' => $request->coords
        ]);

        $airport->save();

        return redirect('/airports');
    }

    public function update(Request $request, $id) {
        
        $request->validate([
            'name' => 'required|min:3|max:40',
            'countries_id' => 'required',
            'coords' => 'required'
        ]);

        $airport = ModelsAirports::find($id);

        $airport->name          = $request->name;
        $airport->countries_id  = $request->countries_id;
        $airport->coords        = $request->coords;
        
        $airport->save();

        return redirect('/airports');
    }

    public function delete($id) {
        
        $airport = ModelsAirports::find($id);
        
        $airport->delete();
        
        return redirect('/airports');
    }
}
