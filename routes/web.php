<?php

use Illuminate\Support\Facades\Route;


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
