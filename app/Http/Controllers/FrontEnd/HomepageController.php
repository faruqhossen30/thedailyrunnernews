<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\District;
use App\Models\Division;
use App\Models\Vot\Vot;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use EasyBanglaDate\Types\BnDateTime;
use EasyBanglaDate\Types\DateTime as EnDateTime;

class HomepageController extends Controller
{
    public function homepage()
    {
        $news         = News::all();
        $lastnews     = News::first();
        $latestnews   = News::take(4)->get();
        $natinoal     = News::take(6)->get();
        $categorynews = Category::with('news')->get();
        $vots          = Vot::take(1)->get();
        $divissions = Division::all();
        // return $vot;



        return view('frontend.homepage', compact('news', 'latestnews', 'natinoal', 'categorynews', 'lastnews', 'vots', 'divissions'));
    }
}
