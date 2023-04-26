<?php 
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AlumniController;

Route::prefix('alumni-tracer-study')->name('alumni-tracer-study.')->group(function(){
    Route::middleware(['guest:alu'])->group(function(){
        
        Route::view('/sign-in','website.alumni.auth.login')->name('sign-in');
        Route::view('/sign-up','website.alumni.auth.register')->name('sign-up'); 
  
    }); 
  
    Route::middleware(['auth:alu'])->group(function(){
       
        Route::get('/home',[AlumniController::class,'index'])->name('home');
        Route::post('/sign-out',[AlumniController::class,'signout'])->name('sign-out');
  
    });
  });
 