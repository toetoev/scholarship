<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Scholarship;
use App\University;
use App\Enrollment;
use App\Report;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
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
		$details =	DB::table('reports')
					->join('enrollments', 'enrollments.id', '=', 'reports.enrollment_id')
					->join('scholarships', 'scholarships.id', '=', 'reports.scholar_id')
					->join('users', 'users.id', '=', 'enrollments.user_id')
					->join('universities', 'universities.id', '=', 'scholarships.university_id')
					->join('majors', 'majors.id', '=', 'scholarships.major_id')
					->join('countries', 'countries.id', '=', 'enrollments.country_id')
					->join('grades', 'grades.id', '=', 'enrollments.grade_id')
					->select('enrollments.*', 'scholarships.description as description', 'universities.name as uname', 'users.email as mail', 'users.name as username')
					->get();
       				
       				return view('report', compact('details'));

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
    	$report = Report::find($id);
        
                $detail =	DB::table('reports')
					->join('enrollments', 'enrollments.id', '=', 'reports.enrollment_id')
					->join('scholarships', 'scholarships.id', '=', 'reports.scholar_id')
					->join('users', 'users.id', '=', 'enrollments.user_id')
					->join('universities', 'universities.id', '=', 'scholarships.university_id')
					->join('majors', 'majors.id', '=', 'scholarships.major_id')
					->join('countries', 'countries.id', '=', 'enrollments.country_id')
					->join('grades', 'grades.id', '=', 'enrollments.grade_id')
					->select('reports.*', 'scholarships.description as description', 'universities.name as uname', 'users.email as mail', 'enrollments.name as username', 'enrollments.*', 'enrollments.name as username', 'enrollments.photo as userphoto', 'enrollments.attachment as userattach')
					->where('reports.id', '=', $id)
					->first();
        return view('reportdetail', compact('detail'));
       
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
        return 'hello';
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
