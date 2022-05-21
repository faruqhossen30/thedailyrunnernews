<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\Division;
use App\Models\Vot\Vot;
use Illuminate\Http\Request;

class LocationwisenewsController extends Controller
{
    public function locationWisenews(Request $request, $id){


        // $allnews = News::all();
        // return  $allnews;
        // $allnews  = News::where('upazila_id', $id)->orderBy('id', 'desc')->get();
        // return $request->all();
        $latestnews   = News::take(6)->get();
        return  $request ->upazila_id;

        $news         = News::all();
        $lastnews     = News::first();
        $latestnews   = News::take(4)->get();
        $natinoal     = News::take(6)->get();
        $categorynews = Category::with('news')->get();
        $vots          = Vot::take(1)->get();
        $divissions = Division::all();

        // dd($news);
        return view('frontend.homepage',compact('allnews','latestnews','lastnews','categorynews','news'));
    }
}
