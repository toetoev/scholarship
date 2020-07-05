<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\University;
use App\Region;
use App\Country;

class UniversityController extends Controller
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
        
        $universities=University::all();
        return view('university.index',compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        $countries = Country::all();
        return view('university.create',compact('regions', 'countries'));
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
           
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'site'=>'required',
            'logo'=>'required',
            'attach' => 'required'

        ]);

        if($request->hasfile('logo')){
            $image=$request->file('logo');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $logo='/image/'.$name;
        }

        if($request->hasfile('attach')){
            $doc=$request->file('attach');
            $name=$doc->getClientOriginalName();
            $doc->move(public_path().'/file/',$name);
            $attach='/file/'.$name;
        }

        University::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'address'=>request('address'),
            'phone'=>request('phone'),
            'site_url'=>request('site'),
            'country_id'=>request('country'),
            'region_id'=>request('region'),
            'logo'=>$logo,
            'attachment' => $attach

        ]);

        return redirect()->route('university.index')->with('success','University created successfully!');
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
        
        $university=University::find($id);
        $regions = Region::all();
        $countries = Country::all();
        return view('university.edit',compact('university', 'regions', 'countries'));
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
           
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'site'=>'required',
            'logo'=>'required',
            'attach' => 'required'
        ]);

        if($request->hasfile('logo')){
            $image=$request->file('logo');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $logo='/image/'.$name;
        }else{
            $logo=request('oldlogo');
        }

        if($request->hasfile('attach')){
            $doc=$request->file('attach');
            $name=$doc->getClientOriginalName();
            $doc->move(public_path().'/file/',$name);
            $attach='/file/'.$name;
        }else{
            $attach=request('oldattach');
        }


        $uni = University::find($id);
        $uni->name = request('name');
        $uni->email = request('email');
        $uni->address = request('address');
        $uni->phone = request('phone');
        $uni->site_url = request('site');
        $uni->country_id = request('country');
        $uni->region_id = request('region');
        $uni->logo = $logo;
        $uni->attachment = $attach;
        $uni->save();
        //redirect
        return redirect()->route('university.index', $id)->with('success','University updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $university=University::find($id);
        $university->delete();

       /* $this->session->set_flashdata('success', 'Existing university is deleted in your data');
        return redirect()->route('university.index');*/

        $message = "University deleted successfully";
        return redirect()->route('university.index')->with('danger','University deleted successfully!');
    }
}
