<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use Illuminate\Http\Request;

class CategorywisenewsController extends Controller
{
    public function categoryNews(Request $request, $id)
    {

        $category = Category::firstWhere('id', $id);
        $allnews = News::where('category_id', $id)->orderBy('id', 'desc')->get();
        // return  $allnews;
        return view('frontend.categorynews', compact('category', 'allnews'));
    }
}
