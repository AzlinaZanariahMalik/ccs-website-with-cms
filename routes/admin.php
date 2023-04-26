<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Livewire\UserLoginForm;
use \App\Http\Controllers\LogoController;
use \App\Http\Controllers\CropController;
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

 Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        
        Route::view('/login','back.pages.auth.login')->name('login'); 
        Route::view('/forgot-password','back.pages.auth.forgot')->name('forgot-password');
        Route::get('/password/reset/{token}',[UserController::class,'ResetForm'])->name('reset-form');
 
        Route::post('/login',[UserLoginForm::class,'LoginHandler']); 

    });

Route::prefix('admin')->name('admin.')->group(function(){

   

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
       
        Route::get('/home',[UserController::class,'index'])->name('home');
        Route::post('/logout',[UserController::class, 'logout'])->name('logout');
      
       

        //User Management
        Route::view('/user-manage','back.pages.usermanage')->name('user-manage');

        //File
        Route::view('/files-management','back.pages.dlfform')->name('files-management');

        //Announcement
        Route::view('/announcement','back.pages.announce.announcement')->name('announcement');
        Route::view('/add-announce','back.pages.announce.add-announce')->name('add-announce');
        Route::get('/edit-announcement/{id}',[UserController::class,'ShowAnnounce'])->name('edit-announcement');
        //Content Management
        //About CCS
        Route::view('/about','back.pages.aboutcollege.about')->name('about');
        Route::view('/vision','back.pages.aboutcollege.vision')->name('vision');
        Route::view('/mission','back.pages.aboutcollege.mission')->name('mission');
        Route::view('/goal','back.pages.aboutcollege.goal')->name('goal');
        Route::view('/college-history','back.pages.aboutcollege.collegehistory')->name('college-history');

        //Program
        Route::view('/academic-program','back.pages.program.academicprogram')->name('academic-program');
        Route::view('/add-program','back.pages.program.addprogram')->name('add-program');
        Route::get('/edit-program/{id}',[UserController::class,'ShowProgram'])->name('edit-program');

        //banner
        Route::view('/banner','back.pages.banner')->name('banner');
        //dean
        Route::view('/deans-corner','back.pages.deanscorner')->name('deans-corner');

        //Department
        Route::view('/department','back.pages.dept.department')->name('department');
        Route::view('/add-department','back.pages.dept.adddept')->name('add-department');
        Route::get('/edit-department/{id}',[UserController::class,'ShowDept'])->name('edit-department');

        //faculty
        Route::view('/faculty-and-staff','back.pages.faculty.facultyandstaff')->name('faculty-and-staff');
        Route::get('/edit-faculty/{id}',[UserController::class,'Showfaculty'])->name('edit-faculty');

        Route::view('/contact','back.pages.contact')->name('contact');

        //Organization
        Route::view('/pythons','back.pages.org.pythons')->name('pythons');
        Route::get('/edit-organization/{id}',[UserController::class,'ShowOrg'])->name('edit-organization');

        //Certificate
        Route::view('/certifications','back.pages.cert.certifications')->name('certifications');
        
        //News
        Route::prefix('news')->name('news.')->group(function(){
            Route::view('/add-news','back.pages.news.addnews')->name('add-news');
            Route::post('/create',[UserController::class, 'createNews'])->name('create');
            Route::view('/news-management','back.pages.news.newsmanagement')->name('news-management');
            Route::view('/highlight-news','back.pages.news.highlight-news')->name('highlight-news');
            Route::get('/show-news/{id}',[UserController::class,'ShowNews'])->name('show-news');
           
            
        });
        //Settings
         Route::view('/profile','back.pages.profile')->name('profile');
        
         Route::post('/crop',[UserController::class,'changeProfilePicture'])->name('crop');
         Route::view('/settings','back.pages.settings')->name('settings');
       
        //Alumni
        Route::prefix('alumni')->name('alumni.')->group(function(){
            Route::view('/alumni-manage','back.pages.alumni.alumnimanage')->name('alumni-manage');
            Route::view('/verify-alumni','back.pages.alumni.verify')->name('verify-alumni');
   
        });

        


       
 

    }); 

});