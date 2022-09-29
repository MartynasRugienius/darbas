<?php

namespace App\Http\Controllers;

use App\Models\Countries as ModelsCountries;
use Illuminate\Http\Request;

class Countries extends Controller
{
    
    public function create(Request $request){
        $request->validate([
            'name'  => 'min:4|max:30|required',
            'ISO'   => 'min:3|max:3|required'
        ]);

        $country = ModelsCountries::create([
            'name'  => $request->name,
            'ISO'   => $request->ISO
        ]);

        $country->save();

        return redirect('/countries');
    }


}
