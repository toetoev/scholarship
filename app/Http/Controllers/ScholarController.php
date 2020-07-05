<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use App\Major;
use App\Grade;
use App\University;
use Illuminate\Support\Facades\DB;

class ScholarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin', ['except' =>['getforms']]);
    }
    
    public function index()
    {
        $scholars = Scholarship::all();
        return view('scholarship.index', compact('scholars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $majors = Major::all();
        $grades = Grade::all();
        $universities = University::all();
        return view('scholarship.create', compact('majors', 'grades', 'universities'));
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
           
            'description'=>'required',
            'eligibility'=>'required',
            'inclusion'=>'required',
            'deadline'=>'required',
            'logo'=>'required',
            'university' => 'required',
            'major' => 'required',
            'grade' => 'required'

        ]);

        if($request->hasfile('logo')){
            $image=$request->file('logo');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $logo='/image/'.$name;
        }

        Scholarship::create([
            'description'=>request('description'),
            'eligibility'=>request('eligibility'),
            'inclusion'=>request('inclusion'),
            'deadline'=>request('deadline'),
            'course_start' => request('t-start'),
            'course_end' => request('t-end'),
            'logo'=>$logo,
            'university_id'=>request('university'),
            'major_id'=>request('major'),
            'grade_id'=>request('grade')

        ]);

        return redirect()->route('scholar.index')->with('success','ScholarForm created successfully!');
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
        $scholar=Scholarship::find($id);
        $majors = Major::all();
        $grades = Grade::all();
        $universities = University::all();
        return view('scholarship.edit', compact('scholar','majors', 'grades', 'universities'));
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
           
            'description'=>'required',
            'eligibility'=>'required',
            'inclusion'=>'required',
            'logo'=>'required'
        ]);

        if($request->hasfile('logo')){
            $image=$request->file('logo');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $logo='/image/'.$name;
        }else{
            $logo=request('oldlogo');
        }

        $scholar = Scholarship::find($id);
        $scholar->description = request('description');
        $scholar->eligibility = request('eligibility');
        $scholar->inclusion = request('inclusion');
        $scholar->deadline = request('deadline');
        $scholar->course_start = request('t-start');
        $scholar->course_end = request('t-end');
        $scholar->logo = $logo;
        $scholar->university_id = request('university');
        $scholar->major_id = request('major');
        $scholar->grade_id = request('grade');
        $scholar->save();

        //redirect
        return redirect()->route('scholar.index', $id)->with('success','ScholarForm updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scholar=Scholarship::find($id);
        $scholar->delete();
        return redirect()->route('scholar.index')->with('danger','ScholarForm deleted successfully!');
    }

    public function getforms(Request $request)
    {
        $search = $request->search;
        //dd($search);
         $forms = DB::table('scholarships')
                    ->join('universities','universities.id','=','scholarships.university_id')
                     ->join('majors','majors.id','=','scholarships.major_id')
                     ->join('grades','grades.id','=','scholarships.grade_id')
                     ->select('scholarships.*','universities.name as uname','majors.name as mname','grades.grade')
                     ->where('universities.name','LIKE','%'.$search.'%')
                    ->orWhere('majors.name','LIKE','%'.$search.'%')
                    ->orWhere('grades.grade','LIKE','%'.$search.'%')
                    ->get();
                    
        return $forms;
    }
}
