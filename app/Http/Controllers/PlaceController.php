<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PlaceController extends Controller
{
    //
    function nearbySearch (Request $request) {
        $google_key = env('GOOGLE_PLACE_API_KEY');
        $response = Http::get("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$request->lat,$request->lng&radius=2500&type=restaurant&key=$google_key");
        return $response->json();
    }

    function loadmore (Request $request) {
        $google_key = env('GOOGLE_PLACE_API_KEY');
        $response = Http::get("https://maps.googleapis.com/maps/api/place/nearbysearch/json?&key=$google_key&pagetoken=$request->pagetoken");
        return $response->json();
    }

    function textsearch (Request $request) {
        $google_key = env('GOOGLE_PLACE_API_KEY');
        $response = Http::get("https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+$request->q&key=$google_key");
        return $response->json();
    }
}
