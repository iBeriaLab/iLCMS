<?php

namespace App\Http\Controllers;

use App\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function post(Request $request){
        $country = new Countries();
        $country->name = $request->input('name');
        $country->dial_code = $request->input('dial_code');
        $country->code = $request->input('code');
        $country->save();
        return response()->json(['country' => $country,'user' => $user], 201);
    }

    public function get(){
        $countries = Countries::all();

        return response()->json($countries, 200);
    }

    public function put(Request $request, $id){
        $country = Countries::find($id);
        if(!$country){
            return response()->json(['message' => 'Country not found'], 404);
        }
        $country->name = $request->input('name');
        $country->dial_code = $request->input('dial_code');
        $country->code = $request->input('code');
        $country->save();
        return response()->json(['country' => $country], 200);
    }

    public function delete($id){
        $country = Countries::find($id);
        $country->delete();
        return response()->json(['message' => 'Country Deleted'], 200);
    }

    public function getCountries()
    {
        #input url
        //$url = url('/api/v0.1/countries');
        //$countries = file_get_contents($url);json_decode($countries, true)]

        $countries = Countries::paginate(20);

        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('admin.countries.index', ['countries' => $countries]);
    }



    public function getCountry($id)
    {

        $country = Countries::findOrfail($id);

        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('admin.countries.show', ['country' => $country]);
    }

    public function getCapitals()
    {
        #input url
        //$url = url('/api/v0.1/countries');
        //$countries = file_get_contents($url);json_decode($countries, true)
        $countries = Countries::paginate(20);
        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('admin.countries.cities.index', ['countries' => $countries]);
    }

    public function getCapital($capitalname)
    {

        //$country = Countries::findOrfail($id);

        $country = Countries::where('capitalname',$capitalname) -> first();

        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('admin.countries.cities.show', ['country' => $country]);
    }


    public function getContinents()
    {
        #input url
        //$url = url('/api/v0.1/countries');
        //$countries = file_get_contents($url);

        $countries = Countries::orderBy('continentname','desc')->get();

        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('admin.countries.continents.index', ['countries' => $countries]);
    }


    /**
     * @param $capitalname
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCityWeather($capitalname){

        $url = "https://api.apixu.com/v1/forecast.json?key=84ffda9466d14102837150237172507&q=" .  $capitalname;

        $weather = json_decode(file_get_contents($url), true);

        return view('app.countries.wheater', ['weather' => $weather]);
        //dd($weather);
    }


}
