<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AlumniUser;
class AlumniController extends Controller
{
    public function index(Request $request){
        return view('website.alumni.pages.home');
    }

    public function signout(){
        Auth::guard('alu')->logout();
        return redirect()->route('alumni-tracer-study.sign-in');
    }
}
 