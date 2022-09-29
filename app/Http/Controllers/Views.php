<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class Views extends Controller
{
    
    public function index(){
        return redirect("/airports");
    }

    public function airports(){
        return view("airports");
    }

    public function countries(){

        $countries = Countries::all();

        return view("countries", ['countries' => $countries]);
    }

    public function airlines(){
        return view("airlines");
    }

    public function add_airports(){
        return view("add_airports");
    }

    public function edit_airports(){
        return view("edit_airports");
    }

    public function remove_airlines(){
        return view("remove_airlines");
    }

    public function add_airlines(){
        return view("add_airlines");
    }

    public function delete_airports(){
        return view("delete_airports");
    }

    public function edit_countries(){
        

        return view("edit_countries");
    }

    public function delete_countries(){
        return view("delete_countries");
    }

    public function add_countries(){
        return view("add_countries");
    }

    public function edit_airlines(){
        return view("edit_airlines");
    }

    public function delete_airlines(){
        return view("delete_airlines");
    }

    public function create_airlines(){
        return view("create_airlines");
    }



}
