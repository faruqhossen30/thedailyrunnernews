<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
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


           return view('frontend.homepage',
           compact('news', 'latestnews','natinoal','categorynews', 'lastnews'));

    }


    // public function index()
    // {
    //     // return view('welcome');

    //     $bongabda = new BnDateTime(Carbon::now(), new DateTimeZone('Asia/Dhaka'));
    //     // $bongabda->setDate(1398, 1, 1);


    // }
}
