<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\Blog\SubCategory;
use Illuminate\Http\Request;

class SubcategorywiseController extends Controller
{
    public function subcategoryNews(Request $request, $id){

        $category = Category::firstWhere('id', $id);
        $subcategory = SubCategory::firstWhere('id', $id);
        $allnews  = News::where('sub_category_id', $id)->orderBy('id', 'desc')->get();

        $latestnews   = News::take(6)->get();

        return view('frontend.subcategorynews',compact('category', 'allnews','latestnews','subcategory'));
    }
}
