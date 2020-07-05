<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollment;
use App\University;
use App\Country;
use App\Grade;
use App\User;
use Mail;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\DB;
use Session;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('frontend.enrollment');

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

    public function sendemail(Request $id){
        $data = DB::table('enrollments')
                ->join('universities', 'universities.id', '=', 'enrollments.university_id')
                ->select('enrollments.name', 'enrollments.DOB','enrollments.gender', 'enrollments.phone','enrollments.english', 'universities.email as uemail')
                ->get();
        $email = $data[0]->uemail;
        
        $country =  DB::table('enrollments')
                    ->join('countries', 'countries.id', '=', 'enrollments.country_id')
                    ->select('countries.name')
                    ->get();

        $citizen =  DB::table('enrollments')
                    ->join('countries', 'countries.id', '=', 'enrollments.citizen_id')
                    ->select('countries.name')
                    ->get();

       /* $
        = DB::table('enrollments')
            ->join('grades', 'grades.id', '=', 'enrollments.grade_id')
            ->select('grades.grade')
            ->where('grades.id','=','enrollment.grade_id')
            ->get();
    dd($grade);die();*/
        
        

        Mail::to($email)->send(new SendEmail($data, $country, $citizen));
        Session::flash('success');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
