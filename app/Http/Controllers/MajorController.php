<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Major;

class MajorController extends Controller
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
        $majors=Major::all();
        return view('major.index',compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('major.create');
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
            'major'=>'required|min:5',
          
        ]);
       
       
        //data save
        Major::create([
            'name'=>request('major'),
        ]);
        
        $majors = Major::all();
        return redirect()->route('major.index')->with('success','Major created successfully!');
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
        $major=Major::find($id);
        return view('major.edit',compact('major')); 
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
            'major'=>'required|min:5'
        ]);
      
        $major=Major::find($id);
        $major->name=request('major');
        $major->save();

        return redirect()->route('major.index',$id)->with('success','major updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $major=Major::find($id);
        $major->delete();
        return redirect()->route('major.index')->with('danger','major deleted successfully!');
    }
}
