<?php

namespace App\Http\Controllers;

use App\Models\Airlines as ModelsAirlines;
use Illuminate\Http\Request;

class Airlines extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'countries_id' => 'required'
        ]);

        $airline = ModelsAirlines::create([
            'name' => $request->name,
            'countries_id' => $request->countries_id
        ]);
        
        $airline->save();

        return redirect('/airlines');
    }
}
