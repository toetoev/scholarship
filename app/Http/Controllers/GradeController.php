<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;

class GradeController extends Controller
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
        $grades = Grade::all();
        return view('grade.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grade.create');
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
            'grade' => 'required|min:5',
        ]);

        Grade::create([
            'grade' => request('grade')
        ]);

        //return redirect
        $grades = Grade::all();
        return redirect()->route('grade.index')->with('success','Grade created successfully!');
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
        $grade = Grade::find($id);
        return view('grade.edit', compact('grade'));
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
            'grade' => 'required|min:5'
        ]);
        
        //data update
        $grade = Grade::find($id);
        $grade->grade = request('grade');
        $grade->save();
        //redirect
        return redirect()->route('grade.index', $id)->with('success','Grade updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::find($id);
        $grade->delete();                                                        
        return redirect()->route('grade.index')->with('danger','Grade deleted successfully!');;
    }
}
