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
        Route::view('/announcement','back.pages.announcement')->name('announcement');
        Route::view('/add-announce','back.pages.add-announce')->name('add-announce');
        Route::get('/edit-announcement/{id}',[UserController::class,'ShowAnnounce'])->name('edit-announcement');
        //Content Management
        //About CCS
        Route::view('/about','back.pages.about')->name('about');
        Route::view('/vision','back.pages.vision')->name('vision');
        Route::view('/mission','back.pages.mission')->name('mission');
        Route::view('/goal','back.pages.goal')->name('goal');
        Route::view('/college-history','back.pages.collegehistory')->name('college-history');

        Route::view('/academic-program','back.pages.academicprogram')->name('academic-program');
        Route::view('/add-program','back.pages.addprogram')->name('add-program');
        Route::get('/edit-program/{id}',[UserController::class,'ShowProgram'])->name('edit-program');
        Route::view('/banner','back.pages.banner')->name('banner');
        Route::view('/deans-corner','back.pages.deanscorner')->name('deans-corner');

        Route::view('/department','back.pages.department')->name('department');
        Route::view('/add-department','back.pages.adddept')->name('add-department');
        Route::get('/edit-department/{id}',[UserController::class,'ShowDept'])->name('edit-department');
        Route::view('/faculty-and-staff','back.pages.facultyandstaff')->name('faculty-and-staff');
        Route::get('/edit-faculty/{id}',[UserController::class,'Showfaculty'])->name('edit-faculty');
        Route::view('/contact','back.pages.contact')->name('contact');
        Route::view('/pythons','back.pages.pythons')->name('pythons');
        Route::get('/edit-organization/{id}',[UserController::class,'ShowOrg'])->name('edit-organization');
        Route::view('/certifications','back.pages.certifications')->name('certifications');
        
        //News
        Route::prefix('news')->name('news.')->group(function(){
            Route::view('/add-news','back.pages.addnews')->name('add-news');
            Route::post('/create',[UserController::class, 'createNews'])->name('create');
            Route::view('/news-management','back.pages.newsmanagement')->name('news-management');
            Route::view('/highlight-news','back.pages.highlight-news')->name('highlight-news');
            Route::get('/show-news/{id}',[UserController::class,'ShowNews'])->name('show-news');
           
            
        });
        //Settings
         Route::view('/profile','back.pages.profile')->name('profile');
        
         Route::post('/crop',[UserController::class,'changeProfilePicture'])->name('crop');
         Route::view('/settings','back.pages.settings')->name('settings');
       
        

        


       
 

    }); 

});