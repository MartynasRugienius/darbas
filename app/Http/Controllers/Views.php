<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\Airports;
use App\Models\Countries;
use Illuminate\Http\Request;

class Views extends Controller
{
    
    public function index(){
        return redirect("/airports");
    }

    public function airports(){

        $airports = Airports::all();

        $countries = Countries::all();

        return view("airports", ['airports' => $airports, 'countries' => $countries]);
    }

    public function countries(){
        /**
         * Cia mes gaunam visus recordus is database
         * susijusius su countries
         */
        $countries = Countries::all();

        /**
         * Tada mes perduodam visa data kuria gavom i frontend pvz:
         * view(html file pavadinimas, ["pavadinimas kuri naudosim html file" => $variable kur yra tai])
         */
        return view("countries", ['countries' => $countries]);
    }

    public function airlines(){

        $airlines = Airlines::all();

        return view("airlines", ['airlines' => $airlines]);
    }

    public function add_airports(){

        $countries = Countries::all();
        $airlines = Airlines::all();

        return view("add_airports", ['countries' => $countries, 'airlines' => $airlines]);
    }

    public function edit_airports($id){

        $airports = Airports::find($id);
        $countries = Countries::all();
        return view("edit_airports", ['airports' => $airports, 'countries' => $countries]);
    }

    public function remove_airlines($id){

        $airport = Airports::find($id);

        return view("remove_airlines", ['id' => $id, 'airport' => $airport]);
    }

    public function add_airlines($id){

        $airlines = Airlines::all();

        $airports = Airports::all();

        return view("add_airlines", ['id' => $id, 'airlines' => $airlines, 'airports' => $airports]);
    }

    public function delete_airports($id){
        return view("delete_airports", ['id' => $id]);
    }

    public function edit_countries($id){
        /**
         * Paimam viena record is database pagal id kuri mes editinam
         */
        $country = Countries::find($id);
    
        /**
         * Grazinam data i frontend kuria mes turim
         */
        return view("edit_countries", ['country' => $country]);
    }

    public function delete_countries($id){
        return view("delete_countries", ['id' => $id]);
    }

    public function add_countries(){
        return view("add_countries");
    }

    public function edit_airlines($id){

        $airline = Airlines::find($id);
        $countries = Countries::all();
        return view("edit_airlines", ['airline' => $airline, 'countries' => $countries]);
    }

    public function delete_airlines($id){
        return view("delete_airlines", ['id' => $id]);
    }

    public function create_airlines(){
        $countries = Countries::all();

        return view("create_airlines", ['countries' => $countries]);
    }



}
