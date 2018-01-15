<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class trackingController extends Controller
{






    
public function coursesTraking(Request $request){
     
 $this->validate($request,[
        'session'=> 'required',
        'semester'=> 'required'
    ]);
 
 

 $result = DB::table('courses')
->select('courses.courseCode', 'courses.courseTitle', 'u1.name as int_name', 'u2.name as ext_name')
->join('teachers_courses','courses.id','=','teachers_courses.course_id')
->join('users as u2','u2.id','=','teachers_courses.external_id', 'left outer')
->leftjoin('users as u1','u1.id','=','teachers_courses.internal_id')
->where('session',$request->input('session'))->where('semester',$request->input('semester'))
->get();

// var_dump($result);

return view('layouts.courseTracking',compact('result'));




/*
 $result = DB::table('courses')
->select('sessions_semesters_courses.session', 'sessions_semesters_courses.semester','sessions_semesters_courses.course_id', 'u1.name as int_name', 'u2.name as ext_name')
->join('teachers_courses','sessions_semesters_courses.course_id','=','teachers_courses.course_id')
->join('users as u2','u2.id','=','teachers_courses.external_id', 'left outer')
->leftjoin('users as u1','u1.id','=','teachers_courses.internal_id')
->where('session',$request->input('session'))->where('semester',$request->input('semester'))
->get();

 var_dump($result);

return view('layouts.courseTracking',compact('result'));

*/




    }







}
