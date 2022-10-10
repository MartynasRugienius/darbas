<?php

namespace App\Http\Controllers;

use App\Models\Countries as ModelsCountries;
use Illuminate\Http\Request;

class Countries extends Controller
{
    
    public function create(Request $request){ 
        /**
         * Sitam $request->validate tikrinam ar data kuri yra formoje yra
         * teisinga. Visi pavadinimai tai kaip pvz: name, ISO turi buti
         * tokie patys kaip ir HTML file input name pvz: name="ISO"
         * 
         * Stringe (kitoje puseje rasai kokie yra requiraments) pvz: 
         * min: 5 - maziausiai irasytu simboliu skaicius
         * max: 10 - didziausias irasytu simboliu skaicius ir t.t 
         */

        $request->validate([
            'name'  => 'required|min:4|max:25',
            'ISO'   => 'required|min:3|max:3'
        ]);

        /**
         * Darai nauja variable $country ar kitu pavadinimu
         * Tada padarai ModelPavadinimas::create([
         *      cia rasai ka prideti
         *      'pavadinimas ka prideti' => $request->pavadinimas
         *      pvz apacioje
         * ])
         */

        $country = ModelsCountries::create([
            'name'  => $request->name,
            'ISO'   => $request->ISO
        ]);

        /**
         * Tada kai jau nori prideti nauja record i database tada rasai $pavadinimas->save();
         */

        $country->save();

        /**
         * Tada kai uzsavini galime pernesti user i kita page kur tik nori
         * Reikia rasyta return redirect('ir rasai get routa')
         */

        return redirect('/countries');
    }

    public function update(Request $request, $id){
        /**
         * Vel validatinam data ar teisinga formoje
        */

        $request->validate([
            'name'  => 'required|min:4|max:25',
            'ISO'   => 'required|min:3|max:3'
        ]);
        
        /**
         * Tada surandam ta recorda koki norim pagal id
         * id turetu buti siuo atveju route, jei nebutu parasytas id virsuje
         * tada imtume id is request
         * Route pvz: http://localhost:8000/countries/update/1
         * tas vienas ir bus musu id
         */

        $country = ModelsCountries::find($id);

        /**
         * Tada updatinam visus parametrus kuriuos pakeite
         * Jei nepakeite tada jie nepasikeis
         */

        $country->name  = $request->name;   
        $country->ISO   = $request->ISO;

        /**
         * Tada uzsavinam ka mes pakeitem
         */
        $country->save();

        /**
         * Perkeliam useri i kita page kur reikia
         */
        return redirect('/countries');
    }
    
    public function delete($id){
        /**
         * Vel pagal id mes susirandam recorda
         */
        $country = ModelsCountries::find($id);

        /**
         * Ir istrinam recorda 
         */

        $country->delete();

        /**
         * Redirektinam useri atgal kur reikia
         */

        return redirect('/countries');
    }
    
}
