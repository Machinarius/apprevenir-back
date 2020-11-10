<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country as countries;
use App\Models\State;
use App\Models\City;

class CountryController extends Controller
{
    public function countries(Request $request)
    {
        $countries = countries::filter($request)->get();

        return response()->json(['success' => true, 'data' => $countries], 200);
    }

    public function states(Request $request)
    {
        $states = State::filter($request)->get();

        return response()->json(['success' => true, 'data' => $states], 200);
    }

    public function cities(Request $request)
    {
        $cities = City::filter($request)->get();

        return response()->json(['success' => true, 'data' => $cities], 200);
    }
}
