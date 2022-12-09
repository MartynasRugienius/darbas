<?php

namespace App\Http\Controllers;

use App\Models\Skateboards;
use Illuminate\Http\Request;

class Views extends Controller
{

    public function index(){
        return redirect("/skateboards");
    }

    public function skateboards(){

        $skateboards = Skateboards::all();

        return view("skateboards", ['skateboards' => $skateboards]);
    }



    public function add_skateboards(){

        $skateboards = Skateboards::all();

        return view("add_skateboards", ['skateboards' => $skateboards]);
    }

    public function edit_skateboards($id){

        $skateboards = Skateboards::find($id);
        return view("edit_skateboards", ['skateboards' => $skateboards]);
    }

    public function delete_skateboards($id){
        return view("delete_skateboards", ['id' => $id]);
    }
}
