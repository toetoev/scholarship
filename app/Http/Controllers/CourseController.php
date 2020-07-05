<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use App\University;
use App\Grade;
use App\Major;
use App\Country;
use App\Region;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //$scholars = Scholarship::all();
        $scholars = DB::table('scholarships')
                    ->join('universities','universities.id','=','scholarships.university_id')
                     ->join('majors','majors.id','=','scholarships.major_id')
                     ->select('scholarships.*','universities.name as uname','majors.name as mname')
                    ->get();

        return view('frontend.course', compact('scholars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = $id;
        $details = DB::table('scholarships')
                    ->join('universities','universities.id','=','scholarships.university_id')
                    ->join('majors','majors.id','=','scholarships.major_id')
                    ->join('grades','grades.id','=','scholarships.grade_id')
                    ->join('countries','countries.id','=','universities.country_id')
                    ->join('regions','regions.id','=','universities.region_id')
                    ->select('scholarships.*','universities.name as uname','majors.name as mname','grades.grade', 'countries.name as cname', 'regions.region as rname', 'universities.site_url as ulink', 'universities.email as umail', 'universities.phone as uphone', 'universities.address', 'universities.attachment')

                    ->where('scholarships.id','=',$id) 
                    ->get();  

        return view('frontend.coursedetail', compact('details'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
