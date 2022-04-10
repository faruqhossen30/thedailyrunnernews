<?php

namespace App\Http\Controllers\Backend\Location;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Upazila;
use Illuminate\Http\Request;

class LoactionAjaxController extends Controller
{
    public function districtFromDivision(Request $request, $id)
    {
        if($request->ajax()){
            $district = District::where('division_id', $id)->orderBy('name', 'asc')->get();

            return response()->json($district);
            // return $id;
        }
    }
    public function upazilaFromDistrict(Request $request, $id)
    {
        if($request->ajax()){
            $upazilas = Upazila::where('district_id', $id)->orderBy('name', 'asc')->get();

            return response()->json($upazilas);
            // return $id;
        }
    }
}
