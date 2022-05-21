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
    public function locationWisenews(Request $request)
    {




        $divisionid = $request->division_id;
        $districtid = $request->district_id;
        $upzilaid = $request->upazila_id;

        $allnews = News::where('division_id', $divisionid)
            ->when($districtid, function ($query, $districtid) {
                return $query->where('district_id', $districtid);
            })->when($upzilaid, function ($query, $upzilaid) {
                return $query->where('upazila_id', $upzilaid);
            })
            ->get();

            $latestnews   = News::take(4)->get();

        return view('frontend.locationnews', compact('allnews','latestnews'));
    }
}
