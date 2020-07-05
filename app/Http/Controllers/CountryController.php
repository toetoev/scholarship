<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Region;
use App\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {

        $countries = Country::all();

        $region = DB::table('countries')
            ->join('regions', 'regions.id', '=', 'countries.region_id')
            ->select('countries.*', 'regions.region as cregion')
            //->where('regions.id','=','countries.region_id')
            ->get();
        //dd($region); die();
        //return view('frontend.coursedetail', compact('details'));

        return view('country.index', compact('countries')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        return view('country.create',compact('regions'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'country' => 'required|min:5',
          
        ]);


        $checkbox = $request->get('regions');

        Country::create([
           'name' => request('country'),
           'region_id' => implode(",",$checkbox)

        ]);

        return redirect()->route('country.index')->with('success','country created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::find($id);
        $regions_id = explode(",",$country->region_id);       
        $regions = Region::all();
        return view('country.edit', compact('country', 'regions','regions_id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'country' => 'required|min:5',
        ]);

        $checkbox = $request->get('regions');       
        
        //data update
        $country = Country::find($id);
        $country->name = request('country');
        $country->region_id = implode(",",$checkbox);
        $country->save();
        //redirect
        return redirect()->route('country.index', $id)->with('success','country updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect()->route('country.index')->with('danger','country deleted successfully!');
    }

    public function getregions(Request $request)
    {
        $country = $request->country;
        $countries = DB::table('countries')
        ->where('countries.id','=',$country)
        ->get();

        $region_ids = $countries[0]->region_id;
            //dd($region_ids);
        $regoinarrays = explode(',', $region_ids);
        $count = count($regoinarrays);
            // dd($regoinarrays);
        $array =  array();
        for ($i=0; $i < $count; $i++) { 
            $region_id = $regoinarrays[$i];
                //dd($region_id);
            $region= DB::table('regions')
            ->where('regions.id','=',$region_id)
            ->get();
                     //dd($region);
            $id = $region[0]->id;
            $name = $region[0]->region;
                // array_push($array,$name);
            $array[$id] = $name;

        }

       // dd($array); die();
        return $array;
    }
}
