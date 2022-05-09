<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use Illuminate\Http\Request;

class SingleNewsController extends Controller
{
    public function singlenews(Request $request, $id){

        $news = News::firstWhere('id', $id);

        return view('frontend.singlenews', compact('news'));
    }
}
