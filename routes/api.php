<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['api']], function() {
    /**
     * API Routes for Students
     */
    Route::get('students', 'StudentController@index');
    Route::get('students/{student}', 'StudentController@show');
    Route::post('students', 'StudentController@store');
    Route::put('students/{student}', 'StudentController@update');
    Route::delete('students/{student}', 'StudentController@destroy');

    /**
     * API Routes for School Classes
     */
    Route::get('schoolclasses', 'SchoolClassController@index');
    Route::get('schoolclasses/{schoolclass}', 'SchoolClassController@show');
    Route::post('schoolclasses', 'SchoolClassController@store');
    Route::put('schoolclasses/{schoolclass}', 'SchoolClassController@update');
    Route::delete('schoolclasses/{schoolclass}', 'SchoolClassController@destroy');

    /**
     * API Routes for Lectures
     */
    Route::get('lectures', 'LectureController@index');
    Route::get('lectures/{lecture}', 'LectureController@show');
    Route::post('lectures', 'LectureController@store');
    Route::put('lectures/{lecture}', 'LectureController@update');
    Route::delete('lectures/{lecture}', 'LectureController@destroy');

    /**
     * API Routes for Curriculum
     */
    Route::get('curriculum/{schoolclass}', 'CurriculumController@show');
    Route::post('curriculum', 'CurriculumController@store');
    Route::delete('curriculum/{schoolclass}', 'CurriculumController@destroy');
});