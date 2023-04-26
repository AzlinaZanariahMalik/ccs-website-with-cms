<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
class WebsiteController extends Controller
{
    //Website Page
    //pass and get academic program id
    public function ShowAcademicProgram(Request $request, $id = null,  $program_name = null){
    
        return view('website.item.program')->with(['id'=>$id,'program_name'=>$program_name]);

    }
    
    //pass and get news id
    public function ShowNews(Request $request, $id = null, $news_title = null){
    
        return view('website.item.news')->with(['id'=>$id, 'news_title'=>$news_title]);

    }

    //pass and get dept id
    public function ShowDept(Request $request, $id = null, $dept_name = null){
    
        return view('website.item.dept')->with(['id'=>$id, 'dept_name'=>$dept_name]);

    }

    //pass and get org id
    public function ShowOrg(Request $request, $id = null, $org_name = null){
    
        return view('website.item.org')->with(['id'=>$id, 'org_name'=>$org_name]);

    }

    //pass and get user id
    public function ShowUser(Request $request, $id = null, $name = null){
    
        return view('website.item.faculty')->with(['id'=>$id, 'name'=>$name]);

    }
    
     //pass and get Announcement id
     public function ShowAnnounce(Request $request, $id = null, $an_title = null){
    
        return view('website.item.announce')->with(['id'=>$id, 'an_title'=>$an_title]);

    }

    //pass and get enroll id
    public function ShowEnroll(Request $request, $id = null, $program_name = null){
    
        return view('website.pages.enrollform')->with(['id'=>$id, 'program_name'=>$program_name]);

    }

    //searching
    public function Searching(Request $request){
        if($request->search){
            $searchNews = News::where('news_title', 'LIKE', '%'.$request->search.'%')->latest()->paginate(5);
            return view('website.pages.searchresult', compact('searchNews'));
            //return view('website.pages.searchresult',['searchNews' => $searchNews]);

        }else{
            return redirect()->back()->with('message','No Search Results Found');
        }

    }


}
 