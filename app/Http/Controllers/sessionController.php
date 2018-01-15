<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class sessionController extends Controller
{
    public function CourseEntryModuleSession(){
$data = DB::table('sessions')->get();
return view('layouts.courseEntry',compact('data'));
  }



     public function CourseAssignModuleSession(){
$data = DB::table('sessions')->get();
return view('layouts.courseAssignSession',compact('data'));
    }




     public function CourseTakingModuleSession(){
$data = DB::table('sessions')->get();
return view('layouts.courseTrackingSession',compact('data'));
   }

     public function CreateNewSession(){
$data = DB::table('sessions')->get();
return view('layouts.sessionCreate',compact('data'));
   }





}
