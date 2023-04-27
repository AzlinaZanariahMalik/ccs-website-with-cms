<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebsiteController;
use \App\Http\Controllers\AlumniController;

/*
|--------------------------------------------------------------------------
| Web Routes - this is for Guest Website
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.pages.home');
});


Route::view('/vision-mission','website.pages.visionmission')->name('vision-mission');
Route::view('/goals','website.pages.goals')->name('goals');
Route::view('/about-ccs','website.pages.about-ccs')->name('about-ccs');
Route::view('/news','website.pages.news')->name('news');   
Route::view('/history','website.pages.history')->name('history');  
Route::view('/department','website.pages.department')->name('department');
Route::view('/organization','website.pages.organization')->name('organization');
Route::view('/undergraduate','website.pages.undergraduate')->name('undergraduate');
Route::view('/graduate','website.pages.graduate')->name('graduate');
Route::view('/dean-corner','website.pages.deancorner')->name('dean-corner');
Route::view('/faculty-and-staff','website.pages.facultystaff')->name('faculty-and-staff');
Route::view('/contact-us','website.pages.contactform')->name('contact-us');

Route::view('/about-project','website.pages.aboutproject')->name('about-project');


//get their parameters clickable items
Route::prefix('program')->name('program.')->group(function(){
Route::get('/undergraduate/{id}/{program_name}',[WebsiteController::class,'ShowAcademicProgram'])->name('undergraduate');
Route::get('/graduate/{id}/{program_name}',[WebsiteController::class,'ShowAcademicProgram'])->name('graduate');
});

Route::get('/news-post/{id}/{news_title}',[WebsiteController::class,'ShowNews'])->name('news-post');
Route::get('/department-show/{id}/{dept_name}',[WebsiteController::class,'ShowDept'])->name('department-show');
Route::get('/organization-show/{id}/{org_name}',[WebsiteController::class,'ShowOrg'])->name('organization-show');
Route::get('/faculty-and-staff-show/{id}/{name}',[WebsiteController::class,'ShowUser'])->name('faculty-and-staff-show');
Route::get('/current-announcement/{id}/{an_title}',[WebsiteController::class,'ShowAnnounce'])->name('current-announcement');
Route::get('/enroll/{id}/{program_name}',[WebsiteController::class,'ShowEnroll'])->name('enroll');

//search
Route::get('search',[WebsiteController::class,'Searching'])->name('search');

