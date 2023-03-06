<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AuthController@index')->name('login');

Route::post('/login/action', 'AuthController@action_login')->name('action.login');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    
    Route::group(['prefix' => 'ticket'], function () {
        Route::get('/', 'TicketController@index')->name('ticket');
        Route::get('/new-request', 'TicketController@new_request')->name('ticket.new_request');
    });
    
    Route::group(['prefix' => 'cv-review'], function () {
        Route::get('/', 'FeedbackController@cv_review')->name('cv-review');
    });
    
    Route::group(['prefix' => 'interview-feedback'], function () {
        Route::get('/', 'FeedbackController@interview_feedback')->name('interview-feedback');
    });
    
    Route::group(['prefix' => 'hb-confirmation'], function () {
        Route::get('/', 'ApprovalRequestController@hb_confirmation')->name('hb-confirmation');
    });
    
    Route::group(['prefix' => 'probation'], function () {
        Route::get('/', 'ProbationController@index')->name('probation');
    });
    
    Route::group(['prefix' => 'hiring-brief'], function () {
        Route::get('/', 'HiringProcessController@hiring_brief')->name('hiring-brief');
    });
    
    Route::group(['prefix' => 'sourcing-screening'], function () {
        Route::get('/', 'HiringProcessController@sourcing_screening')->name('sourcing-screening');
    });
    
    Route::group(['prefix' => 'interview-process'], function () {
        Route::get('/', 'HiringProcessController@interview_process')->name('interview-process');
    });
    
    Route::group(['prefix' => 'final-process'], function () {
        Route::get('/', 'HiringProcessController@final_process')->name('final-process');
    });
    
    Route::get('logout', 'AuthController@logout')->name('logout');
});