<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Sessions_semesters_courses;
use DB;
class courseEntryController extends Controller
{



    

public function ExistingCoursesEntry(Request $request){



	$total = $request->input('total');
	$c = count($total);

	for($i=0; $i<$c; $i++)
	{
		$sessions_semesters_courses=new Sessions_semesters_courses;
		$sessions_semesters_courses->session=$request->input('session');
		$sessions_semesters_courses->semester=$request->input('semester');
		$sessions_semesters_courses->course_id=$total[$i];
	    //var_dump($total);
		$sessions_semesters_courses->save();
	}


	return redirect('/home')->with('info','ata added successfully');

}





public function InsertToNewCourses(Request $request){

	$this->validate($request,[
		'session'=> 'required',
		'semester'=> 'required',
		'courseCode'=> 'required',
		'courseTitle'=>'required',
		'TheoryLab'=>'required',
		'credit'=>'required']);
   
	$courseCode = $request->input('courseCode');
	$courseTitle = $request->input('courseTitle');
	$TheoryLab = $request->input('TheoryLab');
	$credit = $request->input('credit');
	
	$c = count($courseCode);
	for($i=0; $i<$c; $i++)
	{
		$courses=new Course;
		//$courses->session=$request->input('session');
		//$courses->semester=$request->input('semester');
		$courses->courseCode=$courseCode[$i];
		$courses->courseTitle=$courseTitle[$i];
		$courses->TheoryLab=$TheoryLab[$i];
		$courses->credit=$credit[$i];
		$courses->save();
	}
	return redirect('/home')->with('info','data added successfully');
}




public function Courses(){
$coursesdata = DB::table('courses')->get();
$data = DB::table('sessions')->get();
return view('layouts.courseEntry',compact('coursesdata','data'));
  }




}


