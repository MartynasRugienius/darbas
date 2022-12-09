<?php

namespace App\Http\Controllers;

use App\Models\Skateboards as ModelsSkateboards;
use Illuminate\Http\Request;

class Skateboards extends Controller
{
    public function create(Request $request) {
        try {
            $request->validate([
                'name' => 'required|min:3|max:40',
                'image' => 'required',
                'description' => 'required|min:3|max:100'
            ]);

            $skateboard = ModelsSkateboards::create([
                'name' => $request->name,
                'image' => $request->image,
                'description' => $request->description
            ]);

            $skateboard->save();

            return redirect('/skateboards');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function update(Request $request, $id) {

        $request->validate([
            'name' => 'required|min:3|max:40',
            'image' => 'required',
            'description' => 'required|min:3|max:100'
        ]);

        $skateboard = ModelsSkateboards::find($id);

        $skateboard->name          = $request->name;
        $skateboard->image         = $request->image;
        $skateboard->description   = $request->description;

        $skateboard->save();

        return redirect('/skateboards');
    }

    public function delete($id) {

        $skateboard = ModelsSkateboards::find($id);

        $skateboard->delete();

        return redirect('/skateboards');
    }

}
