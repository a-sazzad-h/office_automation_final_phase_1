<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



///auth module

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


///session module

Route::get('/sessionCreate',function(){
	return view('layouts.sessionCreate');
});

Route::post('/insertToSession','createSession@add');
Route::get('/sessionCreate','sessionController@CreateNewSession');

///semester module

Route::get('/semesterCreate',function(){
	return view('layouts.semesterCreate');
});



///semester details module


Route::get('/semesterDetails',function(){
	return view('layouts.semesterDetails');
});





///Roaster module
Route::get('/Radding',function(){
	return view('layouts.Radding');
});
Route::get('/Rshow','roasterEntryController@Rshow');
Route::post('/insertToRadding','roasterEntryController@add');



///courseEntry module
Route::get('/courseEntry',function(){
	return view('layouts.courseEntry');
});

//Route::get('/courseEntry','sessionController@CourseEntryModuleSession');
Route::get('/courseEntry','CourseEntryController@Courses');
Route::post('/insertToEntry','CourseEntryController@NewCoursesEntry');
Route::post('/InsertToExistingCourses','CourseEntryController@ExistingCoursesEntry');

///courseAssign module

Route::get('/courseAssignSession',function(){
	return view('layouts.courseAssignSession');
});

Route::get('/courseAssignSession','sessionController@CourseAssignModuleSession');
Route::post('/insertToCourseAssign','assignController@TeachersSelection');
Route::post('/insertToAssignTeacher','assignController@coursesAssign');



///tracking module

Route::get('/courseTrackingSession','sessionController@CourseTakingModuleSession');
Route::post('/insertCourseTracking','trackingController@coursesTraking');






Route::get('/casualLeave', function () {
    return view('layouts.casualLeave');
});