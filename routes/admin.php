<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Livewire\UserLoginForm;
use \App\Http\Controllers\LogoController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register uaer routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "auth" middleware group. Make something great!
|
*/

 Route::middleware(['guest:web'])->group(function(){
        
        Route::view('/login','back.pages.auth.login')->name('login'); 
        Route::view('/forgot-password','back.pages.auth.forgot')->name('forgot-password');
        Route::get('/password/reset/{token}',[UserController::class,'ResetForm'])->name('reset-form');

        Route::post('/login',[UserLoginForm::class,'LoginHandler']); 

    });

Route::prefix('admin')->name('admin.')->group(function(){

   

    Route::middleware(['auth:web'])->group(function(){
       
        Route::get('/home',[UserController::class,'index'])->name('home');
        Route::post('/logout',[UserController::class, 'logout'])->name('logout');
      
       

        //User Management
        Route::view('/user-manage','back.pages.usermanage')->name('user-manage');

        //Content Management
        //About CCS
        Route::view('/about','back.pages.about')->name('about');
        Route::view('/vision-mission','back.pages.visionmission')->name('vision-mission');
        Route::view('/goal','back.pages.goal')->name('goal');
        Route::view('/college-history','back.pages.collegehistory')->name('college-history');

        Route::view('/academic-program','back.pages.academicprogram')->name('academic-program');
        Route::view('/banner','back.pages.banner')->name('banner');
        Route::view('/deans-corner','back.pages.deanscorner')->name('deans-corner');

        Route::view('/department','back.pages.department')->name('department');
        Route::view('/faculty-and-staff','back.pages.facultyandstaff')->name('faculty-and-staff');
        Route::view('/contact','back.pages.contact')->name('contact');
        Route::view('/pythons','back.pages.pythons')->name('pythons');
        Route::view('/certifications','back.pages.certifications')->name('certifications');
        
        //News
        Route::prefix('news')->name('news.')->group(function(){
            Route::view('/add-news','back.pages.addnews')->name('add-news');
            Route::post('/create',[UserController::class, 'createNews'])->name('create');
            Route::view('/news-management','back.pages.newsmanagement')->name('news-management');
        });
        //Settings
         Route::view('/profile','back.pages.profile')->name('profile');
        
         Route::post('/change-profile-picture',[UserController::class,'changeProfilePicture'])->name('change-profile-picture');
         Route::view('/settings','back.pages.settings')->name('settings');
       
         Route::post('/change-logo',[UserController::class,'changeLogo'])->name('change-Logo');
       
 

    }); 

});