<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\University;
use App\Grade;
use App\Enrollment;
use App\Scholarship;
use App\Report;
use Mail;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\DB;
use Session;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('user');
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'dob'=>'required',
            'phone'=>'required',
            'photo'=>'required',
            'attach' => 'required'

        ]);

        if($request->hasfile('photo')){
            $image=$request->file('photo');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $photo='/image/'.$name;
        }

        if($request->hasfile('attach')){
            $doc=$request->file('attach');
            $name=$doc->getClientOriginalName();
            $doc->move(public_path().'/file/',$name);
            $attach='/file/'.$name;
        }

        $enrollment = Enrollment::create([
            'name'=>request('name'),
            'DOB'=>request('dob'),
            'gender'=>request('gender'),
            'phone'=>request('phone'),
            'country_id'=>request('country'),
            'citizen_id'=>request('citizen'),
            'university_id'=>request('university'),
            'grade_id'=>request('grade'),
            'user_id' => 1,
            'english' => request('level'),
            'photo'=>$photo,
            'attachment' => $attach

        ]);

        $enrollment_id = $enrollment->id;

        Report::create([
            'enrollment_id' => $enrollment_id,
            'scholar_id' => request('scholarid')
        ]);

          $name = request('name');
          $DOB=request('dob');
          $gender=request('gender');
          $phone=request('phone');
          $country_id=request('country');
          $citizen_id=request('citizen');
          $university_id=request('university');
          $grade_id=request('grade');
          $user_id = 1;
          $english = request('level');
          $photo=$photo;
          $attachment =$attach;

          $report = DB::table('reports')
                ->join('enrollments','enrollments.id','=','reports.enrollment_id')
                ->join('scholarships','scholarships.id','=','reports.scholar_id')
                ->join('users','users.id','=','enrollments.user_id')
                ->join('universities','universities.id','=','scholarships.university_id')
                ->join('majors','majors.id','=','scholarships.major_id')
                ->join('countries','countries.id','=','enrollments.country_id')
                ->join('grades','grades.id','=','enrollments.grade_id')
                ->where('reports.enrollment_id','=',$enrollment_id)
                ->select('enrollments.*','scholarships.description as description','universities.name as uname','universities.email as email','majors.name as mname','countries.name as cname','grades.grade as grade')
                ->get();
                //dd($report);
                $email = $report[0]->email;



        Mail::to($email)->send(new SendEmail($report));
        Session::flash('success');
        return back();

        return redirect()->route('frontend.home');
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
        // dd($id);
        $detail=$id;
        $grades = Grade::all();
        $countries = Country::all();
        $universities = University::all();
        //$detail=Scholarship::all();
        
        return view('frontend.enrollment',compact('grades', 'countries', 'universities','detail'));
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
